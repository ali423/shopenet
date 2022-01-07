<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>دریا</title>

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
                                        <a href="{{route('user.login')}}" class="author-area__seller-btn inline">ورود به حساب
                                            کاربری</a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="author-author__info inline has_dropdown">
                                <div class="author__avatar">
                                    <img src="{{asset("images/new/usr_avatar.png")}}" height="30 px" alt="user avatar">

                                </div>
                                <div class="autor__info">
                                    <p class="name">
                                        {{auth()->user()->name}}
                                    </p>
                                    <!--<p class="ammount">2000 تومان</p>-->
                                </div>

                                <div class="dropdowns dropdown--author">
                                    <ul>

                                        <li>
                                            <a href="{{route('dashboard')}}">
                                                <span class="lnr lnr-home"></span>داشبورد</a>
                                        </li>
                                        <li>
                                            <a href="{{route('factor.index')}}">
                                                <span class="lnr lnr-cog"></span> فاکتور ها</a>
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
                                    <a href="index.html">خانه </a>
                                    <div class="dropdowns dropdown--menu">
                                        <ul>
                                            <li>
                                                <a href="index.html">خانه یک چند فروشندگی</a>
                                            </li>
                                            <li>
                                                <a href="index-single.html">خانه دو (تک کاربره)</a>
                                            </li>
                                            <li>
                                                <a href="index3.html">خانه سه (محصولات )</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has_dropdown">
                                    <a href="all-products-list.html">همه محصولات</a>
                                    <div class="dropdowns dropdown--menu">
                                        <ul>
                                            <li>
                                                <a href="all-products.html">محصولات جدید </a>
                                            </li>
                                            <li>
                                                <a href="all-products.html">محصولات محبوب </a>
                                            </li>
                                            <li>
                                                <a href="index3.html">محصولات رایگان </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="has_dropdown">
                                    <a href="#">دسته بندی ها </a>
                                    <div class="dropdowns dropdown--menu">
                                        <ul>
                                            <li>
                                                <a href="category-grid.html">محصولات محبوب </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.html">پنل ادمین </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.html">وبلاگ / مقالات / جدید ترین ها </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.html">خلاق </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.html">شرکتی </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.html">رزومه /نمونه کار </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.html">فروشگاهی </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.html">سرگرمی</a>
                                            </li>
                                            <li>
                                                <a href="category-grid.html">صفحه معرفی </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has_megamenu">
                                    <a href="#">عناصر</a>
                                    <div class="dropdown_megamenu contained">
                                        <div class="megamnu_module">
                                            <div class="menu_items">
                                                <div class="menu_column">
                                                    <ul>
                                                        <li>
                                                            <a href="accordion.html"> آکاردئون</a>
                                                        </li>
                                                        <li>
                                                            <a href="alert.html">هشدار </a>
                                                        </li>
                                                        <li>
                                                            <a href="brands.html">برند ها </a>
                                                        </li>
                                                        <li>
                                                            <a href="buttons.html">دکمه ها</a>
                                                        </li>
                                                        <li>
                                                            <a href="cards.html">کارت ها
                                                                 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="charts.html">آمار (چارت ها )</a>
                                                        </li>
                                                        <li>
                                                            <a href="content-block.html">بلوک محتوا</a>
                                                        </li>
                                                        <li>
                                                            <a href="dropdowns.html"> لیست های کشویی</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li>
                                                            <a href="features.html">ویژگی ها </a>
                                                        </li>
                                                        <li>
                                                            <a href="footer.html">فوتر</a>
                                                        </li>
                                                        <li>
                                                            <a href="info-box.html">جعبه اطلاعات </a>
                                                        </li>
                                                        <li>
                                                            <a href="menu.html">منو</a>
                                                        </li>
                                                        <li>
                                                            <a href="modal.html">مودال</a>
                                                        </li>
                                                        <li>
                                                            <a href="pagination.html">(صفحه بندی)صفحه بندی </a>
                                                        </li>
                                                        <li>
                                                            <a href="peoples.html">افراد </a>
                                                        </li>
                                                        <li>
                                                            <a href="products.html">محصولات</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li>
                                                            <a href="progressbar.html">نوار پیشرفت</a>
                                                        </li>
                                                        <li>
                                                            <a href="social.html">اجتماعی</a>
                                                        </li>
                                                        <li>
                                                            <a href="tab.html">زبانه ها </a>
                                                        </li>
                                                        <li>
                                                            <a href="table.html">جدول </a>
                                                        </li>
                                                        <li>
                                                            <a href="testimonials.html">مشتریان </a>
                                                        </li>
                                                        <li>
                                                            <a href="timeline.html">گاهشمار</a>
                                                        </li>
                                                        <li>
                                                            <a href="typography.html">تایپوگرافی</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="has_megamenu">
                                    <a href="#">صفحه ها </a>
                                    <div class="dropdown_megamenu">
                                        <div class="megamnu_module">
                                            <div class="menu_items">
                                                <div class="menu_column">
                                                    <ul>
                                                        <li class="title">محصولات</li>
                                                        <li>
                                                            <a href="all-products.html">شبکه محصولات</a>
                                                        </li>
                                                        <li>
                                                            <a href="all-products-list.html">لیست محصولات</a>
                                                        </li>
                                                        <li>
                                                            <a href="category-grid.html">شبکه دسته بندی ها</a>
                                                        </li>
                                                        <li>
                                                            <a href="category-list.html">شبکه دسته بندی ها </a>
                                                        </li>
                                                        <li>
                                                            <a href="search-product.html">جستجوی محصولات</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product.html">یک محصول v1</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product-v2.html">تنها محصول V2</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product-v3.html">تنها محصول V3</a>
                                                        </li>
                                                        <li>
                                                            <a href="cart.html">سبد خرید </a>
                                                        </li>
                                                        <li>
                                                            <a href="checkout.html">بازبینی سفارش</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li class="title">دیگر</li>
                                                        <li>
                                                            <a href="author.html">پروفایل </a>
                                                        </li>
                                                        <li>
                                                            <a href="author-items.html">دیگر آیتم ها </a>
                                                        </li>
                                                        <li>
                                                            <a href="author-reviews.html">نظرات مشتریان </a>
                                                        </li>
                                                        <li>
                                                            <a href="author-followers.html">دنبال کنندگان</a>
                                                        </li>
                                                        <li>
                                                            <a href="author-following.html">دنبال کردن </a>
                                                        </li>
                                                        <li>
                                                            <a href="notification.html">پیغام ها </a>
                                                        </li>
                                                        <li>
                                                            <a href="message.html">صندوق پیام</a>
                                                        </li>
                                                        <li>
                                                            <a href="message-compose.html">نوشتن پیام</a>
                                                        </li>
                                                        <li>
                                                            <a href="favourites.html">موارد مورد علاقه</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li class="title">داشبورد</li>
                                                        <li>
                                                            <a href="dashboard.html">داشبورد</a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-setting.html">تنظیمات حساب</a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-purchase.html">دیگر خریدها </a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-add-credit.html">اضافه کردن اعتبار</a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-statement.html">بیانیه ها</a>
                                                        </li>
                                                        <li>
                                                            <a href="invoice.html">صورتحساب</a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-upload.html"> آپلود فایل
                                                                 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-manage-item.html">ویرایش آیتم</a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-withdrawal.html">خروج</a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-manage-item.html">مدیریت آیتم</a>
                                                        </li>
                                                        <li>
                                                            <a href="add-payment-method.html">افزودن روش پرداخت</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li class="title">مشتریان</li>
                                                        <li>
                                                            <a href="support-forum.html">انجمن پشتیبانی</a>
                                                        </li>
                                                        <li>
                                                            <a href="support-forum-detail.html">جزئیات انجمن</a>
                                                        </li>
                                                        <li>
                                                            <a href="login.html">ورود </a>
                                                        </li>
                                                        <li>
                                                            <a href="signup.html">ثبت نام </a>
                                                        </li>
                                                        <li>
                                                            <a href="recover-pass.html">بازیابی رمز عبور</a>
                                                        </li>
                                                        <li>
                                                            <a href="customer-dashboard.html">داشبورد مشتری</a>
                                                        </li>
                                                        <li>
                                                            <a href="customer-downloads.html">دانلود مشتریان</a>
                                                        </li>
                                                        <li>
                                                            <a href="customer-info.html">اطلاعات مشتری</a>
                                                        </li>
                                                    </ul>

                                                    <ul>
                                                        <li class="title">وبلاگ</li>
                                                        <li>
                                                            <a href="blog1.html">وبلاگ V-1</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog2.html">وبلاگ V-2</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-blog.html">صفحه پست</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="menu_column">
                                                    <ul>
                                                        <li class="title">دیگر</li>
                                                        <li>
                                                            <a href="how-it-works.html">چگونه کار می کند</a>
                                                        </li>
                                                        <li>
                                                            <a href="about.html">درباره ما</a>
                                                        </li>
                                                        <li>
                                                            <a href="pricing.html">طرح قیمت گذاری</a>
                                                        </li>
                                                        <li>
                                                            <a href="testimonial.html">مشتریان</a>
                                                        </li>
                                                        <li>
                                                            <a href="faq.html">سوالات متداول</a>
                                                        </li>
                                                        <li>
                                                            <a href="affiliate.html">وابسته</a>
                                                        </li>
                                                        <li>
                                                            <a href="term-condition.html">شرایط</a>
                                                        </li>
                                                        <li>
                                                            <a href="event.html">رویداد</a>
                                                        </li>
                                                        <li>
                                                            <a href="event-detail.html">جزئیات رویداد</a>
                                                        </li>
                                                        <li class="has_badge">
                                                            <a href="badges.html">افتخارات </a>
                                                            <span class="badge">جدید</span>
                                                        </li>
                                                        <li>
                                                            <a href="404.html">ارور 404</a>
                                                        </li>
                                                        <li>
                                                            <a href="carieer.html">پست های کاری</a>
                                                        </li>
                                                        <li>
                                                            <a href="job-detail.html">جزئیات کار </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="contact.html">تماس با ما</a>
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
