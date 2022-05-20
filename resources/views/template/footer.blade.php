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
<script src="{{ url('/resources/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script> -->
<script src="{{ url('/resources/vendors/js/calendar/fullcalendar.min.js') }}"></script>
<script src="{{ url('/resources/js/scripts/pages/app-calendar-events.min.js')}}"></script>
<script src="{{ url('/resources/js/scripts/pages/app-calendar.min.js')}}"></script>
<script src="{{ url('/resources/vendors/js/forms/select/select2.full.min.js')}}"></script>



<!-- BEGIN: Page JS-->
<!-- <script src="{{ url('/resources/js/scripts/pages/dashboard-ecommerce.min.js') }}"></script> -->
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>

<!--  to be checked -->
<!-- <script src="../../../app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script> -->