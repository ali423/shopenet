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
                <div class="container">
                    <!-- start row -->
                    <div id="header-row" class="row" style="margin: auto">
                        <div class="col-lg-6">
                            <div class="hero__content__title">
                                <h1>
                                    <span class="light">خودت بساز </span>
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
                            <img src="images/svg/header.svg" class="d-none d-lg-inline">
                        </div>
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end .contact_wrapper -->
        </div>
        <!-- end hero-content -->

        <!--start search-area -->
        <div class="search-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .container -->
                <div class="row">
                    <!-- start .col-sm-12 -->
                    <div class="col-sm-12">
                        <!-- start .search_box -->
                        <div class="search_box">
                            <form action="#">
                                <input type="text" class="text_field" placeholder="جستجو در محصولات ...">
                                <div class="search__select select-wrap">
                                    <select name="category" class="select--field" id="blah">
                                        <option value="">همه دسته بندی ها</option>
                                        <option value="">PSD</option>
                                        <option value="">HTML</option>
                                        <option value="">ورد پرس</option>
                                        <option value="">همه دسته بندی ها</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                                <button type="submit" class="search-btn btn--lg">جستجو</button>
                            </form>
                        </div>
                        <!-- end ./search_box -->
                    </div>
                    <!-- end /.col-sm-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!--start /.search-area -->
    </section>
    <!--================================
    END HERO AREA
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
                            <h3>بهترین تحقیق UX</h3>
                        </div>
                        <div class="feature__desc">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. </p>
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
                            <h3>کاملا پاسخگو</h3>
                        </div>
                        <div class="feature__desc">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. </p>
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
                            <h3>خرید و فروش به راحتی</h3>
                        </div>
                        <div class="feature__desc">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. </p>
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
        START COUNTER UP AREA
    =================================-->
    <section class="counter-up-area bgimage dir-rtl">
        <div class="bg_image_holder">
            <img src="images/new/countbg.jpg" alt="">
        </div>
        <!-- start .container -->
        <div class="container content_above">
            <!-- start .col-md-12 -->
            <div class="col-md-12">
                <div class="counter-up">
                    <div class="counter mcolor2">
                        <span class="lnr lnr-briefcase"></span>
                        <span class="count">38,436</span>
                        <p>آیتم برای فروش</p>
                    </div>
                    <div class="counter mcolor3">
                        <span class="lnr lnr-cloud-download"></span>
                        <span class="count">38,436</span>
                        <p>مجموع فروش</p>
                    </div>
                    <div class="counter mcolor1">
                        <span class="lnr lnr-smile"></span>
                        <span class="count">38,436</span>
                        <p>مشتریان راضی </p>
                    </div>
                    <div class="counter mcolor4">
                        <span class="lnr lnr-users"></span>
                        <span class="count">38,436</span>
                        <p>کاربر</p>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END COUNTER UP AREA
    =================================-->


    <!--================================
        START PROMOTION AREA
    =================================-->
    <section class="promotion-area dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-6 v_middle">
                    <div class="promotion-img">
                        <img src="images/new/bubdle.jpg" alt="Promotion image">
                    </div>
                    <!-- end /.promotion-img -->
                </div>
                <!-- end /.col-md-6 -->

                <div class="col-lg-5 offset-lg-1 col-md-6 v_middle">
                    <div class="promotion-content">
                        <h3 class="promotion__subtitle">بسته نرم افزاری بزرگ</h3>
                        <h1 class="promotion__title">همه ی آنها با 50000 تومان !
                            <span>35% تخفیف </span>
                        </h1>
                        <p>تمام محصولات ما را در یک بسته بندی دریافت کنید و 35٪ از قیمت های معمول را ذخیره کنید. بیش از
                            50 پلاگین، 20 قالب و 30 مورد دیگر خواهد بود!</p>
                        <a href="#" class="btn btn--lg btn--round">مشاهده جزئیات</a>
                    </div>
                    <!-- end /.promotion-content -->
                </div>
                <!-- end /.col-md-5 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PROMOTION AREA
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
                        <h1>صرفه جویی در زمان و ساختن پروژه های شما در یک
                            <span class="highlighted">چشم به هم زدن </span>
                        </h1>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است. </p>
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
                    <h2 class="overview-title">بهترین محصولات با کیفیت</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
                <!-- end /.col-md-5 -->

                <div class="col-lg-5 offset-lg-1 col-md-6 v_middle overview_cont">
                    <div class="step_num">02</div>
                    <h2 class="overview-title">آسان برای نصب و استفاده
                         
                    </h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
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
                    <h2 class="overview-title">به طور کامل قابل ویرایش محتوا و عناصر
                         
                    </h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
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
                            <span class="highlighted">ما</span>
                            را انتخاب کنید
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
                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .reason -->
                    <div class="feature2">
                        <span class="feature2__count">01</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-license pcolor"></span>
                            <h3 class="feature2-title">یک بار پرداخت کنید</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. </p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">02</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-magic-wand scolor"></span>
                            <h3 class="feature2-title">کیفیت محصولات</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. </p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
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
                <div class="col-lg-4 col-md-6">
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
                <div class="col-lg-4 col-md-6">
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
                <div class="col-lg-4 col-md-6">
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

