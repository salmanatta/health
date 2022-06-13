$(document).ready(function (){

    // cardiac-history-fill fields
    // -------- Start ------------
    $("#a-fib").attr("disabled", true)
    $("#vent-arrhy").attr("disabled", true)
    $("#avblock").attr("disabled", true)
    $("#bbb").attr("disabled", true)
    /* historyofArrythima Check*/
    $("#historyofArrythima").change(function (){
        if ($(this).is(":checked")) {
            $("#a-fib").attr("disabled", false)
            $("#vent-arrhy").attr("disabled", false)
            $("#avblock").attr("disabled", false)
            $("#bbb").attr("disabled", false)
        } else {
            $("#a-fib").attr("disabled", true)
            $("#vent-arrhy").attr("disabled", true)
            $("#avblock").attr("disabled", true)
            $("#bbb").attr("disabled", true)

        }
    });
    $("#Invasive-Int-1").attr("disabled", true)
    $("#Invasive-Int-2").attr("disabled", true)
    $("#Invasive-Int-3").attr("disabled", true)
    $("#DOL-Inv-Int").attr("disabled", true)

    $("#Previous-Heart-Surgery-1").attr("disabled", true)
    $("#Previous-Heart-Surgery-2").attr("disabled", true)
    $("#Previous-Heart-Surgery-3").attr("disabled", true)
    $("#DOL-Surg-Int").attr("disabled", true)
    $("#Prev-CV-Intervention").change(function (){
        if ($(this).is(":checked")) {
            $("#Invasive-Int-1").attr("disabled", false)
            $("#Invasive-Int-2").attr("disabled", false)
            $("#Invasive-Int-3").attr("disabled", false)
            $("#DOL-Inv-Int").attr("disabled", false)

            $("#Previous-Heart-Surgery-1").attr("disabled", false)
            $("#Previous-Heart-Surgery-2").attr("disabled", false)
            $("#Previous-Heart-Surgery-3").attr("disabled", false)
            $("#DOL-Surg-Int").attr("disabled", false)
        } else {
            $("#Invasive-Int-1").attr("disabled", true)
            $("#Invasive-Int-2").attr("disabled", true)
            $("#Invasive-Int-3").attr("disabled", true)
            $("#DOL-Inv-Int").attr("disabled", true)

            $("#Previous-Heart-Surgery-1").attr("disabled", true)
            $("#Previous-Heart-Surgery-2").attr("disabled", true)
            $("#Previous-Heart-Surgery-3").attr("disabled", true)
            $("#DOL-Surg-Int").attr("disabled", true)

        }
    });
    // --------- End ----------------
    // medical-history-fill fields
    // GI-history
    // -------- Start ------------
    $("#GI-history-gastric").attr("disabled", true)
    $("#GI-history-gastric-previous-surgery").attr("disabled", true)
    $("#GI-history-gastric-other").attr("disabled", true)
    $("#GI-history").change(function (){
        if ($(this).is(":checked")) {
            $("#GI-history-gastric").attr("disabled", false)
            $("#GI-history-gastric-previous-surgery").attr("disabled", false)
            $("#GI-history-gastric-other").attr("disabled", false)
        } else {
            $("#GI-history-gastric").attr("disabled", true)
            $("#GI-history-gastric-previous-surgery").attr("disabled", true)
            $("#GI-history-gastric-other").attr("disabled", true)

        }
    });
    //RESP-history
    $("#RESP-history-lung-disease").attr("disabled", true)
    $("#RESP-history-asthma").attr("disabled", true)
    $("#RESP-history-COAD").attr("disabled", true)
    $("#RESP-history-emphysema").attr("disabled", true)
    $("#RESP-history").change(function (){
        if ($(this).is(":checked")) {
            $("#RESP-history-lung-disease").attr("disabled", false)
            $("#RESP-history-asthma").attr("disabled", false)
            $("#RESP-history-COAD").attr("disabled", false)
            $("#RESP-history-emphysema").attr("disabled", false)
        } else {
            $("#RESP-history-lung-disease").attr("disabled", true)
            $("#RESP-history-asthma").attr("disabled", true)
            $("#RESP-history-COAD").attr("disabled", true)
            $("#RESP-history-emphysema").attr("disabled", true)

        }
    });

});
