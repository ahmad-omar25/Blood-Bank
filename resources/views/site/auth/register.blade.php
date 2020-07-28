@extends('site.layout.app')
@section('title', 'Admin | Dashboard')
@section('content')
    <style>
        .invalid-feedback {
            text-align: right;
        }
    </style>
    <div class="container">
        <!--Breadcrumb-->
        <nav class="my-4" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('site.home')}}">الرئيسيه</a></li>
                <li class="breadcrumb-item active" aria-current="page">انشاء حساب جديد</li>
            </ol>
        </nav><!--End Breadcrumb-->
    </div><!--End container-->
    <section class="signup text-center">
        <div class="container">
            <div class="py-4 mb-4">
                <div class="my-5 text-center"><img src="{{asset('site/imgs/logo.png')}}" alt="logo"></div>
                <div class="message" style="padding: 0 130px;">
                    @include('dashboard.includes.alerts.success')
                    @include('dashboard.includes.alerts.errors')
                </div>
                <form action="{{route('site.postRegister')}}" method="POST" class="w-75 m-auto">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                @php $input = "name" @endphp
                                <label style="float:right">{{__('dashboard.name')}}</label>
                                <input type="text" name="{{$input}}" class="form-control @error($input) is-invalid @enderror" value="{{old($input)}}">
                                @error($input)
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                @php $input = "email" @endphp
                                <label style="float:right">{{__('dashboard.email')}}</label>
                                <input name="{{$input}}" class="form-control @error($input) is-invalid @enderror" value="{{old($input)}}">
                                @error($input)
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
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
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                @php $input = "governorates" @endphp
                                <label for="{{$input}}" style="float:right">{{__('dashboard.governorates')}}</label>
                                <select style="height: 45px;" class="form-control" id="{{$input}}" name="{{$input}}">
                                    @foreach($governorates as $governorate)
                                        <option value="{{$governorate->id}}" {{isset($rows) && $rows->{$input} == $governorate->id ? 'selected' : ''}} >{{$governorate->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                @php $input = "city_id" @endphp
                                <label for="{{$input}}" style="float:right">{{__('dashboard.cities')}}</label>
                                <select style="height: 45px;" class="form-control" id="{{$input}}" name="{{$input}}">
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}" {{isset($rows) && $rows->{$input} == $city->id ? 'selected' : ''}}>{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                @php $input = "blood_type_id" @endphp
                                <label for="{{$input}}" style="float:right">{{__('dashboard.bloodType')}}</label>
                                <select style="height: 45px;" class="form-control" id="{{$input}}" name="{{$input}}">
                                    @foreach($bloodTypes as $bloodType)
                                        <option value="{{$bloodType->id}}" {{isset($rows) && $rows->{$input} == $bloodType->id ? 'selected' : ''}} >{{$bloodType->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                @php $input = "birth_date" @endphp
                                <label style="float:right">{{__('dashboard.birth_date')}}</label>
                                <input type=""  id="datepicker" name="{{$input}}" placeholder="1993-11-9" class="form-control @error($input) is-invalid @enderror" value="{{old($input)}}">
                                @error($input)
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
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
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                @php $input = "password_confirmation" @endphp
                                <label style="float:right">{{__('dashboard.password_confirmation')}}</label>
                                <input type="password" name="{{$input}}" class="form-control @error($input) is-invalid @enderror">
                                @error($input)
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-block py-2">ارسال</button>
                </form>
            </div>
        </div>
    </section>
@endsection
