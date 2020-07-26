<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index(Request $request) {
//        $rows = $this->model::when($request->search, function ($query) use ($request) {
//                return $query->where('first_name', 'like', '%' . $request->search . '%');
//        })->get();
        $rows = $this->model::latest()->paginate(5);
        $routeName = $this->getClassNameFromModel();
        return view('dashboard.'.$routeName.'.index', compact('rows','routeName'));
    }

    public function create() {
        $routeName = $this->getClassNameFromModel();
        return view('dashboard.'.$routeName.'.create', compact('routeName'));
    }

    public function edit($id) {
        try {
            $row = $this->model::findOrFail($id);
            $routeName = $this->getClassNameFromModel();
            return view('dashboard.'.$routeName.'.edit', compact('row','routeName'));
        } catch (\Exception $exception) {
            return redirect()->route($routeName.'.index')->with('error', __('dashboard.error'));
        }
    }

    public function destroy($id) {
        try {
            $routeName = $this->getClassNameFromModel();
            $this->model::findOrFail($id)->delete();
            return redirect()->route($routeName.'.index')->with('success', __('dashboard.delete_successfully'));
        } catch (\Exception $exception) {
            return redirect()->route($routeName.'.index')->with('error', __('dashboard.error'));
        }
    }

    // Get Routes Name
    protected function getClassNameFromModel() {
        return strtolower($this->pluralModelName());
    }

    // Add (s) In Models
    protected function pluralModelName() {
        return Str::plural($this->getModelName());
    }

    // Remove (s) From Models
    protected function getModelName() {
        return class_basename($this->model);
    }
}

