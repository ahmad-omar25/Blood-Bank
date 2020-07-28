@csrf
<style>
    .invalid-feedback {
        color: red;
    }
</style>
@php $input = "name" @endphp
<div class="box-body">
    <div class="form-group">
        <label for="{{$input}}">{{__('dashboard.city_name')}}</label>
        <input type="text" name="{{$input}}" value="{{isset($row) ? $row->{$input} : ""}}" class="form-control @error($input) is-invalid @enderror" id="{{$input}}">
        @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    @php $input = "governorate_id" @endphp
    <div class="form-group">
        <label>{{__('dashboard.governorates')}}</label>
        <select class="form-control" name="{{$input}}" style="height: 40px">
            @foreach($governorates as $governorate)
                <option value="{{$governorate->id}}" {{isset($rows) && $rows->{$input} == $governorate->id ? 'selected' : ''}}>{{$governorate->name}}</option>
            @endforeach
        </select>
        @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
