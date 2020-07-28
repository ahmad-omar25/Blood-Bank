@extends('dashboard.layout.app')
@section('title') {{__('dashboard.cities')}} @endsection
@section('content')
    @include('dashboard.shared.row')
    <section class="content-header">
        <h1 style="margin-bottom: 30px;">
            {{__('dashboard.cities')}}
            <small>{{$rows->total()}}</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">{{__('dashboard.cities')}}</li>
            <li><a href="{{route('admin.dashboard')}}">{{__('control.dashboard')}}</a></li>
        </ol>
    </section>
    @component('dashboard.shared.table' , ['routeName' => $routeName])
        @slot('addButton')
        <div class="box-title">
            @if(auth()->user()->hasPermission($routeName.'_create'))
                <a href="{{route($routeName.'.create')}}">
                    <button type="button" class="btn btn-block btn-primary">
                        {{__('control.new')}}
                        <i class="fa fa-plus-square" style="margin: 0 5px"></i>
                    </button>
                </a>
            @else
                <button type="button" class="btn btn-block btn-primary disabled">
                    {{__('control.new')}}
                    <i class="fa fa-plus-square" style="margin: 0 5px"></i>
                </button>
            @endif
        </div>
        @endslot
        <div class="messages" style="padding: 3px 25px 0px 25px;">
            @include('dashboard.includes.alerts.success')
            @include('dashboard.includes.alerts.errors')
        </div>
        <div class="box" style="border-top: none;">
            <div class="box-body">
                @if(isset($rows) && $rows->count() > 0 )
                <table class="table table-bordered table table-hover">
                    <tbody>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">{{__('dashboard.city_name')}}</th>
                        <th class="text-center">{{__('dashboard.governorates')}}</th>
                        <th class="text-center">{{__('control.action')}}</th>
                    </tr>
                    @foreach($rows as $index=>$row )
                    <tr>
                        <td class="text-center">{{$index + 1}}</td>
                        <td class="text-center">{{$row->name}}</td>
                        <td class="text-center">{{$row->governorate->name}}</td>
                        <td class="text-center">
                            @include('dashboard.shared.buttons.edit')
                            @include('dashboard.shared.buttons.delete')
                        </td>
                    </tr>
                    @endforeach
                    @else
                        <div class="alert alert-danger text-center">
                            <h4>{{__('control.no_data_found')}}</h4>
                        </div>
                    @endif
                    </tbody>
                </table>
{{--                 {!! $rows->links() !!}--}}
            </div>
        </div>
    @endcomponent
@endsection
