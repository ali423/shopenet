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
<script src="{{ asset("js/dashboard.js") }}"></script>
<script src="{{ asset("js/main.js") }}"></script>
<script src="{{ asset("js/map.js") }}"></script>

<!-- my custom script -->
<script src="{{ asset("js/customjs.js") }}"></script>
<!-- endinject -->

<script>
    setTimeout(function () {
        $(".myAlert-top").hide();
    }, 2000);
</script>
@yield('page_scripts')
