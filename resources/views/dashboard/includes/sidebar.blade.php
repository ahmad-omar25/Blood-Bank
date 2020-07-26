<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-book"></i> <span>{{__('control.dashboard')}}</span></a></li>
        @if(auth()->user()->hasPermission('users_read'))
                <li><a href="{{route('users.index')}}"><i class="fa fa-book"></i> <span>{{__('dashboard.users')}}</span></a></li>
            @endif
            <li><a href="{{route('governorates.index')}}"><i class="fa fa-book"></i> <span>{{__('dashboard.governorates')}}</span></a></li>
        </ul>
    </section>
</aside>
