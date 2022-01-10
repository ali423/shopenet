@extends("layouts.main")

@section('content')


    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">طرح قیمت گذاری </h1>
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="index.html">خانه </a>
                            </li>
                            <li class="active">
                                <a href="#">طرح قیمت گذاری </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
        START PRICING AREA
    =================================-->
    <section class="pricing_area section--padding dir-rtl">
        <div class="container">
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>
                            <span class="highlighted">قیمت</span>
                            عادلانه و ساده
                        </h1>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                    <!-- end /.section-title -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing red">
                        <h4 class="pricing--title">راه اندازی</h4>
                        <p class="pricing--price">
                            <span class="ammount">69 تومان</span>/ ماهیانه </p>

                        <div class="pricing--features">
                            <ul>
                                <li>
                                    عضویت <strong>3 ماه</strong>
                                </li>
                                <li>
                                    <strong>همه قالب های ورد پرس </strong>
                                    <span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top"
                                          title="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است."></span>
                                </li>
                                <li>انجمن پشتیبانی</li>
                                <li>فضای مجاز: نامحدود</li>
                                <li>
                                    پشتیبانی فنی <strong>1 دامنه </strong>
                                    <span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top"
                                          title="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است."></span>
                                </li>
                                <li>حذف کپی رایت
                                     
                                </li>
                                <li>
                                    شامل <strong>دمو</strong>
                                    <span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top"
                                          title="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است."></span>
                                </li>
                                <li>نسخه ی نمایشی</li>
                            </ul>
                        </div>
                        <!-- end /.pricing--features -->

                        <a href="{{route('select.plan',['plan'=>'a'])}}" class="pricing--btn">خرید و شروع </a>
                        <!-- end /.pricing--btn -->
                    </div>
                    <!-- end /.pricing -->
                </div>
                <!-- end /.col-md-4 -->

                <div class="col-lg-4 col-md-6">
                    <div class="pricing blue">
                        <h4 class="pricing--title">راه اندازی</h4>
                        <p class="pricing--price">
                            <span class="ammount">69 تومان</span>/ ماهیانه </p>

                        <div class="pricing--features">
                            <ul>
                                <li>
                                    عضویت <strong>3 ماه</strong>
                                </li>
                                <li>
                                    <strong>همه قالب های ورد پرس </strong>
                                    <span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top"
                                          title="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است."></span>
                                </li>
                                <li>انجمن پشتیبانی</li>
                                <li>فضای مجاز: نامحدود</li>
                                <li>
                                    پشتیبانی فنی <strong>1 دامنه </strong>
                                    <span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top"
                                          title="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است."></span>
                                </li>
                                <li>حذف کپی رایت
                                     
                                </li>
                                <li>
                                    شامل <strong>دمو</strong>
                                    <span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top"
                                          title="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است."></span>
                                </li>
                                <li>نسخه ی نمایشی</li>
                            </ul>
                        </div>
                        <!-- end /.pricing--features -->

                        <a href="{{route('select.plan',['plan'=>'b'])}}" class="pricing--btn">خرید و شروع </a>
                        <!-- end /.pricing--btn -->
                    </div>
                    <!-- end /.pricing -->
                </div>
                <!-- end /.col-md-4 -->

                <div class="col-lg-4 col-md-6">
                    <div class="pricing yellow">
                        <h4 class="pricing--title">راه اندازی</h4>
                        <p class="pricing--price">
                            <span class="ammount">69 تومان</span>/ ماهیانه </p>

                        <div class="pricing--features">
                            <ul>
                                <li>
                                    عضویت <strong>3 ماه</strong>
                                </li>
                                <li>
                                    <strong>همه قالب های ورد پرس </strong>
                                    <span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top"
                                          title="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است."></span>
                                </li>
                                <li>انجمن پشتیبانی</li>
                                <li>فضای مجاز: نامحدود</li>
                                <li>
                                    پشتیبانی فنی <strong>1 دامنه </strong>
                                    <span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top"
                                          title="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است."></span>
                                </li>
                                <li>حذف کپی رایت
                                     
                                </li>
                                <li>
                                    شامل <strong>دمو</strong>
                                    <span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top"
                                          title="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است."></span>
                                </li>
                                <li>نسخه ی نمایشی</li>
                            </ul>
                        </div>
                        <!-- end /.pricing--features -->

                        <a href="{{route('select.plan',['plan'=>'c'])}}" class="pricing--btn">خرید و شروع </a>
                        <!-- end /.pricing--btn -->
                    </div>
                    <!-- end /.pricing -->
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PRICING AREA
    =================================-->


@endsection

