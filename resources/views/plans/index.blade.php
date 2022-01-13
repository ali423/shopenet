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
            <table id="pricing-table" class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">
                        <div class="slider-btn">
                            <span class="bronze-mobile p-2 pb-4 mb-1">طرح برنزی &#11164;</span>
                            <span class="silver-mobile p-2 pb-4 mb-1">طرح نقره ای &#11164;</span>
                            <span class="gold-mobile p-2">طرح طلایی &#11164;</span>
                        </div>
                    </th>
                    <th scope="col" data-col="1">
                        <div class="bronze-head">
                            <h3 class="text-light">طرح برنزی</h3>
                            <p class="text-light">برای حرفه ای ها با 3 گیگ هاست</p>
                        </div>
                        <div class="bronze-body bg-light p-3 mb-0">
                            <h4>120,000 ریال</h4>
                            <p>(تمدید سالیانه با ۲۰ درصد تخفیف )</p>
                            <a href="{{route('select.plan',['plan'=>'a'])}}" class="btn btn-success p-2">سفارش این بسته</a>
                        </div>
                    </th>
                    <th scope="col" data-col="2">
                        <div class="gold-head">
                            <h3 class="text-light">طرح طلایی</h3>
                            <p class="text-light">برای حرفه ای ها با 3 گیگ هاست</p>
                        </div>
                        <div class="gold-body p-3 mb-0">
                            <h4>120,000 ریال</h4>
                            <p>(تمدید سالیانه با ۲۰ درصد تخفیف )</p>
                            <a href="{{route('select.plan',['plan'=>'c'])}}" class="btn btn-success p-2">سفارش این بسته</a>
                        </div>
                    </th>
                    <th scope="col" data-col="3">
                        <div class="silver-head">
                            <h3 class="text-light">طرح نقره ای</h3>
                            <p class="text-light">برای حرفه ای ها با 3 گیگ هاست</p>
                        </div>
                        <div class="bg-light p-3 mb-0">
                            <h4>120,000 ریال</h4>
                            <p>(تمدید سالیانه با ۲۰ درصد تخفیف )</p>
                            <a href="{{route('select.plan',['plan'=>'b'])}}" class="btn btn-success p-2">سفارش این بسته</a>
                        </div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">موضوع 1</th>
                    <td data-col="1">&#10004;</td>
                    <td data-col="2">&#10004;</td>
                    <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                    <th scope="row">موضوع 2</th>
                    <td data-col="1">&#10006;</td>
                    <td data-col="2">&#10004;</td>
                    <td data-col="3">&#10004;</td>
                  </tr>
                  <tr>
                    <th scope="row">موضوع 3</th>
                    <td data-col="1">&#10006;</td>
                    <td data-col="2">&#10004;</td>
                    <td data-col="3">&#10006;</td>
                  </tr>
                  <tr>
                    <td style="background: #eff1f5 !important"></td>
                    <td data-col="1">
                        <h4>10,000</h4>
                        <a href="{{route('select.plan',['plan'=>'a'])}}" class="btn btn-success p-3 mt-2">سفارش این بسته</a>
                    </td>
                    <td data-col="2">
                        <h4>30,000</h4>
                        <a href="{{route('select.plan',['plan'=>'c'])}}" class="btn btn-success p-3 mt-2">سفارش این بسته</a>
                    </td>
                    <td data-col="3">
                        <h4>20,000</h4>
                        <a href="{{route('select.plan',['plan'=>'b'])}}" class="btn btn-success p-3 mt-2">سفارش این بسته</a>
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

