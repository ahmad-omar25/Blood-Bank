<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\Governorates\Store;
use App\Http\Requests\Dashboard\Governorates\Update;
use App\Models\Governorate;

class GovernorateController extends DashboardController
{

    public function __construct(Governorate $model)
    {
        parent::__construct($model);
        $this->middleware('permission:governorates_read')->only('index');
        $this->middleware('permission:governorates_create')->only('create');
        $this->middleware('permission:governorates_update')->only('edit');
        $this->middleware('permission:governorates_delete')->only('destroy');
    }

    public function filter($rows) {
        if (request()->has('name') && request()->get('name') !='') {
            $rows = $rows->where('name', request()->get('name'));
        }
        return $rows;
    }

    public function store(Store $request) {
        try {
            $routeName = $this->getClassNameFromModel();
            $this->model::create($request->all());
            return redirect()->route($routeName.'.index')->with('success', __('dashboard.added_successfully'));
        } catch (\Exception $exception) {
            return redirect()->route($routeName.'.index')->with('error', __('dashboard.error'));
        }
    }

    public function update(Update $request, $id) {
        try {
            $routeName = $this->getClassNameFromModel();
            $row = $this->model::findOrFail($id);
            $request = $request->all();
            $row->update($request);
            return redirect()->route($routeName.'.index', compact('row'))->with('success', __('dashboard.update_successfully'));
        } catch (\Exception $exception) {
            return redirect()->route($routeName.'.index')->with('error', __('dashboard.error'));
        }
    }

    public function destroy($id) {
        try {

            $routeName = $this->getClassNameFromModel();
            $governorate =  $this->model::findOrFail($id);
            if (!$governorate) {
                return redirect()->route($routeName.'.index')->with('error', __('dashboard.error'));
            } else {
                $governorates = $governorate->cities();
                if (isset($governorates) && $governorates->count() > 0) {
                    return redirect()->route($routeName.'.index')->with('error', __('dashboard.delete_error'));
                } else {
                    $governorate->delete();
                }
            }
            return redirect()->route($routeName.'.index')->with('success', __('dashboard.delete_successfully'));
        } catch (\Exception $exception) {
            return redirect()->route($routeName.'.index')->with('error', __('dashboard.error'));
        }
    }

}
