@extends("layouts.main")

@section('content')
    <!-- Main Content Area -->


    <!--================================
START HERO AREA
=================================-->
    <section class="hero-area bgimage dir-rtl">
        <div class="bg_image_holder">
            <img class="owl-lazy"  src="{{ asset('images/new/hero_area_bg.png') }}" alt="background-image">
        </div>
        <!-- start hero-content -->
        <div class="hero-content content_above">
            <!-- start .contact_wrapper -->
            <div class="content-wrapper">
                <!-- start .container -->
                <div class="container-fluid">
                    <!-- start row -->
                    <div id="header-row" class="row">
                        <div class="col-lg-6">
                            <div class="hero__content__title">
                                <h6 class="h1">
                                    <img class="owl-lazy"  src="{{ asset('images/logo/blacklogo.png') }}" height="50 px" alt="footer logo"><span>شاپی نت</span>
                                    <div><span class="typed-out"><span></span></span></div>
                                    <span>روش ساخت فروشگاه اینترنتی</span>
                                </h6>
                                <p class="text-white p-2">لذت یک تجربه عالی از فروش دیجیتال</p>
                            </div>

                            <!-- start .hero__btn-area-->
                            <div class="hero__btn-area">
                                <a href="/templates/list" class="btn btn--round btn--lg">ساخت فروشگاه</a>
                                <a href="{{route('select.free_plan')}}" class="btn btn--round btn--lg">14 روز تست رایگان</a>
                            </div>
                            <!-- end .hero__btn-area-->
                        </div>
                        <div class="col-lg-6">
                            <img class="owl-lazy"  src="{{ asset('images/svg/header.svg') }}" class="header-mockup" style="z-index: 1000;position: relative;" alt="طراحی فروشگاه اینترنتی با شاپی نت">
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
                        <h2 class="h1">ساخت و آماده سازی وب سایت فروشگاهی شما
                            <span class="highlighted"> در سه مرحله</span>
                        </h2>
                        <h1 class="h6">شاپی نت سریع ترین ، بصرفه ترین ، پر بازده ترین و مطمئن ترین روش ساخت وب سایت فروشگاهی</h1>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row">

                <div class="col-lg-4 offset-lg-1 col-md-6 v_middle overview_cont">
                    <div class="overview-icon">
                        <img class="owl-lazy"  src="{{asset('images/new/fac1.png')}}" alt="overview icon">
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
                    <h2 class="overview-title">انتخاب پلن

                    </h2>
                    <p>پس از بررسی مشخصات و امکانات طرح های موجود ، پلن متناسب با نیاز خود را انتخاب کنید.</p>
                </div>
                <!-- end /.col-md-5 -->

                <div class="col-lg-4 offset-lg-1 col-md-6 v_middle overview_cont">
                    <div class="overview-icon">
                        <img class="owl-lazy"  src="{{asset('images/new/fac2.png')}}" alt="overview icon">
                    </div>
                </div>
                <!-- end /.col-md-4 -->

                <div class="col-lg-4 offset-lg-1 col-md-6 v_middle overview_cont">
                    <div class="overview-icon">
                        <img class="owl-lazy"  src="{{ asset('images/new/fac3.png') }}" alt="overview icon">
                    </div>
                </div>
                <!-- end /.col-md-4 -->

                <div class="col-lg-5 offset-lg-1 col-md-6 v_middle overview_cont">
                    <div class="step_num">03</div>
                    <h2 class="overview-title">نهایی سازی سفارش

                    </h2>
                    <p>پس از تکمیل سفارش ، وب سایت فروشگاه شما وارد مرحله آماده سازی میشود، و در سریعترین زمان در اختیار شما قرار خواهد گرفت.</p>
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

        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-wrap">
                        <h2 class="h1 text--white">درخواست قالب جدید</h2>
                        <h4 class="text--white">اگر از میان قالب های موجود ، قالب مناسب کسب و کار خود را پیدا نکردید ،
                            نگران نباشید .
                            ما در سریع ترین زمان قالب مناسب کسب و کار شما را اضافه میکنیم.</h4>
                        <a href="{{route('template.custom')}}" class="btn btn--lg btn--round btn--white callto-action-btn">درخواست قالب جدید</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
    END CALL TO ACTION AREA
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
                        <h2 class="h1">چرا
                            <span class="highlighted">شاپی نت</span>
                            را انتخاب می کنید
                        </h2>
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
                        <span class="feature2__count">1</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-phone-handset pcolor"></span>
                            <h3 class="feature2-title">پشتیبانی</h3>
                            <p class="text-justify">سریع ترین راه برای حل مشکلات و پاسخ به سوالات شما ارتباط با پشتیبانی شاپی نت است،
                                 کارشناسان پشتیبانی ما همیشه آماده پاسخ گویی به سوالات شما هستند .</p>
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
                        <span class="feature2__count">2</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-select mcolor4 "></span>
                            <h3 class="feature2-title">سهولت استفاده</h3>
                            <p class="text-justify">فروشگاه آنلاین شما به گونه ای طراحی شده، که شما به راحتی و بدون نیاز به هیچ دانش فنی میتوانید از آن استفاده کنید. </p>
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
                        <span class="feature2__count">3</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-rocket pcolor"></span>
                            <h3 class="feature2-title">سئو خودکار</h3>
                            <p class="text-justify">فروشگاه آنلاین شما  برای تمام موتور های جستجو از جمله گوگل بهینه شده است
                            و تمام ابزار سئو قدرتمند نیز در اختیار شما قرار خواهند گرفت.  </p>
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
                        <span class="feature2__count">4</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-laptop-phone scolor"></span>
                            <h3 class="feature2-title">کاملا ریسپانسیو</h3>
                            <p class="text-justify">فروشگاه آنلاین شما کاملا ریسپانسیو و واکنش گرا خواهد بود،
                                یعنی  عملکرد بی نقص در تمام دستگاه ها و صفحات نمایش. </p>
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
                        <span class="feature2__count">5</span>
                        <div class="feature2__content">
                            <i class="fa fa-credit-card fa-5x"></i>
                            <h3 class="feature2-title">درگاه پرداخت بانکی </h3>
                            <p class="text-justify">فروشگاه آنلاین شما به درگاه های معتبر بانکی متصل خواهد بود، تا مشتریانتان با خیال آسوده سفارش خود ثبت کنند. </p>
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
                        <span class="feature2__count">6</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-graduation-hat mcolor2"></span>
                            <h3 class="feature2-title">محتوای آموزشی</h3>
                            <p class="text-justify">اگر هر لحظه برای استفاده از  بخشی از وب سایت به آموزش نیاز داشتید ، ویدیو و محتوای آموزشی مرتبط با آن در اختیار شما قرار خواهد گرفت.</p>
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
                        <span class="feature2__count">7</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-spell-check mcolor3"></span>
                            <h3 class="feature2-title">سفارشی سازی</h3>
                            <p class="text-justify">شما می توانید با استفاده از ویدیو و محتوای آموزشی که در اختیار شما قرار می گیرد به سادگی قالب فروشگاه خود را
                            متناسب با نیاز خود شخصی سازی کنید</p>
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
                        <span class="feature2__count">100</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-diamond mcolor4"></span>
                            <h3 class="text-justify">امکانات سفارشی</h3>
                            <p class="text-justify">صد ها امکانت دیگر بجز موارد ذکر شده ، بر روی فروشگاه های شاپی نت فعال است که شما با توجه به نیاز خود می توانید از آنها استفاده نمایید .</p>
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
     START FEATURE AREA
     =================================-->
    <section class="partner-area section--padding bgimage">
        <div class="bg_image_holder">
            <img  class="owl-lazy" src="{{'images/new/ptbg.png'}}" alt="اعتماد">
        </div>
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="h2">چرا می توانید به ما
                            <span class="highlighted">اعتماد</span>
                            کنید
                        </h2>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start row -->
            <div class="row rtl" >
                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img class="owl-lazy"  src="{{asset('images/new/icon/daneshbonyan2.png')}}" height="150 px" alt="دانش بنیان">
                        </div>
                        <div class="feature__title">
                            <h3>مجوز شرکت دانش بنیان</h3>
                        </div>
                        <div class="feature__desc">
                            <p> مجوز شرکت دانش بنیان از معاونت علمی و فناوری ریاست جمهوری</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->
                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img class="owl-lazy"  src="{{'images/new/icon/eNamad.png'}}" height="150 px" alt="نماد اعتماد الکترونیکی">
                        </div>
                        <div class="feature__title">
                            <h3>نماد اعتماد الکترونیکی</h3>
                        </div>
                        <div class="feature__desc">
                            <p> نشان نماد اعتماد الکترونیکی</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->
                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img class="owl-lazy"  src="{{asset('images/new/icon/validate.png')}}" height="150 px" alt="اعتبار">
                        </div>
                        <div class="feature__title">
                            <h3>اعتبار ما</h3>
                        </div>
                        <div class="feature__desc">
                            <p>شاپی نت یک شرکت رسمی ثبت شده با صدها کاربر و پروژه فعال است</p>
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
     START tools AREA امکانات فروشگاه
     =================================-->
    <section class="features section--padding dir-rtl tools">
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12  dir-rtl ">
                    <div class="section-title">
                        <h2 class="h1"> تعدادی از امکانات
                            <span class="highlighted">وب سایت فروشگاهی</span> شاپی نت
                        </h2>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
            <div class="row">
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-history shadow p-3" style="color: orange"></i>
                    <p class="mt-3">پیگیری سفارشات</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-percent shadow p-3" style="color: rgb(44, 248, 204)"></i>
                    <p class="mt-3">کد تخفیف</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-truck shadow p-3" style="color: rgb(248, 44, 44)"></i>
                    <p class="mt-3">روش و هزینه ارسال</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-bank shadow p-3" style="color: rgb(195, 0, 255)"></i>
                    <p class="mt-3">محاسبه مالیات</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-search shadow p-3" style="color: rgb(0, 241, 149)"></i>
                    <p class="mt-3">جستجو و فیلتر</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-comments shadow p-3" style="color: rgb(44, 217, 248)"></i>
                    <p class="mt-3">چت آنلاین</p>
                </div>

                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-picture-o shadow p-3" style="color: rgb(83, 218, 188)"></i>
                    <p class="mt-3">وبلاگ</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-credit-card shadow p-3" style="color: rgb(44, 248, 112)"></i>
                    <p class="mt-3">درگاه بانکی</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa shadow p-3">
                        <img class="owl-lazy"  src="{{asset('images/new/icon/enamad2.png')}}" width="41px" alt="نماد اعتماد">
                    </i>
                    <p class="mt-3">نماد اعتماد</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-line-chart shadow p-3" style="color: rgb(189, 189, 189)"></i>
                    <p class="mt-3">گزارش گیری</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-instagram shadow p-3" style="color: rgb(250, 75, 148)"></i>
                    <p class="mt-3">اتصال به اینستاگرام</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 text-center">
                    <i class="fa fa-object-group shadow p-3" style="color: rgb(248, 44, 44)"></i>
                    <p class="mt-3">ویرایش قالب</p>
                </div>
            </div>
        </div>
    </section>
    <!--================================
    End tools AREA
    =================================-->

    <!--================================
      END OVERVIEW AREA
  =================================-->
    <section class="partner-area section--padding bgimage">
        <div class="bg_image_holder">
            <img class="owl-lazy"  src="{{asset('images/new/ptbg.png')}}" alt="customers">
        </div>
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12  dir-rtl ">
                    <div class="section-title">
                        <h2 class="h1"> تعدادی از برند هایی که از خدمات
                            <span class="highlighted">شاپی نت</span> استفاده می کنند
                        </h2>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="partners">
                        <div class="partner">
                            <img  src="{{ asset('images/customers/shafa.png') }}" height="120 px" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="{{ asset('images/customers/resa.png') }}" height="120 px"  alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="{{ asset('images/customers/exonyx.png') }}" height="120 px"  alt="partner image">
                        </div>
                        <div class="partner">
                            <img  src="{{ asset('images/customers/villaipi.png') }}"  height="120 px" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="{{ asset('images/customers/deka.png') }}" height="120 px"  alt="partner image">
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
                        <h2>
                            <span class="highlighted">نظرات</span>
                            مشتریان
                        </h2>
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
                                    <img class="owl-lazy"  src="{{asset('images/customers/rasa_admin.jpg')}}" alt="Testimonial Avatar">
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name">خانم عباسی </h4>
                                    <span class="desig">مدیر مجموعه آموزشی راسا </span>
                                </div>
                                <span class="lnr lnr-bubble quote-icon"></span>
                            </div>
                            <div class="testimonial__text">
                                <p>سپاس از شما و همکاران خوبتون
                                    طراحی سایت آموزشگاه علمی ما رو به بهترین شکل انجام دادین با یک قالب بسیار زیبا و کاربردی و در کمترین زمان ممکن و پیگیری و پشتیبانی عالی بعد از تحویل سایت به بنده که سوالات و ایرادات رو برطرف میکردین
                                    بی نهایت ممنونم تز کار حرفه ای و عالی شما. </p>
                            </div>
                        </div>
                        <!-- end /.testimonial -->

                        <div class="testimonial">
                            <div class="testimonial__about">
                                <div class="avatar v_middle">
                                    <img class="owl-lazy"  src="{{asset('images/customers/shfa_admin.jpeg')}}" alt="Testimonial Avatar">
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name">کامیز حسین زاده </h4>
                                    <span class="desig">مدیر مجموعه شفا البرز کاسپین </span>
                                </div>
                                <span class="lnr lnr-bubble quote-icon"></span>
                            </div>
                            <div class="testimonial__text">
                                <p>واقعلا هم راه اندازی سریع و با کیفیت بالای وب سایت ، هم پشتیبانی مداوم و البته فیلم های آموزشی که در اخیار ما قرار گرفتند ، همگی عالی بودند .
                                شاپی نت هر امکاناتی که ما برای داشتن یه فروشگاه عالی نیاز داشتیم برامون فرهم کرد .
                                با تشکر از شما</p>
                            </div>
                        </div>
                        <!-- end /.testimonial -->
                        <div class="testimonial">
                            <div class="testimonial__about">
                                <div class="avatar v_middle">
                                    <img class="owl-lazy"  src="{{asset('images/customers/villaipi_admin.jpeg')}}" alt="Testimonial Avatar">
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name">کیوان عباسی </h4>
                                    <span class="desig">مدیر مجموعه ویلایپی </span>
                                </div>
                                <span class="lnr lnr-bubble quote-icon"></span>
                            </div>
                            <div class="testimonial__text">
                                <p>سلام، واقعا در کارشون حرفه ای ، وقت شناس وتجربه زیادی  دارند.کاملا رضایت دارم از کارشون  </p>
                            </div>
                        </div>
                        <!-- end /.testimonial -->

                    </div>
                    <!-- end /.testimonial_slider -->
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




@endsection
