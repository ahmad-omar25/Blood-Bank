@csrf
@include('dashboard.shared.row')
<style>
    .invalid-feedback {
        color: red;
    }
</style>
<div class="box-body">
    <div class="row">
        <div class="col-md-6">
            @php $input = "first_name" @endphp
            <div class="form-group">
                <label for="{{$input}}">{{__('dashboard.first_name')}}</label>
                <input type="text" name="{{$input}}" value="{{isset($row) ? $row->{$input} : (old($input))}}"
                       class="form-control @error($input) is-invalid @enderror" id="{{$input}}">
                @error($input)
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            @php $input = "last_name" @endphp
            <div class="form-group">
                <label for="{{$input}}">{{__('dashboard.last_name')}}</label>
                <input type="text" name="{{$input}}" value="{{isset($row) ? $row->{$input} : (old($input))}}"
                       class="form-control @error($input) is-invalid @enderror" id="{{$input}}">
                @error($input)
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            @php $input = "email" @endphp
            <div class="form-group">
                <label for="{{$input}}">{{__('dashboard.email')}}</label>
                <input type="text" name="{{$input}}" value="{{isset($row) ? $row->{$input} : (old($input))}}"
                       class="form-control @error($input) is-invalid @enderror" id="{{$input}}">
                @error($input)
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            @php $input = "password" @endphp
            <div class="form-group">
                <label for="{{$input}}">{{__('dashboard.password')}}</label>
                <input type="password" name="{{$input}}" value=""
                       class="form-control @error($input) is-invalid @enderror" id="{{$input}}">
                @error($input)
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            @php $input = "password_confirmation" @endphp
            <div class="form-group">
                <label for="{{$input}}">{{__('dashboard.password_confirmation')}}</label>
                <input type="password" name="{{$input}}" value=""
                       class="form-control @error($input) is-invalid @enderror" id="{{$input}}">
                @error($input)
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror
            </div>
        </div>
    </div>
</div>

