@extends('dashboard.layout.app')
@section('title') {{__('dashboard.settings')}} @endsection
@section('content')
    @include('dashboard.shared.row')
    <section class="content-header">
        <h1 style="margin-bottom: 30px;">
            {{__('dashboard.settings')}}
            <small>{{$rows->total()}}</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">{{__('dashboard.settings')}}</li>
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
                        <th class="text-center">{{__('dashboard.phone')}}</th>
                        <th class="text-center">{{__('dashboard.email')}}</th>
                        <th class="text-center">{{__('dashboard.whatsapp')}}</th>
                        <th class="text-center">{{__('dashboard.facebook_url')}}</th>
                        <th class="text-center">{{__('control.action')}}</th>
                    </tr>
                    @foreach($rows as $index=>$row )
                    <tr>
                        <td class="text-center">{{$index + 1}}</td>
                        <td class="text-center">{{$row->phone}}</td>
                        <td class="text-center">{{$row->email}}</td>
                        <td class="text-center">{{$row->whatsapp}}</td>
                        <td class="text-center">{{$row->facebook_url}}</td>
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
