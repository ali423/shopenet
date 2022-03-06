@extends("layouts.main")

@section('content')



    <!--================================
    START BREADCRUMB AREA
=================================-->
    <section class="breadcrumb-area dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">قالب {{ $template->title }}</h1>
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="{{route('home')}}">خانه</a>
                            </li>
                            <li>
                                <a href="/templates/list">قالب ها</a>
                            </li>
                            <li class="active">
                                <a href="/template/{{$template->id}}">قالب {{ $template->title }}</a>
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


    <!--============================================
        START SINGLE PRODUCT DESCRIPTION AREA
    ==============================================-->
    <section class="single-product-desc single-product-desc2 dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="item-preview item-preview2">
                        <div class="prev-slide text-center">
                            <img src="{{ asset(str_replace('public','storage',$template->icon))}}" height="350 px" width="700 px">
                        </div>

                        <div class="item__preview-thumb">
                            <div class="item-action">
                                <div class="action-btns">
                                    <a href="/select-template/{{$template->id}}" class="btn btn--round btn--lg">انتخاب </a>
                                    <a href="/preview/{{$template->slug}}" class="btn btn--round btn--lg btn--icon">
                                        <span class="lnr "></span>پیشنمایش</a>
                                </div>
                            </div>
                            <!-- end /.item__action -->
                        </div>
                        <!-- end /.item__preview-thumb-->

                        <div class="tab tab2">
                            <div class="item-navigation">
                                <ul class="nav nav-tabs nav--tabs2">
                                    <li>
                                        <a href="#product-details1" class="active" aria-controls="product-details1" role="tab" data-toggle="tab">جزئیات </a>
                                    </li>
                                    <li>
                                        <a href="#default_options" aria-controls="default_options" role="tab" data-toggle="tab">امکانات ویژه</a>
                                    </li>
                                    <li>
                                        <a href="#professional_options" aria-controls="professional_options" role="tab" data-toggle="tab">امکانات سفارشی</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.item-navigation -->

                            <div class="tab-content">
                                <div class="tab-pane product-tab fade show active" id="product-details1">
                                    <h1>{{ $template->title }}</h1>
                                    <p>{!! $template->about !!}</p>
                                    <div class="job_detail_module">
                                        <h3 class="job__title">امکانات  ویژه
                                             
                                        </h3>
                                        <div class="job__content">
                                            <ul class="content_list">
                                                @foreach($template->templateDefaultOptions as $options)
                                                    <li>{{$options->title}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="job_detail_module">
                                        <h3 class="job__title">امکانات سفارشی
                                             
                                        </h3>
                                        <div class="job__content">
                                            <ul class="content_list">
                                                @foreach($template->templateProfessionalOptions as $options)
                                                    <li>{{$options->title}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end /.tab-content -->

                                <div class="tab-pane product-tab fade" id="default_options">
                                    <div class="thread">
                                        <ul class="media-list thread-list">
                                            <div class="job_detail_module">
                                                <h3 class="job__title">امکانات  ویژه
                                                     
                                                </h3>
                                                <div class="job__content">
                                                    <p>این امکانات بصورت کامل بر روی قالب موجود است و با انتخاب قالب تمامی این امکانات برای شما فعال خواهند شد</p>

                                                    <ul class="content_list">
                                                        @foreach($template->templateDefaultOptions as $options)
                                                        <li>{{$options->title}}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </ul>
                                        <!-- end /.media-list -->
                                    </div>
                                    <!-- end /.comments -->
                                </div>
                                <div class="tab-pane product-tab fade" id="professional_options">
                                    <div class="thread">
                                        <ul class="media-list thread-list">
                                            <div class="job_detail_module">
                                                <h3 class="job__title">امکانات سفارشی
                                                     
                                                </h3>
                                                <div class="job__content">
                                                    <p>این امکانات بصورت پیشفرض بر روی قالب فعال نیستند ، اما پس از خرید قالب میتواند با ثبت درخواست فعالسازی ، از آنها هم استفاده کنید</p>

                                                    <ul class="content_list">
                                                        @foreach($template->templateProfessionalOptions as $options)
                                                            <li>{{$options->title}}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </ul>
                                        <!-- end /.media-list -->
                                    </div>
                                    <!-- end /.comments -->
                                </div>
                                <!-- end /.product-comment -->
                            </div>
                            <!-- end /.tab-content -->
                        </div>
                        <!-- end /.item-info -->
                    </div>
                    <!-- end /.item-preview-->
                </div>
                <!-- end /.col-md-8 -->

                <div class="col-lg-4">
                    <aside class="sidebar sidebar--single-product">
                        <div class="sidebar-card card-pricing">
                            <div class="prev-slide">
                                <img src="{{ asset(str_replace('public','storage',$template->img))}}" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <br>
                            <div class="tab-pane product-tab">
                                <p>{{$template->description}}</p>
                            </div>
                            <div class="purchase-button">
                                <a href="/select-template/{{$template->id}}" class="btn btn--lg btn--round">انتخاب</a>
                            </div>
                            <!-- end /.purchase-button -->
                        </div>
                        <!-- end /.sidebar--card -->
                    </aside>
                    <!-- end /.aside -->
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--===========================================
        END SINGLE PRODUCT DESCRIPTION AREA
    ===============================================-->



    <!--============================================
        START MORE PRODUCT ARE
    ==============================================-->
    <section class="more_product_area section--padding dir-rtl">
        <div class="container">
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>
                            <span class="highlighted">قالب های  </span>
                            دیگر
                        </h1>
                    </div>
                </div>
                <!-- end /.col-md-12 -->

                @foreach($templates as $template)
                    @include('layouts.product')
                @endforeach


            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.container -->
    </section>
    <!--============================================
        END MORE PRODUCT AREA
    ==============================================-->
@endsection


