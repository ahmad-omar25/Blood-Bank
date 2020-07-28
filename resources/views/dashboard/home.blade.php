@extends('dashboard.layout.app')
@section('title') {{__('control.dashboard')}} @endsection
@section('content')
    <section class="content-header">
        <h1>
            {{__('control.dashboard')}}
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">
                <!-- Chat box -->
                <div class="box box-success"></div>
                <!-- /.box (chat box) -->
            </section>
        </div>
        <!-- /.row (main row) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{$bloodTypes->count()}}</h3>

                        <p>{{__('dashboard.bloodType')}}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{$cities->count()}}</h3>

                        <p>{{__('dashboard.cities')}}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{$governorates->count()}}</h3>

                        <p>{{__('dashboard.governorates')}}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{$users->count()}}</h3>

                        <p>{{__('dashboard.users')}}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </section>
@endsection
