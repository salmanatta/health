<script src="{{ url('/resources/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ url('/resources/vendors/js/charts/apexcharts.min.js') }}"></script>
<script src="{{ url('/resources/vendors/js/extensions/toastr.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ url('/resources/js/core/app-menu.min.js') }}"></script>
<script src="{{ url('/resources/js/core/app.min.js') }}"></script>
<script src="{{ url('/resources/js/scripts/customizer.min.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- <script src="{{ url('/resources/js/scripts/pages/dashboard-ecommerce.min.js') }}"></script> -->
<!-- END: Page JS-->

<script>
    $(window).on('load',  function(){
        if (feather) {
            feather.replace({ width: 14, height: 14 });
        }
    })
</script>
