<div class="col-md-12">
    <div class="form-group">
        <label>{{__('control.permissions')}}</label>
        <div class="nav-tabs-custom">
            @php
                $models = ['users', 'governorates', 'cities', 'bloodtypes', 'categories', 'settings'];
                $maps = ['read', 'create', 'update', 'delete'];
            @endphp
            <ul class="nav nav-tabs @if(app()->getLocale() == 'ar') pull-right @endif" style="padding: 0">
                @foreach($models as $index => $model)
                    <li class="{{$index == 0 ? 'active' : ''}}"><a href="#{{$model}}" data-toggle="tab">{{__('dashboard.'. $model)}}</a></li>
                @endforeach
            </ul>
            @php $input = "permissions" @endphp
            <div class="tab-content">
                @foreach($models as $index => $model)
                    <div class="tab-pane {{$index == 0 ? 'active' : ''}}" id="{{$model}}">
                        <div class="tabs_pre" style="padding: 15px">
                            @foreach($maps as $index => $map)
                            <label style="margin: 0 5px"><input style="margin: 0 10px" type="checkbox" name="permissions[]" value="{{$model}}_{{$map}}">{{__('control.' . $map)}}</label>
                            @endforeach
                        </div>
                    </div>
                @endforeach
                    @error($input)
                    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                    @enderror
            </div>
        </div>
    </div>
</div>

