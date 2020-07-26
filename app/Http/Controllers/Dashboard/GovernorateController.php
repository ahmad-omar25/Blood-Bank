<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\Governorates\Store;
use App\Http\Requests\Dashboard\Governorates\Update;
use App\Models\Governorate;

class GovernorateController extends DashboardController
{
    // Dashboard Home Route
    public function dashboard() {
        return view('dashboard.home');
    }

    public function __construct(Governorate $model)
    {
        parent::__construct($model);
    }

    public function store(Store $request) {
        try {
            $this->model::create($request->all());
            return redirect()->route('governorates.index')->with('success', __('dashboard.added_successfully'));
        } catch (\Exception $exception) {
            return redirect()->route('governorates.index')->with('error', __('dashboard.error'));
        }
    }

    public function update(Update $request, $id) {
        try {
            $row = $this->model::findOrFail($id);
            $request = $request->all();
            $row->update($request);
            return redirect()->route('governorates.index', compact('row'))->with('success', __('dashboard.update_successfully'));
        } catch (\Exception $exception) {
            return redirect()->route('governorates.index')->with('error', __('dashboard.error'));
        }
    }
}
