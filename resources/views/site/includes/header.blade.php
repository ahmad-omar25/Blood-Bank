<section class="header">
    <!--top-bar-->

        <div class="top-bar py-2">
            <div class="container">
                <!--row of top-bar-->

                <div class="d-flex justify-content-between">
                    <div>
                        <a href="index.html" class="ar px-1">عربى</a>
                        <a href="" class="en px-1">EN</a>
                    </div>
                    <div>
                        <ul class="list-unstyled">
                            <li class="d-inline-block mx-2"><a class="facebook" href=""><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li class="d-inline-block mx-2"><a class="insta" href=""><i
                                        class="fab fa-instagram"></i></a></li>
                            <li class="d-inline-block mx-2"><a class="twitter" href=""><i
                                        class="fab fa-twitter"></i></a></li>
                            <li class="d-inline-block mx-2"><a class="whatsapp" href=""><i
                                        class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                    <div class="connect">
                        @if(auth()->guard('clients')->check())
                        <div class="dropdown">
                            <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <span> مرحبا بك </span> &nbsp; {{auth()->guard('clients')->user()->name}}
                            </a>
                            <div class="dropdown-menu text-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="index.html"> <i class="fas fa-home ml-2"></i>الرئيسيه</a>
                                <a class="dropdown-item" href="#"> <i class="fas fa-user-alt ml-2"></i>معلوماتى</a>
                                <a class="dropdown-item" href="#"> <i class="fas fa-bell ml-2"></i>اعدادات الاشعارات</a>
                                <a class="dropdown-item" href="#"> <i class="far fa-heart ml-2"></i>المفضلة</a>
                                <a class="dropdown-item" href="#"> <i class="far fa-comments ml-2"></i>ابلاغ</a>
                                <a class="dropdown-item" href="contact.html"> <i class="fas fa-phone ml-2"></i>تواصلمعنا</a>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="dropdown-item"> <i class="fas fa-sign-out-alt ml-2"></i>تسجيل خروج</button>
                                </form>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>


                <!--End row-->
            </div>
            <!--End container-->
        </div>
<!--End top-bar-->
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{asset('site/imgs/logo.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('site.home')}}">الرئيسيه <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">عن بنك الدم</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="article-details.html">المقالات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="donation.html">طلبات التبرع</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.html">من نحن</a>
                    </li>
                    <li class="nav-item cont">
                        <a class="nav-link" href="contact.html">اتصل بنا</a>
                    </li>
                    @if(!auth()->guard('clients')->check())
                    <li class="mr-lg-auto"><a class="btn bg" href="{{route('site.register')}}">انشاء حساب جديد</a></li>
                    <li class="pr-3"><a class="btn bg" href="{{route('site.login')}}">الدخول</a></li>
                    @endif
                </ul>
            </div>
        </div>
        <!--End container-->
    </nav>
    <!--End Nav-->
</section>

