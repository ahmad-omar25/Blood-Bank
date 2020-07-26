<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
@include('dashboard.includes.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('dashboard.includes.header')
    @include('dashboard.includes.sidebar')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                @yield('content')
            </div>
        </section>
    </div>
    @include('dashboard.includes.footer')
</div>
@include('dashboard.includes.scripts')
</body>
</html>
