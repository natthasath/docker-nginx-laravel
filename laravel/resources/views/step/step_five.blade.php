@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="row justify-content-center pt-5 pb-2">
            <div class="col-12">
                <a style="font-size: 25px">Dashboard</a>
            </div>
        </div>
        <div class="row justify-content-center my-2" >
            <div class="col-9" style="background-color: #FFFAFA">
                <span style="font-size: 24px; background-color: #A51931; " class="align-middle text-white ">&nbsp;STEP 5: </span>
                <span style="font-size: 20px;"class="align-middle">&nbsp;ตัวอย่างรายละเอียดภาพรวมก่อนการบันทึกข้อมูล</span>
            </div>
            <div class="col-3 align-self-center w-100" style="background-color: #FFFAFA">
                <a href="" style="font-size: 20px;" class="align-middle">คำแนะนำ</a>&nbsp;
                <span style="font-size: 24px;" class="align-middle" >|</span>&nbsp;
                <a style="font-size: 20px;" class="align-middle">คู่มือ</a>&nbsp;
                <span style="font-size: 24px;" class="align-middle">|</span>&nbsp;
                <a style="font-size: 20px;" class="align-middle">คำอธิบาย</a>&nbsp;
            </div>
        </div>
        <div class="row justify-content-center d-flex" >
            {{-- <div class="col-12">

            </div> --}}
            <div class="container">
                <div class="card" style="padding-left: 64px;padding-right: 64px; padding-top: 48px;">
                    <div class="card-body">
                        <div class="container">
                            <h6>ข้อสัญญา:</h6>
                            <div class="container">
                                <li>
                                    ข้าพเจ้าในฐานะผู้วิจัยได้ลงชื่อไว้ในเอกสารนี้และคณะผู้วิจัยดังมีรายนามข้างต้นจะดำเนินการวิจัยตามที่ระบุไว้ในโครงการวิจัยฉบับที่ได้รับการรับรองจากคณะกรรมการจริยธรรมการวิจัยในมนุษย์สถาบันบัณฑิตพัฒนบริหารศาสตร์และได้ขอความยินยอมจากผู้เข้าร่วมการวิจัยอย่างถูกต้องตามหลักจริยธรรมการวิจัยในมนุษย์ ดังที่ได้ระบุไว้ในแบบเสนอโครงการวิจัยฯ
                                    <br>โดยจะให้ความเคารพในสิทธิและคำนึงถึงสวัสดิภาพของผู้เข้าร่วมการวิจัยเป็นสำคัญ
                                </li>
                                <li>
                                    ข้าพเจ้าขอรับรองว่าจะเริ่มทำการศึกษาวิจัยภายหลังจากได้รับการรับรองจากคณะกรรมการจริยธรรมการวิจัยในมนุษย์ สถาบันบัณฑิตพัฒนบริหารศาสตร์ เรียบร้อยแล้วเท่านั้น​
                                </li>
                                <li>
                                    หากมีข้อมูลที่คณะกรรมการจริยธรรมการวิจัยในมนุษย์ สถาบันบัณฑิตพัฒนบริหารศาสตร์เสนอให้ปรับแก้ไข ข้าพเจ้าจะแจ้งให้ผู้วิจัยร่วมทราบด้วย
                                </li>
                                <li>
                                    ข้าพเจ้าขอรับรองว่าข้อความข้างต้นเป็นความจริง และเข้าใจความหมายโดยชัดเจนทุกประการ
                                </li>
                            </div>
                        </div>
                        <div class="pt-5 form-group">
                            <center>
                                <button type="button" class="btn btn-primary bnt-block btn-lg" style="background-color: #2D2A4A;border-color: #2D2A4A;">ยืนยัน</button>
                                <button type="button" class="btn btn-primary bnt-block btn-lg" style="background-color:#A51931; border-color: #A51931;">ย้อนกลับ</button>
                            </center>


                        </div>


                    </div>
                </div>

            </div>
        </div>

        <div class="row justify-content-center mt-5 mx-0 px-2" >
            <div class="col-12">
                <hr style="height:5px;border-width:0;color:gray;background-color:#A51931">
            </div>
        </div>
        <div class="row justify-content-center mt-5 mx-0 px-2" >
            <div class="col-6 ">
                <a class=" float-left" href="{{ route('step_four') }}">
                    <span style="font-size: 40px" class="align-middle fas fa-backward"></span>&nbsp;
                    <span class="align-middle">STEP 4 : กรอกแบบฟอร์มการยื่นขอรับพิจารณาฯ</span>
                </a>
            </div>
            <div class="col-6 ">
                <a class=" float-right" href="{{ route('step_five') }}">
                    <span class="align-middle">STEP 6 : Upload แบบฟอร์มและเอกสารเพิ่มเติม</span>&nbsp;
                    <span style="font-size: 40px" class="align-middle fas fa-forward"></span>
                </a>
            </div>
        </div>

    </div>
@endsection
