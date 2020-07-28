@extends('site.layout.app')
@section('title', 'Admin | Dashboard')
@section('content')
    <div class="container">
        <!--Breadcrumb-->
        <nav class="my-5" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('site.home')}}">الرئيسيه</a></li>
                <li class="breadcrumb-item active" aria-current="page">تسجيل الدخول</li>
            </ol>
        </nav><!--End Breadcrumb-->
        <section class="signup-form my-4 py-4">
            <div class="my-5 text-center"><img src="{{asset('site/imgs/logo.png')}}" alt="logo"></div>
            <div class="message" style="padding: 0 130px;">
                @include('dashboard.includes.alerts.success')
                @include('dashboard.includes.alerts.errors')
            </div>
            <form action="{{route('site.sign-in')}}" class="w-75 mx-auto my-5" method="POST">
                @csrf
                <div class="form-group">
                    @php $input = "phone" @endphp
                    <label style="float:right">{{__('dashboard.phone')}}</label>
                    <input name="{{$input}}" class="form-control @error($input) is-invalid @enderror" value="{{old($input)}}">
                    @error($input)
                    <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group">
                    @php $input = "password" @endphp
                    <label style="float:right">{{__('dashboard.password')}}</label>
                    <input type="password" name="{{$input}}" class="form-control @error($input) is-invalid @enderror">
                    @error($input)
                    <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="clr"></div>
                <div class="form-row my-4">
                    <div class="col">
                        <button type="submit" class="form-control py-3 bg-success text-white">دخول</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
