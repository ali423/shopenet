@extends("layouts.main")

@section('content')



    <!--================================
    START BREADCRUMB AREA
=================================-->
    <section class="breadcrumb-area dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">لیست قالب ها</h1>
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="{{route('home')}}">خانه</a>
                            </li>
                            <li>
                                <a href="/templates/list">قالب ها</a>
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
        START MORE PRODUCT ARE
    ==============================================-->
    <section class="more_product_area section--padding dir-rtl">
        <div class="container">
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>
                            <span class="highlighted">لیست  </span>
                            قالب ها
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


