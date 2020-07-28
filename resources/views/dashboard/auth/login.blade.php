<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
@section('title') {{__('dashboard.login')}} @endsection
@include('dashboard.includes.head')
@include('dashboard.shared.row')
<body class="hold-transition login-page">
<style>
    .invalid-feedback {
        color: red;
    }
</style>
<div class="login-box">
    <div class="login-logo">
        <a href=""><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg" style="margin-top: 20px">{{__('dashboard.login-page')}}</p>
        <div class="messages" style="padding: 7px 15px 20px 15px;">
            @include('dashboard.includes.alerts.errors')
        </div>
        <form action="{{route('admin.sign-in')}}" method="post">
            @csrf
            @php $input = "email" @endphp
            <div class="form-group has-feedback">
                <input class="form-control @error($input) is-invalid @enderror" value="{{old($input)}}"
                       name="{{$input}}" placeholder="{{__('dashboard.email')}}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @error($input)
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror
            </div>
            @php $input = "password" @endphp
            <div class="form-group has-feedback">
                <input type="{{$input}}" name="{{$input}}" class="form-control @error($input) is-invalid @enderror"
                       placeholder="{{__('dashboard.password')}}">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @error($input)
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-flat"
                    style="margin-bottom: 20px">{{__('dashboard.sign-in')}}</button>
        </form>
        <a href="#">{{__('dashboard.forgot-password')}}</a><br>
    </div>
    <!-- /.login-box-body -->
</div>
@include('dashboard.includes.scripts')
</body>
</html>
