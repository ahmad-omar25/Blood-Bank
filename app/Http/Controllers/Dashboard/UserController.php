<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Requests\Dashboard\Users\Store;
use App\Http\Requests\Dashboard\Users\Update;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends DashboardController
{
    protected $model;

    public function __construct(User $model)
    {
        parent::__construct($model);
        // Permissions Ulr
        $this->middleware('permission:users_read')->only('index');
        $this->middleware('permission:users_create')->only('create');
        $this->middleware('permission:users_update')->only('edit');
        $this->middleware('permission:users_delete')->only('destroy');
    }


    public function store(Store $request)
    {
        try {
            $request_data = $request->except(['password', 'password_confirmation', 'permissions']);
            $request_data['password'] = bcrypt($request->password);
            $user = $this->model::create($request_data);
            DB::beginTransaction();
            $user->attachRole('admin');
            $user->syncPermissions($request->input('permissions'));
            DB::commit();
            return redirect()->route('users.index')->with('success', __('dashboard.added_successfully'));
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->route('users.index')->with('error', __('dashboard.error'));
        }
    }


    public function update(Update $request, User $user)
    {
        $request_data = $request->except('permissions', 'password');
        if ($request->has('password') && !is_null($request->password)) {
            $user['password'] = bcrypt($request->password);
        }
        $user->update($request_data);
        $user->syncPermissions($request->input('permissions'));
        return redirect()->route('users.index')->with('success', __('dashboard.update_successfully'));
    }
}
