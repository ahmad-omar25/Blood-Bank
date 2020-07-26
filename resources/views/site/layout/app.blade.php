
<!DOCTYPE html>
<html lang="en">

@include('site.includes.head')

<body>
<!--Loading Page-->
<div class="loading-page">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!--header section-->
@include('site.includes.header')
<!--End Header-->
    @yield('content')
<!--Footer-->
@include('site.includes.footer')
<!--End Footer-->
<!--scrollUp-->
<div class="scrollUp">
    <i class="fas fa-chevron-up"></i>
</div>
@include('site.includes.scripts')
</body>

</html>
