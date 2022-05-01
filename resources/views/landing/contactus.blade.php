@extends("layouts.main")
@section('title','تماس با ما')
@section('description','برای ارتباط با شاپی نت میتوانید از تلفن های تماس و یا پیشتیبانی آنلاین وب سایت و یا شماره واتس آپ استفاده کنید .')
@section('content')
    <!--================================
    START AFFILIATE AREA
=================================-->
    <section class="contact-area section--padding dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <!-- start col-md-12 -->
                        <div class="col-md-12">
                            <div class="section-title">
                                <h1>تماس با
                                    <span class="highlighted">شاپی نت</span>
                                </h1>
                            </div>
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->

                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="contact_tile">
                                <span class="tiles__icon lnr lnr-map-marker"></span>
                                <h4 class="tiles__title">آدرس دفتر</h4>
                                <div class="tiles__content">
                                    <p>تبریز ، خیابان ورزش ، مرکز رشد فناوری های پیشرفته ، واحد 5 </p>
                                </div>
                            </div>
                        </div>
                        <!-- end /.col-lg-4 col-md-6 -->

                        <div class="col-lg-4 col-md-6">
                            <div class="contact_tile">
                                <span class="tiles__icon lnr lnr-phone"></span>
                                <h4 class="tiles__title">تلفن </h4>
                                <div class="tiles__content">
                                   <p> 34406859 041 </p>
                                    <p> 5784 695 0914 </p>
                                </div>
                            </div>
                            <!-- end /.contact_tile -->
                        </div>
                        <!-- end /.col-lg-4 col-md-6 -->

                        <div class="col-lg-4 col-md-6">
                            <div class="contact_tile">
                                <span class="tiles__icon lnr lnr-inbox"></span>
                                <h4 class="tiles__title">ایمیل</h4>
                                <div class="tiles__content">
                                    <p>info@shopenet.ir</p>
                                    <br>
                                </div>
                            </div>
                            <!-- end /.contact_tile -->
                        </div>
                        <!-- end /.col-lg-4 col-md-6 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.col-md-12 -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12562.493597344903!2d46.2481075!3d38.0791508!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbb497a79e5d11a4e!2z2LTYp9m-24wg2YbYqg!5e0!3m2!1sfa!2s!4v1651407427020!5m2!1sfa!2s" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <!-- end .row -->
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>




@endsection

@section('page_scripts')
    <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c')}}"></script>
    <script src="{{asset('js/map.min.js')}}"></script>

@endsection

