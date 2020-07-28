<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="{{is_active('dashboard')}}"><a href="{{route('admin.dashboard')}}"><i class="fa fa-book"></i> <span>{{__('control.dashboard')}}</span></a></li>
              @if(auth()->user()->hasPermission('users_read'))
                <li><a href="{{route('users.index')}}"><i class="fa fa-book"></i> <span>{{__('dashboard.users')}}</span></a></li>
            @endif
            @if(auth()->user()->hasPermission('governorates_read'))
            <li><a href="{{route('governorates.index')}}"><i class="fa fa-book"></i> <span>{{__('dashboard.governorates')}}</span></a></li>
            @endif
            @if(auth()->user()->hasPermission('cities_read'))
                <li><a href="{{route('cities.index')}}"><i class="fa fa-book"></i> <span>{{__('dashboard.cities')}}</span></a></li>
            @endif
            @if(auth()->user()->hasPermission('bloodtypes_read'))
                <li><a href="{{route('bloodtypes.index')}}"><i class="fa fa-book"></i> <span>{{__('dashboard.bloodType')}}</span></a></li>
            @endif
            @if(auth()->user()->hasPermission('categories_read'))
            <li><a href="{{route('categories.index')}}"><i class="fa fa-book"></i> <span>{{__('dashboard.categories')}}</span></a></li>
            @endif
            @if(auth()->user()->hasPermission('settings_read'))
                <li><a href="{{route('settings.index')}}"><i class="fa fa-book"></i> <span>{{__('dashboard.settings')}}</span></a></li>
            @endif
        </ul>
    </section>
</aside>
