<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="با استفاده از شاپی نت در کمترین زمان و بدون نیاز به دانش فنی ، فروشگاه اینترنتی خودتون رو طراحی و راه اندازی کنید|شاپی نت یک فروشگاه ساز آنلاینه که تمامی امکاناتی که شما برای ورود به دنیایی فروش دیجیتال و موفقیت در اون رو نیاز دارید براتون فراهم می‌کنه.">
    <meta name="keywords" content="شاپی نت،شاپی،نت،اینستاگرام،فروشگاه،نماد,اعتماد،تضمین،امنیت،فروشگاه اینستاگرامی،فروشگاه ساز،ساخت فروشگاه،درگاه،درگاه بانکی اینستاگرام, فروشگاه ساز, فروشگاه اینترنتی">
    <meta http-equiv="Content-Language" content="fa">
    <title>شاپی نت|پنل ادمین</title>
    <link href="{{asset('/images/logo/blacklogo.png')}}" rel="icon">
    <!-- App favicon -->
@include('admin.layouts.styles')

</head>

<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <li class="d-none d-sm-block">
                <form class="app-search">
                    <div class="app-search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="جست و جو...">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-bell noti-icon"></i>
                    <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="" class="text-dark">
                                            <small>پاک کردن همه</small>
                                        </a>
                                    </span>اطلاعیه ها
                        </h5>
                    </div>

                    <div class="slimscroll noti-scroll">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                            <div class="notify-icon">
                                <img src="/assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="تصویر" /> </div>
                            <p class="notify-details">علی کردی</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>سلام چطوری؟ در مورد جلسه بعدی...</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-primary">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">پیام خصوصی از طرف رضا
                                <small class="text-muted">1 دقیقه پیش</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon">
                                <img src="/assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="تصویر" /> </div>
                            <p class="notify-details">سجاد صابری</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>ادمین تو واقعا عالیه</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-warning">
                                <i class="mdi mdi-account-plus"></i>
                            </div>
                            <p class="notify-details">ثبت نام کاربر تازه
                                <small class="text-muted">5 ساعت پیش</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">پیام خصوصی از طرف رضا
                                <small class="text-muted">4 روز پیش</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-secondary">
                                <i class="mdi mdi-heart"></i>
                            </div>
                            <p class="notify-details">لایک از طرف
                                <b>مدیر</b>
                                <small class="text-muted">13 روز پیش</small>
                            </p>
                        </a>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                        مشاهده همه
                        <i class="fi-arrow-right"></i>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="/assets/images/users/user-1.jpg" alt="تصویر کاربر" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                                قائم <i class="mdi mdi-chevron-down"></i>
                            </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">خوش اومدی!</h6>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>حساب کاربری</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>تنظیمات</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock"></i>
                        <span>قفل کردن صفحه</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="{{route('admin.logout')}}" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>خروج</span>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                    <i class="fe-settings noti-icon"></i>
                </a>
            </li>


        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="/assets/images/logo-dark.png" alt="تصویر" height="16">
                            <!-- <span class="logo-lg-text-light">Xeria</span> -->
                        </span>
                <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <img src="/assets/images/logo-sm.png" alt="تصویر" height="24">
                        </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile disable-btn waves-effect">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <h4 class="page-title-main">پیشخوان</h4>
            </li>

        </ul>
    </div>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="slimscroll-menu">

            <!-- User box -->
            <div class="user-box text-center">
                <img src="/assets/images/users/user-1.jpg" alt="تصویر کاربر" title="قائم امیدی" class="rounded-circle img-thumbnail avatar-lg">
                <div class="dropdown">
                    <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">قائم امیدی</a>
                    <div class="dropdown-menu user-pro-dropdown">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user mr-1"></i>
                            <span>حساب کاربری</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings mr-1"></i>
                            <span>تنظیمات</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock mr-1"></i>
                            <span>قفل کردن صفحه</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-log-out mr-1"></i>
                            <span>خروج</span>
                        </a>

                    </div>
                </div>
                <p class="text-muted">مدیر</p>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="text-muted">
                            <i class="mdi mdi-settings"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="#" class="text-custom">
                            <i class="mdi mdi-power"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <li class="menu-title">ناوبری</li>

                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="mdi mdi-view-dashboard"></i>
                            <span> پیشخوان </span>
                        </a>
                    </li>


                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-pac-man"></i>
                            <span> قالب ها </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('admin.template.index') }}">لیست قالب ها</a></li>
                            <li><a href="{{ route('admin.template.index') }}?q=add">افزودن قالب جدید</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-pac-man"></i>
                            <span> سفارشات </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('admin.service.index') }}">لیست سفارشات</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-pac-man"></i>
                            <span> دسته بندی ها </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('admin.template-category.index') }}">لیست دسته بندی ها</a></li>
                            <li><a href="{{ route('admin.template-category.index') }}?q=add">افزودندسته بندی جدید</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-pac-man"></i>
                            <span> کد تخفیف </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('admin.discount.index') }}">لیست کد ها</a></li>
                            <li><a href="{{ route('admin.discount.index') }}?q=add">افزودن کد جدید</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-pac-man"></i>
                            <span> پلن ها </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('admin.plan.index') }}">لیست پلن ها</a></li>
                            <li><a href="{{ route('admin.plan.index') }}?q=add">افزودن پلن جدید</a></li>
                        </ul>
                    </li>

                    </li>
                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->
