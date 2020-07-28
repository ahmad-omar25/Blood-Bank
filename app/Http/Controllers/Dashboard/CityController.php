<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Cities\Store;
use App\Http\Requests\Dashboard\Cities\Update;
use App\Models\City;
use App\Models\Governorate;
use Illuminate\Http\Request;

class CityController extends DashboardController
{
    public function __construct(City $model)
    {
        parent::__construct($model);
        $this->middleware('permission:cities_read')->only('index');
        $this->middleware('permission:cities_create')->only('create');
        $this->middleware('permission:cities_update')->only('edit');
        $this->middleware('permission:cities_delete')->only('destroy');
    }

    public function index(Request $request)
    {
        $rows = $this->model::with('governorate')->latest()->paginate(5);
        $rows = $this->filter($rows);
        $routeName = $this->getClassNameFromModel();
        return view('dashboard.' . $routeName . '.index', compact('rows', 'routeName'));
    }

    public function create() {
        $routeName = $this->getClassNameFromModel();
        $governorates = Governorate::all();
        return view('dashboard.'.$routeName.'.create', compact('routeName', 'governorates'));
    }

    public function store(Store $request)
    {
        try {
            $this->model::create($request->all());
            return redirect()->route('cities.index')->with('success', __('dashboard.added_successfully'));
        } catch (\Exception $exception) {
            return redirect()->route('cities.index')->with('error', __('dashboard.error'));
        }
    }

    public function edit($id) {
        try {
            $row = $this->model::findOrFail($id);
            $routeName = $this->getClassNameFromModel();
            $governorates = Governorate::all();
            return view('dashboard.'.$routeName.'.edit', compact('row','routeName', 'governorates'));
        } catch (\Exception $exception) {
            return redirect()->route($routeName.'.index')->with('error', __('dashboard.error'));
        }
    }

    public function update(Update $request, $id)
    {
        try {
            $row = $this->model::findOrFail($id);
            $request = $request->all();
            $row->update($request);
            return redirect()->route('cities.index', compact('row'))->with('success', __('dashboard.update_successfully'));
        } catch (\Exception $exception) {
            return redirect()->route('cities.index')->with('error', __('dashboard.error'));
        }
    }
}
