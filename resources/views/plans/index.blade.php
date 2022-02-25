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
                        <p> با استفاده از شاپی نت فروشگاه اینترنتی دلخواه خود را با کمترین هزینه ایجاد کنید .
                            </p>
                    </div>
                    <!-- end /.section-title -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
            <table id="pricing-table" class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">
                        <div class="slider-btn">
                            <span class="bronze-mobile p-2 pb-4 mb-1">طرح پایه &#11164;</span>
                            <span class="silver-mobile p-2 pb-4 mb-1">طرح حرفه ای &#11164;</span>
                            <span class="gold-mobile p-2">طرح پیشنهادی &#11164;</span>
                        </div>
                    </th>
                    <th scope="col" data-col="1">
                        <div class="bronze-head">
                            <h3 class="text-light">طرح پایه</h3>
                            <p class="text-light">(ویژه تازه کار ها)</p>
                        </div>
                        <div class="bronze-body bg-light p-3 mb-0">
                            <h4>{{ number_format(env('PLAN_A_AMOUNT')) }} تومان</h4>
                            <p>(تمدید سالیانه با 5 درصد تخفیف )</p>
                            <a href="{{route('select.plan',['plan'=>'a'])}}" class="btn btn-success p-2">سفارش این بسته</a>
                        </div>
                    </th>
                    <th scope="col" data-col="2">
                        <div class="gold-head">
                            <h3 class="text-light">طرح پیشنهادی</h3>
                            <p class="text-light">(پر فروش ترین بسته)</p>
                        </div>
                        <div class="gold-body p-3 mb-0">
                            <h4>{{number_format(env('PLAN_B_AMOUNT')) }}  تومان</h4>
                            <p>(تمدید سالیانه با 15 درصد تخفیف )</p>
                            <a href="{{route('select.plan',['plan'=>'b'])}}" class="btn btn-success p-2">سفارش این بسته</a>
                        </div>
                    </th>
                    <th scope="col" data-col="3">
                        <div class="silver-head">
                            <h3 class="text-light">طرح حرفه ای</h3>
                            <p class="text-light">(ویژه کسب وکار های حرفه ای)</p>
                        </div>
                        <div class="bg-light p-3 mb-0">
                            <h4>{{ number_format(env('PLAN_C_AMOUNT')) }} تومان</h4>
                            <p>(تمدید سالیانه با 30 درصد تخفیف )</p>
                            <a href="{{route('select.plan',['plan'=>'c'])}}" class="btn btn-success p-2">سفارش این بسته</a>
                        </div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">پشتیبانی</th>
                    <td data-col="1"></td>
                    <td data-col="2"></td>
                    <td data-col="3"></td>
                </tr>
                <tr>
                    <th>پشتیبانی فنی</th>
                    <td data-col="1">&#10004;</td>
                    <td data-col="2">&#10004;</td>
                    <td data-col="3">&#10004;</td>
                </tr>
                <tr>
                    <th>ویدیو آموزشی</th>
                    <td data-col="1">&#10004;</td>
                    <td data-col="2">&#10004;</td>
                    <td data-col="3">&#10004;</td>
                </tr>
                <tr>
                    <th>مشاوره بازاریابی</th>
                    <td data-col="1">&#10006;</td>
                    <td data-col="2">&#10004;</td>
                    <td data-col="3">&#10004;</td>
                </tr>
                <tr>
                    <th>اخذ نماد اعتماد الکترونیکی</th>
                    <td data-col="1">&#10006;</td>
                    <td data-col="2">&#10006;</td>
                    <td data-col="3">&#10004;</td>
                </tr>
                <tr>
                    <th>سفارشی سازی وب سایت</th>
                    <td data-col="1">&#10006;</td>
                    <td data-col="2">&#10006;</td>
                    <td data-col="3">&#10004;</td>
                </tr>


                <tr>
                    <th scope="row">هاست و دامنه</th>
                      <td data-col="1"></td>
                      <td data-col="2"></td>
                      <td data-col="3"></td>
                  </tr>
                  <tr>
                      <th>دامنه ir رایگان</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>دامنه com رایگان</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10006;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>فضای ذخیره سازی</th>
                      <td data-col="1">1 گیگ</td>
                      <td data-col="2">5 گیگ</td>
                      <td data-col="3">10 گیگ</td>
                  </tr>
                  <tr>
                      <th>گواهی امنیت SSL</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                    <th>ایمیل تحت دامنه</th>
                    <td data-col="1">&#10006;</td>
                    <td data-col="2">&#10004;</td>
                    <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>پشتیبان گیری خودکار</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                    <th scope="row">امکانات فروشگاه</th>
                    <td data-col="1"></td>
                    <td data-col="2"></td>
                    <td data-col="3"></td>
                  </tr>
                  <tr>
                      <th>ایجاد محصول نامحدود</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>ایجاد دسته بندی نامحدود</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>تعریف کد تخفیف</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>تخفیف پلکانی</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>فروش عمده</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10006;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>اپلیکیشن اندروید</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10006;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>سبد خرید</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>جستجو و فیلتر</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>لیست علاقه مندی ها</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>درگاه پرداخت بانکی</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>مقایسه محصولات</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>مدیریت روش های ارسال</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>محاسبه هزینه ارسال</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10006;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>تعریف هزینه ارسال</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>ارسال پس کرایه</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>پرداخت درب محل</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>صدور فاکتور</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>محاسبه مالیات</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>راهنمای تشخیص سایز</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10006;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>جمع آوری اطلاعات کاربران</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>ارسال اطلاعیه برای کاربران</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>اطلاعیه های فروش</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>فروش ویژه و مناسبتی</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10006;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>فروش محصول دیجیتال</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10006;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>اشتراک گذاری محصولات</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>گزارش گیری از فروشگاه</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>کنترل دسترسی کاربران</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10006;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th scope="row">امکانات سایت</th>
                      <td data-col="1"></td>
                      <td data-col="2"></td>
                      <td data-col="3"></td>
                  </tr>
                  <tr>
                      <th>صفحات کاملا ریسپانسیو</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>داشبورد کاربران</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>ویرایش صفحات سایت</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>تعریف صفحات نامحدود</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10006;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>وبلاگ</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>چت آنلاین</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>پنل پیامکی</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10006;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>داشبورد مدیریت ساده و فارسی</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>مدیریت سایت با موبایل</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>ثبت نام و ورود کاربران</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>صفحه تماس با ما</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>صفحه درباره ما</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>نمونه کار ها</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>نظرات کاربران</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>

                  <tr>
                      <th scope="row">امکانات سئو</th>
                      <td data-col="1"></td>
                      <td data-col="2"></td>
                      <td data-col="3"></td>
                  </tr>
                  <tr>
                      <th>معرفی به گوگل</th>
                      <td data-col="1">&#10004;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>بهینه سازی SEO</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10004;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>سئو خودکار صفحات</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10006;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                      <th>اتصال خودکار به ترب</th>
                      <td data-col="1">&#10006;</td>
                      <td data-col="2">&#10006;</td>
                      <td data-col="3">&#10004;</td>
                  </tr>

                  <tr>
                    <td style="background: #eff1f5 !important"></td>
                    <td data-col="1">
                        <h4>{{ number_format(env('PLAN_A_AMOUNT')) }} تومان</h4>
                        <a href="{{route('select.plan',['plan'=>'a'])}}" class="btn btn-success p-3 mt-2">سفارش این بسته</a>
                    </td>
                    <td data-col="2">
                        <h4>{{ number_format(env('PLAN_B_AMOUNT')) }} تومان</h4>
                        <a href="{{route('select.plan',['plan'=>'b'])}}" class="btn btn-success p-3 mt-2">سفارش این بسته</a>
                    </td>
                    <td data-col="3">
                        <h4>{{ number_format(env('PLAN_C_AMOUNT')) }} تومان</h4>
                        <a href="{{route('select.plan',['plan'=>'c'])}}" class="btn btn-success p-3 mt-2">سفارش این بسته</a>
                    </td>
                  </tr>
                </tbody>
            </table>
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PRICING AREA
    =================================-->

@endsection

