@csrf
<style>
    .invalid-feedback {
        color: red;
    }
</style>
@php $input = "name" @endphp
<div class="box-body">
    <div class="form-group">
        <label for="{{$input}}">{{__('dashboard.name')}}</label>
        <input type="text" name="{{$input}}" value="{{isset($row) ? $row->{$input} : ""}}" class="form-control @error($input) is-invalid @enderror" id="{{$input}}">
        @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
