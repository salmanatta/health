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
   
    // arotic data
    $(".arotic-data").attr("disabled", true);
    $(".arotic").change(function () {
        if ($(this).is(":checked")) {
            $(".arotic-data").attr("disabled", false);
        } else {
            $(".arotic-data").attr("disabled", true);
        }
    });
    // mitral data 
    $(".mitral-data").attr("disabled", true);
    $(".mitral").change(function () {
        if ($(this).is(":checked")) {
            $(".mitral-data").attr("disabled", false);
        } else {
            $(".mitral-data").attr("disabled", true);
        }
    });
    // tricpusid data
    $(".tricupsid-data").attr("disabled", true);
    $(".tricupsid").change(function () {
        if ($(this).is(":checked")) {
            $(".tricupsid-data").attr("disabled", false);
        } else {
            $(".tricupsid-data").attr("disabled", true);
        }
    });
    // pulmonary data
    $(".pulmonary-data").attr("disabled", true);
    $(".pulmonary").change(function () {
        if ($(this).is(":checked")) {
            $(".pulmonary-data").attr("disabled", false);
        } else {
            $(".pulmonary-data").attr("disabled", true);
        }
    });
    
    
});
