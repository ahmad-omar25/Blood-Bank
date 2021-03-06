@extends('dashboard.layout.app')
@section('title') {{__('dashboard.governorate_create')}} @endsection
@section('content')
    <section class="content-header">
        <h1 style="margin-bottom: 30px;">
            {{__('dashboard.governorate_create')}}
        </h1>
        <ol class="breadcrumb">
            <li class="active">{{__('dashboard.governorate_create')}}</li>
            <li><a href="{{route($routeName.'.index')}}">{{__('dashboard.governorates')}}</a></li>
            <li><a href="{{route('admin.dashboard')}}">{{__('control.dashboard')}}</a></li>
        </ol>
        <div class="box box-primary">
            <form role="form" action="{{route($routeName.'.store')}}" method="POST">
                @include('dashboard.'.$routeName.'.form')
                <div class="box-footer">
                    @include('dashboard.shared.buttons.add')
                    @include('dashboard.shared.buttons.btn-back')
                </div>
            </form>
        </div>
    </section>
@endsection
