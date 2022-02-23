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
                            <img src="{{asset('images/logo/combine.png')}}" height="70 px" alt="footer logo">
                        </div>
                        <p class="info--text text-justify">شاپی نت یک فروشگاه ساز آنلاینه که تمامی امکاناتی که شما برای ورود به دنیای فروش دیجیتال و موفقیت در اون رو نیاز دارید براتون فراهم می‌کنه.</p>
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
                                <span class="info">تبریز ، خیابان ورزش ، شرکت دانش بنیان دکاتک</span>
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
                            <a referrerpolicy="origin" target="_blank" href="https://trustseal.enamad.ir/?id=211063&amp;Code=QIuqSCjxNe6Ox8vvK5lW"><img referrerpolicy="origin" src="https://Trustseal.eNamad.ir/logo.aspx?id=211063&amp;Code=QIuqSCjxNe6Ox8vvK5lW" alt="" style="cursor:pointer" id="QIuqSCjxNe6Ox8vvK5lW"></a>
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
                                    <a href="https://www.instagram.com/shopenet_ir/">
                                        <i class="fa fa-instagram fa-3x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://t.me/shopenet">
                                        <i class="fa fa-telegram fa-3x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/989146955784">
                                        <i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i>
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
                            <a target="_blank" href="https://shopenet.ir/">SHOPENET</a>
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
