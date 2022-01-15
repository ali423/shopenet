@extends("layouts.main")

@section('content')
    <!-- Main Content Area -->


    <!--================================
START HERO AREA
=================================-->
    <section class="hero-area bgimage dir-rtl">
        <div class="bg_image_holder">
            <img src="images/new/hero_area_bg.png" alt="background-image">
        </div>
        <!-- start hero-content -->
        <div class="hero-content content_above">
            <!-- start .contact_wrapper -->
            <div class="content-wrapper">
                <!-- start .container -->
                <div class="container-fluid">
                    <!-- start row -->
                    <div id="header-row" class="row" style="margin: auto">
                        <div class="col-lg-6">
                            <div class="hero__content__title">
                                <h1>
                                    <span class="light typed-out">خودت بساز </span>
                                    <br>
                                    <span class="bold">بازار محصولات دیجیتال</span>
                                </h1>
                                <p class="tagline"> یک قالب قدرتمند و قابل تنظیم برای محصولات خود </p>
                            </div>

                            <!-- start .hero__btn-area-->
                            <div class="hero__btn-area">
                                <a href="all-products.html" class="btn btn--round btn--lg">مشاهده تمام محصولات</a>
                                <a href="all-products.html" class="btn btn--round btn--lg">محصولات محبوب</a>
                            </div>
                            <!-- end .hero__btn-area-->
                        </div>
                        <div class="col-lg-6">
                            <img src="images/svg/header.svg" class="header-mockup" style="z-index: 1000;position: relative;">
                        </div>
                    </div>
                    <!-- end /.row -->
                </div>
                <svg id="header-wave" style="position: absolute; bottom:0; right:0; transform:translateY(1px)" viewBox="0 0 1440 270" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop><stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,0L1440,216L2880,0L4320,189L5760,27L7200,135L8640,108L10080,54L11520,189L12960,216L14400,54L15840,162L17280,54L18720,54L20160,216L21600,216L23040,27L24480,54L25920,135L27360,0L28800,135L30240,243L31680,243L33120,108L34560,81L34560,270L33120,270L31680,270L30240,270L28800,270L27360,270L25920,270L24480,270L23040,270L21600,270L20160,270L18720,270L17280,270L15840,270L14400,270L12960,270L11520,270L10080,270L8640,270L7200,270L5760,270L4320,270L2880,270L1440,270L0,270Z"></path></svg>
                <!-- end /.container -->
            </div>
            <!-- end .contact_wrapper -->
        </div>
        <!-- end hero-content -->
    </section>
    <!--================================
    END HERO AREA
    =================================-->
    <!--================================
          START OVERVIEW AREA
      =================================-->
    <section class="overview-area section--padding dir-rtl">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>ساخت و آماده سازی وب سایت فروشگاهی شما
                            <span class="highlighted">تنها در سه مرحله</span>
                        </h1>
                        <p>شاپی نت سریع ترین ، بصرفه ترین ، پر بازده ترین و مطمعن ترین روش ساخت وب سایت شماست  </p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row">

                <div class="col-lg-4 offset-lg-1 col-md-6 v_middle overview_cont">
                    <div class="overview-icon">
                        <img src="images/new/fac1.png" alt="overview icon">
                    </div>
                </div>
                <!-- end /.col-md-4 -->

                <div class="col-lg-5 offset-lg-1 col-md-6 v_middle overview_cont">
                    <div class="step_num">01</div>
                    <h2 class="overview-title">انتخاب قالب</h2>
                    <p>پس از بررسی قالب های شاپی نت و مشاهده پیش نمایش آنها یک قالب متناسب با زمینه فعالیت خود انتخاب کنید.</p>
                </div>
                <!-- end /.col-md-5 -->

                <div class="col-lg-5 offset-lg-1 col-md-6 v_middle overview_cont">
                    <div class="step_num">02</div>
                    <h2 class="overview-title">انتخاب طرح
                         
                    </h2>
                    <p>پس از بررسی مشخصات و امکانات طرح های موجود ، طرح متناسب با نیاز خود را انتخاب کنید.</p>
                </div>
                <!-- end /.col-md-5 -->

                <div class="col-lg-4 offset-lg-1 col-md-6 v_middle overview_cont">
                    <div class="overview-icon">
                        <img src="images/new/fac2.png" alt="overview icon">
                    </div>
                </div>
                <!-- end /.col-md-4 -->

                <div class="col-lg-4 offset-lg-1 col-md-6 v_middle overview_cont">
                    <div class="overview-icon">
                        <img src="images/new/fac3.png" alt="overview icon">
                    </div>
                </div>
                <!-- end /.col-md-4 -->

                <div class="col-lg-5 offset-lg-1 col-md-6 v_middle overview_cont">
                    <div class="step_num">03</div>
                    <h2 class="overview-title">نهایی سازی سفارش
                         
                    </h2>
                    <p>پس از تکمیل سفارش ، وب سایت فروشگاه شما وارد مرحله آماده سازی میشود، و در سریعترین زمان آماده راه اندازی خواهد بود.</p>
                </div>
                <!-- end /.col-md-5 -->

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END OVERVIEW AREA
    =================================-->


    <!--================================
        START PRODUCTS AREA
    =================================-->
    <section class="products section--padding dir-rtl">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area">
                        <div class=" text-center">
                            <a href="#">
                                <h2>برای شروع یک قالب انتخاب کنید</h2>
                            </a>
                        </div>

                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row ">
                <!-- start .col-md-4 -->
                @foreach($templates as $template)
                    @include('layouts.product')
                @endforeach
            </div>
            <!-- end /.row -->

            <!-- start .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="more-product">
                        <a href="/templates/list" class="btn btn--lg btn--round">همه قالب ها</a>
                    </div>
                </div>
                <!-- end ./col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PRODUCTS AREA
    =================================-->

    <!--================================
        START CALL TO ACTION AREA
        =================================-->
    <section class="call-to-action bgimage dir-rtl">
        <div class="bg_image_holder">
            <img src="images/new/calltobg.jpg" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-wrap">
                        <h1 class="text--white">قالب اختصاصی خود را ایجاد کنید</h1>
                        <h4 class="text--white">اگر از میان قالب های موجود ، قالب مناسب کسب و کار خود را پیدا نکردید ،
                            نگران نباشید .
                            ما قالب اختصاصی برای استفاده شما ایجلد میکنیم </h4>
                        <a href="#" class="btn btn--lg btn--round btn--white callto-action-btn">سفارش قالب اختصاصی</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
    END CALL TO ACTION AREA
    =================================-->
    <!--================================
    START tools AREA
    =================================-->
    <section class="features section--padding dir-rtl tools">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-instagram text-danger shadow p-3"></i>
                    <p class="mt-3">لورم ایپسوم</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-instagram text-danger shadow p-3"></i>
                    <p class="mt-3">لورم ایپسوم</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-instagram text-danger shadow p-3"></i>
                    <p class="mt-3">لورم ایپسوم</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-instagram text-danger shadow p-3"></i>
                    <p class="mt-3">لورم ایپسوم</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-instagram text-danger shadow p-3"></i>
                    <p class="mt-3">لورم ایپسوم</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-instagram text-danger shadow p-3"></i>
                    <p class="mt-3">لورم ایپسوم</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-instagram text-danger shadow p-3"></i>
                    <p class="mt-3">لورم ایپسوم</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-instagram text-danger shadow p-3"></i>
                    <p class="mt-3">لورم ایپسوم</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-instagram text-danger shadow p-3"></i>
                    <p class="mt-3">لورم ایپسوم</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-instagram text-danger shadow p-3"></i>
                    <p class="mt-3">لورم ایپسوم</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-instagram text-danger shadow p-3"></i>
                    <p class="mt-3">لورم ایپسوم</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-instagram text-danger shadow p-3"></i>
                    <p class="mt-3">لورم ایپسوم</p>
                </div>
            </div>
        </div>
    </section>
    <!--================================
    End tools AREA
    =================================-->
    <!--================================
     START FEATURE AREA
     =================================-->
    <section class="features section--padding dir-rtl">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img src="images/new/feature1.png" alt="feature">
                        </div>
                        <div class="feature__title">
                            <h3>جستجوی آسان در گوگل</h3>
                        </div>
                        <div class="feature__desc">
                            <p>بهینه شده برای تمام موتور های جستجو .</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->

                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img src="images/new/feature2.png" alt="feature">
                        </div>
                        <div class="feature__title">
                            <h3>کاملا ریسپانسیو</h3>
                        </div>
                        <div class="feature__desc">
                            <p>مناسب سازی شده برای تمام دستگاه ها <br>(موبایل ، تبلت ، لپ تاپ ) </p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->

                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img src="images/new/feature3.png" alt="feature">
                        </div>
                        <div class="feature__title">
                            <h3>درگاه پرداخت </h3>
                        </div>
                        <div class="feature__desc">
                            <p>متصل به درگاه های معتبر بانکی جهت پرداخت امن و اعتماد سازی برای خریدار.</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END FEATURE AREA
    =================================-->

    <!--================================
        END OVERVIEW AREA
    =================================-->
    <section class="partner-area section--padding bgimage">
        <div class="bg_image_holder">
            <img src="images/new/ptbg.png" alt="">
        </div>
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12  dir-rtl ">
                    <div class="section-title">
                        <h1> وب سایت هایی که از
                            <span class="highlighted">ما</span> استفاده می کنند
                        </h1>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است. </p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="partners">
                        <div class="partner">
                            <img src="images/new/cl1.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/new/cl2.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/new/cl3.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/new/cl4.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/new/cl2.png" alt="partner image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END OVERVIEW AREA
    =================================-->

    <!--================================
        START WHY CHOOSE US AREA
    =================================-->
    <section class="why_choose section--padding dir-rtl">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>چرا
                            <span class="highlighted">شاپی نت</span>
                            را انتخاب میکنید
                        </h1>
                        <p>شاپی نت تمام ویژگی های یک فروشگاه اینترنتی فوق العاده را در اختیار شما قرار میدهد. </p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start row -->
            <div class="row">
                <!-- start .col-md-4 -->
                <div class="col-lg-3 col-md-6">
                    <!-- start .reason -->
                    <div class="feature2">
                        <span class="feature2__count">01</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-license pcolor"></span>
                            <h3 class="feature2-title">پشتیبانی</h3>
                            <p></p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-3 col-md-6">
                    <!-- start .reason -->
                    <div class="feature2">
                        <span class="feature2__count">01</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-license pcolor"></span>
                            <h3 class="feature2-title">هاست رایگان</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. </p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->


                <!-- start .col-md-4 -->
                <div class="col-lg-3 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">02</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-magic-wand scolor"></span>
                            <h3 class="feature2-title">دامنه ملی ir</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. </p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-3 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">03</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-lock mcolor1"></span>
                            <h3 class="feature2-title">100% پرداخت امن </h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. </p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-3 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">04</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-chart-bars mcolor2"></span>
                            <h3 class="feature2-title">کد های بهینه </h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-3 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">05</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-leaf mcolor3"></span>
                            <h3 class="feature2-title">رایگان آپدیت کنید </h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. </p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-3 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">06</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-phone mcolor4"></span>
                            <h3 class="feature2-title">پشتیبانی سریع </h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->
                <!-- start .col-md-4 -->
                <div class="col-lg-3 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">06</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-phone mcolor4"></span>
                            <h3 class="feature2-title">پشتیبانی سریع </h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END WHY CHOOSE US AREA
    =================================-->

    <!--================================
        START SELL BUY
    =================================-->
    <section class="proposal-area dir-rtl">

        <!-- start container-fluid -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 no-padding">
                    <div class="proposal proposal--left bgimage">
                        <div class="bg_image_holder">
                            <img src="images/new/bbg.png" alt="prop image">
                        </div>
                        <div class="content_above">
                            <div class="proposal__icon ">
                                <img src="images/new/buy.png" alt="Buy icon">
                            </div>
                            <div class="proposal__content ">
                                <h1 class="text--white">فروش محصولات شما</h1>
                                <p class="text--white">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                    استفاده از طراحان گرافیک است. </p>
                            </div>
                            <a href="#" class="btn--round btn btn--lg btn--white">تبدیل شدن به فروشنده </a>
                        </div>
                    </div>
                    <!-- end /.proposal -->
                </div>

                <div class="col-md-6 no-padding">
                    <div class="proposal proposal--right">
                        <div class="bg_image_holder">
                            <img src="images/new/sbg.png" alt="this is magic">
                        </div>
                        <div class="content_above">
                            <div class="proposal__icon">
                                <img src="images/new/sell.png" alt="Sell icon">
                            </div>
                            <div class="proposal__content ">
                                <h1 class="text--white">شروع به خرید امروز</h1>
                                <p class="text--white">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                    استفاده از طراحان گرافیک است. </p>
                            </div>
                            <a href="#" class="btn--round btn btn--lg btn--white">شروع خرید </a>
                        </div>
                    </div>
                    <!-- end /.proposal -->
                </div>
            </div>
        </div>
        <!-- start container-fluid -->
    </section>
    <!--================================
        END SELL BUY
    =================================-->

    <!--================================
        START TESTIMONIAL
    =================================-->
    <section class="testimonial-area section--padding ">
        <!-- start .container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>
                            <span class="highlighted">نظرات</span>
                            مشتریان
                        </h1>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است. </p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start row -->
            <div class="row">
                <!-- start .col-md-12 -->
                <div class="col-md-12">
                    <div class="testimonial-slider">
                        <div class="testimonial">
                            <div class="testimonial__about">
                                <div class="avatar v_middle">
                                    <img src="images/new/test1.jpg" alt="Testimonial Avatar">
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name">کاربر تست </h4>
                                    <span class="desig">طراح محصویل </span>
                                </div>
                                <span class="lnr lnr-bubble quote-icon"></span>
                            </div>
                            <div class="testimonial__text">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                    فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                    باشد. </p>
                            </div>
                        </div>
                        <!-- end /.testimonial -->

                        <div class="testimonial">
                            <div class="testimonial__about">
                                <div class="avatar v_middle">
                                    <img src="images/new/test2.jpg" alt="Testimonial Avatar">
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name">کاربر تست </h4>
                                    <span class="desig">طراح محصویل </span>
                                </div>
                                <span class="lnr lnr-bubble quote-icon"></span>
                            </div>
                            <div class="testimonial__text">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                    فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                    باشد. </p>
                            </div>
                        </div>
                        <!-- end /.testimonial -->
                        <div class="testimonial">
                            <div class="testimonial__about">
                                <div class="avatar v_middle">
                                    <img src="images/new/test1.jpg" alt="Testimonial Avatar">
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name">کاربر تست </h4>
                                    <span class="desig">طراح محصویل </span>
                                </div>
                                <span class="lnr lnr-bubble quote-icon"></span>
                            </div>
                            <div class="testimonial__text">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                    فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                    باشد. </p>
                            </div>
                        </div>
                        <!-- end /.testimonial -->

                        <div class="testimonial">
                            <div class="testimonial__about">
                                <div class="avatar v_middle">
                                    <img src="images/new/test2.jpg" alt="Testimonial Avatar">
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name">کاربر تست </h4>
                                    <span class="desig">طراح محصویل </span>
                                </div>
                                <span class="lnr lnr-bubble quote-icon"></span>
                            </div>
                            <div class="testimonial__text">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                    فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                    باشد. </p>
                            </div>
                        </div>
                        <!-- end /.testimonial -->


                    </div>
                    <!-- end /.testimonial_slider -->

                    <div class="all-testimonial">
                        <a href="testimonial.html" class="btn btn--lg btn--round">مشاهده تمام نظرات</a>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end container -->
    </section>
    <!--================================
        END TESTIMONIAL
    =================================-->

    <!--================================
    START SPECIAL FEATURES AREA
    =================================-->
    <section class="special-feature-area dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="special-feature feature--1">
                        <img src="images/new/spf1.png" alt="Special Feature image">
                        <h3 class="special__feature-title">30 روز
                            <span class="highlight">گارانتی</span>
                            برگشت پول
                        </h3>
                    </div>
                </div>
                <!-- end /.col-md-6 -->
                <div class="col-md-6">
                    <div class="special-feature feature--2">
                        <img src="images/new/spf2.png" alt="Special Feature image">
                        <h3 class="special__feature-title">
                            <span class="highlight">پشتیبانی</span>
                            سریع
                        </h3>
                    </div>
                </div>
                <!-- end /.col-md-6 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END SPECIAL FEATURES AREA
    =================================-->



@endsection

