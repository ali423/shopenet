<!--================================
START FOOTER AREA
=================================-->
<footer class="footer-area dir-rtl">
    <div class="footer-big">
        <!-- start .container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="info-footer">
                        <div class="info__logo">
                            <img src="images/logo/combine.png" height="70 px" alt="footer logo">
                        </div>
                        <p class="info--text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                        <ul class="info-contact">
                            <li>
                                <span class="lnr lnr-phone info-icon"></span>
                                <span class="info">تلفن :34406859 041</span>
                            </li>
                            <li>
                                <span class="lnr lnr-envelope info-icon"></span>
                                <span class="info dir-rtl">info@shopenet.ir</span>
                            </li>
                            <li>
                                <span class="lnr lnr-map-marker info-icon"></span>
                                <span class="info">تبریز ، خیابان ورزش </span>
                            </li>
                        </ul>
                    </div>
                    <!-- end /.info-footer -->
                </div>
                <!-- end /.col-md-3 -->

                <div class="col-lg-4 col-md-6">
                    <div class="footer-menu">
                        <ul>
                            <li class="has_dropdown">
                                <a href="{{route('home')}}">خانه </a>
                            </li>
                            <li class="has_dropdown">
                                <a href="/templates/list">قالب ها</a>
                            </li>
                            <li class="has_dropdown">
                                <a href="{{route('plan.index')}}">قیمت گذاری</a>
                            </li>
                            <li class="has_dropdown">
                                <a href="{{route('template.custom')}}">درخواست قالب جدید</a>
                            </li>
                            <li>
                                <a href="{{route('contactus')}}">تماس با ما</a>
                            </li>

                        </ul>
                    </div>
                    <!-- end /.footer-menu -->
                </div>
                <!-- end /.col-md-5 -->

                <div class="col-lg-5 col-md-12">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="{{asset('images/new/icon/enamad2.png')}}" class="p-2" width="360px">
                        </div>
                            <div class="col-md-4 text-center">
                                <a href="https://daneshbonyan.isti.ir/">
                                <img src="{{asset('images/new/icon/daneshbonyan2.png')}}" class="p-2" width="360px">
                                </a>
                            </div>
                        <div class="col-md-4 text-center">
                            <a href="https://www.eastp.ir/">
                            <img src="{{ asset('images/new/icon/park.png') }}" class="p-2" width="360px">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.footer-big -->
    <div class="mini-footer pb-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter m-auto">
                        <!-- start .social -->
                        <div class="social social--color--filled">
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-google-plus"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-pinterest"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-linkedin"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-dribbble"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.social -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mini-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-text">
                        <p>
                            <a href="#"></a>کپی رایت &copy; 2022 - تمام حقوق برای شاپی نت محفوظ است
                            <a target="_blank" href="http://damandarya.ir">SHOPENET</a>
                        </p>
                    </div>

                    <div class="go_top">
                        <span class="lnr lnr-chevron-up"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--================================
END FOOTER AREA
=================================-->

<!--//////////////////// JS GOES HERE ////////////////-->
@include('layouts.scripts')
</body>

</html>
