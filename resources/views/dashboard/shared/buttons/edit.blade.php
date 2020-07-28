@if(auth()->user()->hasPermission($routeName.'_update'))
    <a href="{{route($routeName.'.edit', $row->id)}}">
        <button type="button" class="btn btn-info btn-sm"><i class="fa fa-edit" style="margin: 0 6px;"></i>{{__('control.edit')}}</button>
    </a>
@else
    <button type="button" class="btn btn-info btn-sm disabled"><i class="fa fa-edit" style="margin: 0 6px;"></i>{{__('control.edit')}}</button>
@endif
