<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="با استفاده از شاپی نت در کمترین زمان و بدون نیاز به دانش فنی ، فروشگاه اینترنتی خودتون رو طراحی و راه اندازی کنید|شاپی نت یک فروشگاه ساز آنلاینه که تمامی امکاناتی که شما برای ورود به دنیایی فروش دیجیتال و موفقیت در اون رو نیاز دارید براتون فراهم می‌کنه.">
    <meta name="keywords" content="شاپی نت،شاپی،نت،اینستاگرام،فروشگاه،نماد,اعتماد،تضمین،امنیت،فروشگاه اینستاگرامی،فروشگاه ساز،ساخت فروشگاه،درگاه،درگاه بانکی اینستاگرام, فروشگاه ساز, فروشگاه اینترنتی">
    <meta http-equiv="Content-Language" content="fa">
    <title>شاپی نت|فروشگاه ساز</title>
    <link href="{{asset('/images/logo/blacklogo.png')}}" rel="icon">

    @include('layouts.styles')

</head>

<body class="preload home2 single-vendor">

<!-- ================================
START MENU AREA
================================= -->
<!-- start menu-area -->
<div class="menu-area dir-rtl">
    <!-- start .mainmenu_area -->
    <div class="mainmenu">
        <!-- start .container -->
        <div class="container">
            <!-- start .row-->
            <div class="row">
                <!-- start .col-md-12 -->
                <div class="col-md-12">
                    <div class="navbar-header">
                        <!-- start mainmenu__search -->
                        @if(!auth()->check())
                            <div class="mainmenu__search">
                                <div class="searc-wrap">
                                    <div class="text-center">
                                        <a href="{{route('user.login')}}" class="author-area__seller-btn inline">حساب کاربری</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mainmenu__search">
                                <div class="searc-wrap">
                                    <div class="text-center">
                                        <a href="/templates/list" class="author-area__seller-btn inline">ساخت فروشگاه</a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="author-author__info inline has_dropdown">
                                <div class="author__avatar loginbtn">
                                    <img src="{{asset("images/new/usr_avatar.png")}}" height="30 px" alt="user avatar">
                                    <div class="autor__info">
                                        <p class="name">
                                            {{auth()->user()->name}}
                                        </p>
                                        <!--<p class="ammount">2000 تومان</p>-->
                                    </div>
                                </div>
                                
                                <div class="dropdowns dropdown--author">
                                    <ul>
                                        <li>
                                            <a href="{{route('dashboard')}}">
                                                <span class="lnr lnr-home"></span>داشبورد</a>
                                        </li>
                                        <li>
                                            <a href="{{route('factor.index')}}">
                                                <span class="lnr lnr-list"></span>فاکتور ها</a>
                                        </li>
                                        <li>
                                            <a href="{{url('profile')}}">
                                                <span class="lnr lnr-user"></span>پروفایل </a>
                                        </li>
                                        <li>
                                            <a href="{{route('user.logout') }}">
                                                <span class="lnr lnr-exit"></span>خروج </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    @endif

                    <!-- start mainmenu__search -->
                    </div>

                    <nav class="navbar navbar-expand-md navbar-light mainmenu__menu">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="has_dropdown">
                                    <a href="{{route('home')}}"><img src="{{asset('images/logo/combine.png')}}" height="45 px" alt="footer logo"></a>
                                </li>
                                <li class="has_dropdown">
                                    <a href="{{route('home')}}">خانه </a>
                                </li>
                                <li class="has_dropdown">
                                    <a href="/templates/list">قالب ها</a>
                                </li>
                                <li class="has_dropdown">
                                    <a href="{{route('plan.index')}}">قیمت گذاری</a>
                                </li>
                                <li class="has_dropdown">
                                    <a href="{{route('template.custom')}}">درخواست قالب جدید</a>
                                </li>
                                <li>
                                    <a href="{{route('contactus')}}">تماس با ما</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row-->
        </div>
        <!-- start .container -->
    </div>
    <!-- end /.mainmenu-->
</div>
<!-- end /.menu-area -->
<!--================================
END MENU AREA
=================================-->
