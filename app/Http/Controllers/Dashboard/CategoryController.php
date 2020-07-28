<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\Governorates\Store;
use App\Http\Requests\Dashboard\Governorates\Update;
use App\Models\Category;

class CategoryController extends DashboardController
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
        $this->middleware('permission:categories_read')->only('index');
        $this->middleware('permission:categories_create')->only('create');
        $this->middleware('permission:categories_update')->only('edit');
        $this->middleware('permission:categories_delete')->only('destroy');
    }

    public function store(Store $request)
    {
        try {
            $routeName = $this->getClassNameFromModel();
            $this->model::create($request->all());
            return redirect()->route($routeName . '.index')->with('success', __('dashboard.added_successfully'));
        } catch (\Exception $exception) {
            return redirect()->route($routeName . '.index')->with('error', __('dashboard.error'));
        }
    }

    public function update(Update $request, $id)
    {
        try {
            $routeName = $this->getClassNameFromModel();
            $row = $this->model::findOrFail($id);
            $request = $request->all();
            $row->update($request);
            return redirect()->route($routeName . '.index', compact('row'))->with('success', __('dashboard.update_successfully'));
        } catch (\Exception $exception) {
            return redirect()->route($routeName . '.index')->with('error', __('dashboard.error'));
        }
    }
}
