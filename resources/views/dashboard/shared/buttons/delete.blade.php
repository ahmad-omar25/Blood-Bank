@if(auth()->user()->hasPermission($routeName.'_delete'))
    <form action="{{route($routeName.'.destroy', $row->id)}}" style="display: inline-block" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm"><i class="fa fa-trash" style="margin: 0 6px;"></i>{{__('control.delete')}}</button>
    </form>
@else
    <button class="btn btn-danger btn-sm disabled"><i class="fa fa-trash" style="margin: 0 6px;"></i>{{__('control.delete')}}</button>
@endif
