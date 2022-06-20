$(document).ready(function (){
    

    

    //  for cass areas
    $(".cass").attr("disabled", true);
    $("#cassCheck").change(function () {
        if ($(this).is(":checked")) {
            $(".cass").attr("disabled", false);
        } else {
            $(".cass").attr("disabled", true);
        }
    });
    // 1st data
    $(".1st-data").attr("disabled", true);
    $(".1st").change(function () {
        if ($(this).is(":checked")) {
            $(".1st-data").attr("disabled", false);
        } else {
            $(".1st-data").attr("disabled", true);
        }
    });
   
    // 2nd data
    $(".2nd-data").attr("disabled", true);
    $(".2nd").change(function () {
        if ($(this).is(":checked")) {
            $(".2nd-data").attr("disabled", false);
        } else {
            $(".2nd-data").attr("disabled", true);
        }
    });

    // 3rd data
    $(".3rd-data").attr("disabled", true);
    $(".3rd").change(function () {
        if ($(this).is(":checked")) {
            $(".3rd-data").attr("disabled", false);
        } else {
            $(".3rd-data").attr("disabled", true);
        }
    });

    // 4th data
    $(".4th-data").attr("disabled", true);
    $(".4th").change(function () {
        if ($(this).is(":checked")) {
            $(".4th-data").attr("disabled", false);
        } else {
            $(".4th-data").attr("disabled", true);
        }
    });

    // 5th data
    $(".5th-data").attr("disabled", true);
    $(".5th").change(function () {
        if ($(this).is(":checked")) {
            $(".5th-data").attr("disabled", false);
        } else {
            $(".5th-data").attr("disabled", true);
        }
    });

    // 6th data
    $(".6th-data").attr("disabled", true);
    $(".6th").change(function () {
        if ($(this).is(":checked")) {
            $(".6th-data").attr("disabled", false);
        } else {
            $(".6th-data").attr("disabled", true);
        }
    });

    // aortic-op
    $(".aortic-op-data").attr("disabled", true);
    $(".aortic-op").change(function () {
        if ($(this).is(":checked")) {
            $(".aortic-op-data").attr("disabled", false);
        } else {
            $(".aortic-op-data").attr("disabled", true);
        }
    });
    
     // mitral-op
     $(".mitral-op-data").attr("disabled", true);
     $(".mitral-op").change(function () {
         if ($(this).is(":checked")) {
             $(".mitral-op-data").attr("disabled", false);
         } else {
             $(".mitral-op-data").attr("disabled", true);
         }
     });

      // aortic-op
    $(".tricus-op-data").attr("disabled", true);
    $(".tricus-op").change(function () {
        if ($(this).is(":checked")) {
            $(".tricus-op-data").attr("disabled", false);
        } else {
            $(".tricus-op-data").attr("disabled", true);
        }
    });

     // aortic-op
     
     $(".pulm-op-data").attr("disabled", true);
     $(".pulm-op").change(function () {
         if ($(this).is(":checked")) {
             $(".pulm-op-data").attr("disabled", false);
         } else {
             $(".pulm-op-data").attr("disabled", true);
         }
     });

    $(".DesandingAroticData").attr("disabled", true);
    $("#DesandingAroticCheck").change(function () {
        if ($(this).is(":checked")) {
            $(".DesandingAroticData").attr("disabled", false);
        } else {
            $(".DesandingAroticData").attr("disabled", true);
        }
    });

    $(".cbpData").attr("disabled", true);
    $("#cbpCheck").change(function () {
        if ($(this).is(":checked")) {
            $(".cbpData").attr("disabled", false);
        } else {
            $(".cbpData").attr("disabled", true);
        }
    });

    $(".cardioplegiaData").attr("disabled", true);
    $("#cardioplegiaCheck").change(function () {
        if ($(this).is(":checked")) {
            $(".cardioplegiaData").attr("disabled", false);
        } else {
            $(".cardioplegiaData").attr("disabled", true);
        }
    });

});
