$(document).ready(function () {
    $("#a-fib").attr("disabled", true);
    $("#vent-arrhy").attr("disabled", true);
    $("#avblock").attr("disabled", true);
    $("#bbb").attr("disabled", true);
    /* historyofArrythima Check*/
    $("#historyofArrythima").change(function () {
        if ($(this).is(":checked")) {
            $("#a-fib").attr("disabled", false);
            $("#vent-arrhy").attr("disabled", false);
            $("#avblock").attr("disabled", false);
            $("#bbb").attr("disabled", false);
        } else {
            $("#a-fib").attr("disabled", true);
            $("#vent-arrhy").attr("disabled", true);
            $("#avblock").attr("disabled", true);
            $("#bbb").attr("disabled", true);
        }
    });
    //  for cass areas
    $(".cass").attr("disabled", true);
    $("#cassCheck").change(function () {
        if ($(this).is(":checked")) {
            $(".cass").attr("disabled", false);
        } else {
            $(".cass").attr("disabled", true);
        }
    });
    //  ecbo checks
    $(".cass").attr("disabled", true);
    $("#cassCheck").change(function () {
        if ($(this).is(":checked")) {
            $(".cass").attr("disabled", false);
        } else {
            $(".cass").attr("disabled", true);
        }
    });

    $(".arotic-data").attr("disabled", true);
    $(".arotic").change(function () {
        if ($(this).is(":checked")) {
            $(".arotic-data").attr("disabled", false);
        } else {
            $(".arotic-data").attr("disabled", true);
        }
    });

    $(".mitral-data").attr("disabled", true);
    $(".mitral").change(function () {
        if ($(this).is(":checked")) {
            $(".mitral-data").attr("disabled", false);
        } else {
            $(".mitral-data").attr("disabled", true);
        }
    });

    $(".tricupsid-data").attr("disabled", true);
    $(".tricupsid").change(function () {
        if ($(this).is(":checked")) {
            $(".tricupsid-data").attr("disabled", false);
        } else {
            $(".tricupsid-data").attr("disabled", true);
        }
    });

    $(".pulmonary-data").attr("disabled", true);
    $(".pulmonary").change(function () {
        if ($(this).is(":checked")) {
            $(".pulmonary-data").attr("disabled", false);
        } else {
            $(".pulmonary-data").attr("disabled", true);
        }
    });
});
