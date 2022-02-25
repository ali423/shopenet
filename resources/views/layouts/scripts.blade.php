<script
    src="{{ asset("https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c") }}">

</script>
<!-- inject:js -->
<script src="{{ asset("js/vendor/jquery/jquery-1.12.3.js") }}"></script>
<script src="{{ asset("js/vendor/jquery/popper.min.js") }}"></script>
<script src="{{ asset("js/vendor/jquery/uikit.min.js") }}"></script>
<script src="{{ asset("js/vendor/bootstrap.min.js") }}"></script>
<script src="{{ asset("js/vendor/chart.bundle.min.js") }}"></script>
<script src="{{ asset("js/vendor/grid.min.js") }}"></script>
<script src="{{ asset("js/vendor/jquery-ui.min.js") }}"></script>
<script src="{{ asset("js/vendor/jquery.barrating.min.js") }}"></script>
<script src="{{ asset("js/vendor/jquery.countdown.min.js") }}"></script>
<script src="{{ asset("js/vendor/jquery.counterup.min.js") }}"></script>
<script src="{{ asset("js/vendor/jquery.easing1.3.js") }}"></script>
<script src="{{ asset("js/vendor/owl.carousel.min.js") }}"></script>
<script src="{{ asset("js/vendor/slick.min.js") }}"></script>
<script src="{{ asset("js/vendor/tether.min.js") }}"></script>
<script src="{{ asset("js/vendor/trumbowyg.min.js") }}"></script>
<script src="{{ asset("js/vendor/waypoints.min.js") }}"></script>
<script src="{{ asset("js/dashboard.min.js") }}"></script>
<script src="{{ asset("js/main.min.js") }}"></script>
<script src="{{ asset("js/map.min.js") }}"></script>

<!-- my custom script -->
<script src="{{ asset("js/customjs.min.js") }}"></script>
<!-- endinject -->

<script>
    setTimeout(function () {
        $(".myAlert-top").hide();
    }, 2000);
</script>
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="55958c2f-3e17-4784-865d-62fd493f79b8";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
@yield('page_scripts')
