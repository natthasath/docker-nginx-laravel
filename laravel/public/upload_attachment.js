$(function (){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#check_survey4').on('click',function(event){
        var check1 = document.getElementById('check_survey4');
        console.log(this.checked);
        if(check1.checked == true){
            $("#input_other").attr("disabled", false);
            $("#attach_survey5").attr("disabled", false);
        }else{
            $("#input_other").attr("disabled", true);
            $("#attach_survey5").attr("disabled", true);
        }
    });
    $('#check_survey5').on('click',function(event){
        var check1 = document.getElementById('check_survey5');
        console.log(this.checked);
        if(check1.checked == true){
            $("#input_other").attr("disabled", false);
            $("#attach_survey5").attr("disabled", false);
        }else{
            $("#input_other").attr("disabled", true);
            $("#attach_survey5").attr("disabled", true);
        }
    });
});

