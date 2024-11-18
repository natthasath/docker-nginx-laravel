$(function (){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // ข้อ 8
    $('#radio_main1').on('click',function(event){
        console.log('11111');
        $("input[name='radio2']:checked").prop("checked", false);
    });
    $('#radio_main2').on('click',function(event){
        console.log('2222');
        $("input[name='radio2']:checked").prop("checked", false);

    });
    $('#radio_main3').on('click',function(event){
        console.log('33333');
        $("input[name='radio2']:checked").prop("checked", false);
    });

    // ข้อ 9
    $('#add_people').on('click',function(event){
        var num = this.getAttribute('data-count');
        console.log(num);
        $('#main_add').append(
            "<div class='containter form-group mx-2 pt-3' id="+num+">"+
                "<div class='container form-group mx-2'>"+
                    "<div class='form-group row'>"+
                        "<label for='' class='col-sm-2 control-label'>"+num+") ชื่อ (ภาษาไทย) : </label>"+
                        "<div class='col-sm-10'>"+
                            "<input type='text' name='' id='' class='form-control'  placeholder=''>"+
                        "</div>"+
                    "</div>"+
                "</div>"+
                "<div class='container form-group mx-2'>"+
                    "<div class='form-group row'>"+
                        "<label for='' class='col-2 control-label'>&emsp;ชื่อ (ภาษาอังกฤษ) : </label>"+
                        "<div class='col-sm-10'>"+
                            "<input type='text' name='' id='' class='form-control'  placeholder=''>"+
                        "</div>"+
                    "</div>"+
                "</div>"+
                "<div class='container form-group mx-2'>"+
                    "<div class='form-group row'>"+
                        "<div class='col'>"+
                            "<div class='row'>"+
                                "<label for='' class='col-sm-5 control-label'>&emsp;หมายเลขโทรศัพท์มือถือ : </label>"+
                                "<div class='col-sm-7'>"+
                                    "<input type='text' name='' id='' class='d-flex form-control'  placeholder=''>"+
                                "</div>"+
                            "</div>"+
                        "</div>"+
                        "<div class='col'>"+
                            "<div class='row'>"+
                                "<label for='' class='col-sm-2 control-label'>อีเมล : </label>"+
                                "<div class='col-sm-10'>"+
                                    "<input type='text' name='' id='' class='d-flex form-control'  placeholder=''>"+
                                "</div>"+
                            "</div>"+
                        "</div>"+
                    "</div>"+
                "</div>"+
            "</div>"
        );
        num++;
        this.setAttribute('data-count',num);
        // var num = this.getAttribute('data-count');
        console.log(num);
        if(num==13){
            this.setAttribute('disabled','true');
        }
    });

    // ข้อ 12.1 1)
    $('#check_1').on('click',function(event){
        var check1 = document.getElementById('check_1');
        console.log(this.checked);
        if(check1.checked == true){
            $("#input_other1").attr("disabled", false);
        }else{
            $("#input_other1").attr("disabled", true);
        }
    });

    // ข้อ 12.1 2)
    $('#check_2').on('click',function(event){
        var check1 = document.getElementById('check_2');
        console.log(this.checked);
        if(check1.checked == true){
            $("#input_other2").attr("disabled", false);
        }else{
            $("#input_other2").attr("disabled", true);
        }
    });

    // ข้อ 12.8
    $('#check_3').on('click',function(event){
        var check1 = document.getElementById('check_3');
        console.log(this.checked);
        if(check1.checked == true){
            $("#input_other3").attr("disabled", false);
        }else{
            $("#input_other3").attr("disabled", true);
        }
    });

    // ข้อ 12.11
    $('#month1_min, #month1_max').on('change', function(){
        $('#month1_max').attr('min', $('#month1_min').val());
    });

    // ข้อ 12.12
    $('#month2_min, #month2_max').on('change', function(){
        $('#month2_max').attr('min', $('#month2_min').val());
    });

    // ข้อ 20
    $('#check_4').on('click',function(event){
        var check1 = document.getElementById('check_4');
        console.log(this.checked);
        if(check1.checked == true){
            $("#input_other4").attr("disabled", false);
        }else{
            $("#input_other4").attr("disabled", true);
        }
    });
});

