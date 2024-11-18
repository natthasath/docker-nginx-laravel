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
                <span style="font-size: 24px; background-color: #A51931; " class="align-middle text-white ">&nbsp;STEP 3: </span>
                <span style="font-size: 20px;"class="align-middle">&nbsp;กรอกแบบฟอร์มการยื่นขอรับพิจารณารับรองจริยธรรมการวิจัยในมนุษย์</span>
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
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <span style="font-size: 20px;"class="align-middle">&nbsp;อัปโหลดเอกสาร</span>
                    </div>
                    <div class="card-body">

                        <div class="container">
                            <p>แบบฟอร์มที่มี <span style="color:red">*</span> คือ แบบฟอร์มที่จำเป็นต้องนำส่ง</p>
                        </div>

                        <div class="table-responsive">
                            <table class="table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">ลำดับ</th>
                                        <th class="text-center"><i class="fas fa-check"></i></th>
                                        <th class="text-center" style="width: 100px">รหัสเอกสาร</th>
                                        <th class="text-center">รายละเอียด</th>
                                        <th class="text-center">Download</th>
                                        <th class="text-center" >Upload</th>
                                        <th class="text-center">บันทึก</th>
                                        <th class="text-center" style="width: 100px">ลบเอกสาร</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- ประวัติย่อ --}}
                                    <tr>
                                        <td class="text-center">1</td>
                                        {{-- icon check --}}
                                        <td class="text-center">

                                        </td>
                                        {{-- รหัสเอกสาร --}}
                                        <td class="text-center">

                                        </td>
                                        <td>
                                            ประวัติย่อ (CV) ของผู้วิจัยหลักและผู้วิจัยร่วม (ถ้ามี) <span style="color:red">*</span>
                                        </td>
                                        <td class="text-center">
                                            <a href=""><i class="far fa-file-pdf" style="color:red"></i></a>
                                            <a href=""><i class="far fa-file-word" style="color:blue"></i></a>
                                        </td>
                                        <td>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('#actual-btn').change(function(){
                                                        console.log('tammmmmmm');
                                                        var file = $('#actual-btn')[0].files;
                                                        var fileName = document.getElementById("actual-btn").files[0].name;

                                                    });
                                                });
                                            </script>

                                            <input type='file' style="width: 250px" id='file_1'>
                                            {{-- <input type="file" id="actual-btn" hidden accept=".pdf"/>
                                            <label for="actual-btn" style="font-weight: normal !important; margin:0rem; padding: 0rem; cursor: pointer;" title="อัพโหลดไฟล์ pdf">อัพโหลดไฟล์ pdf</label> --}}

                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary" id="btn_submit_1">บันทึก</button>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $("#btn_submit_1").on("click",function(e){
                                                        e.preventDefault();
                                                        var fd = new FormData();
                                                        var files = $('#file_1')[0].files;
                                                        if(files.length > 0 ){
                                                            fd.append('file',files[0]); //ใช้ในการแทรกค่าไฟล์รูปภาพใน element
                                                            $.ajax({
                                                                url:'{{ route("upload") }}', //ให้ระบุชื่อไฟล์ PHP ที่เราจะส่งค่าไป
                                                                type:'post',
                                                                data:fd, //ข้อมูลจาก input ที่ส่งเข้าไปที่ PHP
                                                                contentType: false,
                                                                processData: false,
                                                                success:function(response){ //หากทำงานสำเร็จ จะรับค่ามาจาก JSON หลังจากนั้นก็ให้ทำงานตามที่เรากำหนดได้
                                                                    if(response != 0){
                                                                        alert('Success');
                                                                        // $("#img").attr("src",response);
                                                                        // $('.preview img').show();
                                                                    }else{
                                                                        alert('Failed');
                                                                    }
                                                                }
                                                            });
                                                        }else{
                                                            alert("Please select a file.");
                                                        }
                                                    });
                                                    });
                                            </script>
                                        </td>
                                        <td class="text-center " style="width: 100px">
                                            <button  type="button" class="btn btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>
                                    {{-- โครงการวิจัย --}}
                                    <tr>
                                        <td class="text-center">2</td>
                                        {{-- icon check --}}
                                        <td class="text-center">

                                        </td>
                                        {{-- รหัสเอกสาร --}}
                                        <td class="text-center">

                                        </td>
                                        <td>
                                            โครงการวิจัย/โครงร่างวิทยานิพนธ์ <span style="color:red">*</span>
                                        </td>
                                        <td class="text-center">
                                            <a href=""><i class="far fa-file-pdf" style="color:red"></i></a>
                                            <a href=""><i class="far fa-file-word" style="color:blue"></i></a>
                                        </td>
                                        <td>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('#actual-btn').change(function(){
                                                        console.log('tammmmmmm');
                                                        var file = $('#actual-btn')[0].files;
                                                        var fileName = document.getElementById("actual-btn").files[0].name;

                                                    });
                                                });
                                            </script>
                                            <input type='file' style="width: 250px">
                                            {{-- <input type="file" id="actual-btn" hidden accept=".pdf"/>
                                            <label for="actual-btn" style="font-weight: normal !important; margin:0rem; padding: 0rem; cursor: pointer;">อัพโหลดไฟล์ pdf</label> --}}

                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary">บันทึก</button>
                                        </td>
                                        <td class="text-center " style="width: 100px">
                                            <button  type="button" class="btn btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>
                                    {{-- เอกสารชี้แจงผู้เข้าร่วมโครงการวิจัย --}}
                                    <tr>
                                        <td class="text-center" colspan="7">
                                            <span class="fw-bold">เอกสารชี้แจงผู้เข้าร่วมโครงการวิจัย และหนังสือแสดงความสมัครใจในการเข้าร่วมการวิจัย <br>(กรณีที่มีผู้เข้าร่วมการวิจัย)</span>
                                        </td>
                                    </tr>
                                    {{-- EV-F-08-00 --}}
                                    <tr>
                                        <td rowspan="6" class="align-middle">3</td>
                                        {{-- icon check --}}
                                        <td class="text-center">

                                        </td>
                                        <td class="text-center">EV-F-08-00</td>
                                        <td>
                                            เอกสารชี้แจงผู้เข้าร่วมการวิจัย (อายุ 18 ปีขึ้นไป)
                                        </td>
                                        <td class="text-center">
                                            <a href=""><i class="far fa-file-pdf" style="color:red"></i></a>
                                            <a href=""><i class="far fa-file-word" style="color:blue"></i></a>
                                        </td>
                                        <td>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('#actual-btn').change(function(){
                                                        console.log('tammmmmmm');
                                                        var file = $('#actual-btn')[0].files;
                                                        var fileName = document.getElementById("actual-btn").files[0].name;

                                                    });
                                                });
                                            </script>
                                            <input type='file' style="width: 250px">
                                            {{-- <input type="file" id="actual-btn" hidden accept=".pdf"/>
                                            <label for="actual-btn" style="font-weight: normal !important; margin:0rem; padding: 0rem; cursor: pointer;">อัพโหลดไฟล์ pdf</label> --}}

                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary">บันทึก</button>
                                        </td>
                                        <td class="text-center ">
                                            <button  type="button" class="btn btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>
                                    {{-- EV-F-08-01 --}}
                                    <tr>
                                        {{-- icon check --}}
                                        <td class="text-center">

                                        </td>
                                        <td class="text-center">EV-F-08-01</td>
                                        <td>หนังสือแสดงความสมัครใจในการเข้าร่วมการวิจัย (อายุ 18 ปีขึ้นไป) </td>
                                        <td class="text-center">
                                            <a href=""><i class="far fa-file-pdf" style="color:red"></i></a>
                                            <a href=""><i class="far fa-file-word" style="color:blue"></i></a>
                                        </td>
                                        <td>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('#actual-btn').change(function(){
                                                        console.log('tammmmmmm');
                                                        var file = $('#actual-btn')[0].files;
                                                        var fileName = document.getElementById("actual-btn").files[0].name;

                                                    });
                                                });
                                            </script>
                                            <input type='file' style="width: 250px">
                                            {{-- <input type="file" id="actual-btn" hidden accept=".pdf"/>
                                            <label for="actual-btn" style="font-weight: normal !important; margin:0rem; padding: 0rem; cursor: pointer;">อัพโหลดไฟล์ pdf</label> --}}

                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary">บันทึก</button>
                                        </td>
                                        <td class="text-center ">
                                            <button  type="button" class="btn btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>
                                    {{-- EV-F-08-02 --}}
                                    <tr>
                                        {{-- icon check --}}
                                        <td class="text-center">

                                        </td>
                                        <td class="text-center">EV-F-08-02</td>
                                        <td>เอกสารชี้แจงผู้เข้าร่วมการวิจัยสำหรับเด็ก (อายุต่ำกว่า 18 ปี)</td>
                                        <td class="text-center">
                                            <a href=""><i class="far fa-file-pdf" style="color:red"></i></a>
                                            <a href=""><i class="far fa-file-word" style="color:blue"></i></a>
                                        </td>
                                        <td>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('#actual-btn').change(function(){
                                                        console.log('tammmmmmm');
                                                        var file = $('#actual-btn')[0].files;
                                                        var fileName = document.getElementById("actual-btn").files[0].name;

                                                    });
                                                });
                                            </script>
                                            <input type='file' style="width: 250px">
                                            {{-- <input type="file" id="actual-btn" hidden accept=".pdf"/>
                                            <label for="actual-btn" style="font-weight: normal !important; margin:0rem; padding: 0rem; cursor: pointer;">อัพโหลดไฟล์ pdf</label> --}}

                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary">บันทึก</button>
                                        </td>
                                        <td class="text-center ">
                                            <button  type="button" class="btn btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>
                                    {{-- EV-F-08-03 --}}
                                    <tr>
                                        {{-- icon check --}}
                                        <td class="text-center">

                                        </td>
                                        <td class="text-center">EV-F-08-03</td>
                                        <td>เอกสารชี้แจงผู้เข้าร่วมการวิจัยสำหรับผู้ปกครอง (เด็กอายุต่ำกว่า 18 ปี) </td>
                                        <td class="text-center">
                                            <a href=""><i class="far fa-file-pdf" style="color:red"></i></a>
                                            <a href=""><i class="far fa-file-word" style="color:blue"></i></a>
                                        </td>
                                        <td>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('#actual-btn').change(function(){
                                                        console.log('tammmmmmm');
                                                        var file = $('#actual-btn')[0].files;
                                                        var fileName = document.getElementById("actual-btn").files[0].name;

                                                    });
                                                });
                                            </script>
                                            <input type='file' style="width: 250px">
                                            {{-- <input type="file" id="actual-btn" hidden accept=".pdf"/>
                                            <label for="actual-btn" style="font-weight: normal !important; margin:0rem; padding: 0rem; cursor: pointer;">อัพโหลดไฟล์ pdf</label> --}}

                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary">บันทึก</button>
                                        </td>
                                        <td class="text-center ">
                                            <button  type="button" class="btn btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>
                                    {{-- EV-F-08-04 --}}
                                    <tr>
                                        {{-- icon check --}}
                                        <td class="text-center">

                                        </td>
                                        <td class="text-center">EV-F-08-04</td>
                                        <td>หนังสือแสดงความสมัครใจในการเข้าร่วมการวิจัยสำหรับเด็ก (อายุต่ำกว่า 18 ปี)</td>
                                        <td class="text-center">
                                            <a href=""><i class="far fa-file-pdf" style="color:red"></i></a>
                                            <a href=""><i class="far fa-file-word" style="color:blue"></i></a>
                                        </td>
                                        <td>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('#actual-btn').change(function(){
                                                        console.log('tammmmmmm');
                                                        var file = $('#actual-btn')[0].files;
                                                        var fileName = document.getElementById("actual-btn").files[0].name;

                                                    });
                                                });
                                            </script>
                                            <input type='file' style="width: 250px">
                                            {{-- <input type="file" id="actual-btn" hidden accept=".pdf"/>
                                            <label for="actual-btn" style="font-weight: normal !important; margin:0rem; padding: 0rem; cursor: pointer;">อัพโหลดไฟล์ pdf</label> --}}

                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary">บันทึก</button>
                                        </td>
                                        <td class="text-center ">
                                            <button  type="button" class="btn btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>
                                    {{-- EV-F-08-05 --}}
                                    <tr>
                                        {{-- icon check --}}
                                        <td class="text-center">

                                        </td>
                                        <td class="text-center">EV-F-08-05</td>
                                        <td>แบบฟอร์มขอยกเว้นการขอความยินยอมเป็นลายลักษณ์อักษร (ถ้ามี)</td>
                                        <td class="text-center">
                                            <a href=""><i class="far fa-file-pdf" style="color:red"></i></a>
                                            <a href=""><i class="far fa-file-word" style="color:blue"></i></a>
                                        </td>
                                        <td>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('#actual-btn').change(function(){
                                                        console.log('tammmmmmm');
                                                        var file = $('#actual-btn')[0].files;
                                                        var fileName = document.getElementById("actual-btn").files[0].name;

                                                    });
                                                });
                                            </script>
                                            <input type='file' style="width: 250px">
                                            {{-- <input type="file" id="actual-btn" hidden accept=".pdf"/>
                                            <label for="actual-btn" style="font-weight: normal !important; margin:0rem; padding: 0rem; cursor: pointer;">อัพโหลดไฟล์ pdf</label> --}}

                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary">บันทึก</button>
                                        </td>
                                        <td class="text-center ">
                                            <button  type="button" class="btn btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>
                                    {{-- เครื่องมือที่ใช้ในการเก็บข้อมูล --}}
                                    <tr>
                                        <td class="text-center" colspan="7">
                                            <span class="fw-bold">เครื่องมือที่ใช้ในการเก็บข้อมูล</span>
                                        </td>
                                    </tr>
                                    {{-- แบบสอบถาม --}}
                                    <tr>
                                        <td rowspan="5"  class="align-middle">4</td>
                                        {{-- icon check --}}
                                        <td class="text-center">

                                        </td>
                                        <td colspan="3">แบบสอบถาม</div>
                                        </td>
                                        <td>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('#actual-btn').change(function(){
                                                        console.log('tammmmmmm');
                                                        var file = $('#actual-btn')[0].files;
                                                        var fileName = document.getElementById("actual-btn").files[0].name;

                                                    });
                                                });
                                            </script>
                                            <input type='file' style="width: 250px" id="attach_survey1">
                                            {{-- <input type="file" id="actual-btn" hidden accept=".pdf"/>
                                            <label for="actual-btn" style="font-weight: normal !important; margin:0rem; padding: 0rem; cursor: pointer;">อัพโหลดไฟล์ pdf</label> --}}

                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary">บันทึก</button>
                                        </td>
                                        <td class="text-center ">
                                            <button  type="button" class="btn btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>
                                    {{-- แบบสัมภาษณ์ --}}
                                    <tr>
                                        {{-- icon check --}}
                                        <td class="text-center">

                                        </td>
                                        <td colspan="3">แบบสัมภาษณ์</div>
                                        </td>
                                        <td>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('#actual-btn').change(function(){
                                                        console.log('tammmmmmm');
                                                        var file = $('#actual-btn')[0].files;
                                                        var fileName = document.getElementById("actual-btn").files[0].name;

                                                    });
                                                });
                                            </script>
                                            <input type='file' style="width: 250px" id="attach_survey2">
                                            {{-- <input type="file" id="actual-btn" hidden accept=".pdf"/>
                                            <label for="actual-btn" style="font-weight: normal !important; margin:0rem; padding: 0rem; cursor: pointer;">อัพโหลดไฟล์ pdf</label> --}}

                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary">บันทึก</button>
                                        </td>
                                        <td class="text-center ">
                                            <button  type="button" class="btn btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>
                                    {{-- แบบสนทนากลุ่ม --}}
                                    <tr>
                                        {{-- icon check --}}
                                        <td class="text-center">

                                        </td>
                                        <td colspan="3">แบบสนทนากลุ่ม</div>
                                        </td>
                                        <td>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('#actual-btn').change(function(){
                                                        console.log('tammmmmmm');
                                                        var file = $('#actual-btn')[0].files;
                                                        var fileName = document.getElementById("actual-btn").files[0].name;

                                                    });
                                                });
                                            </script>
                                            <input type='file' style="width: 250px" id="attach_survey3">
                                            {{-- <input type="file" id="actual-btn" hidden accept=".pdf"/>
                                            <label for="actual-btn" style="font-weight: normal !important; margin:0rem; padding: 0rem; cursor: pointer;">อัพโหลดไฟล์ pdf</label> --}}

                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary">บันทึก</button>
                                        </td>
                                        <td class="text-center ">
                                            <button  type="button" class="btn btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>

                                    {{-- แนวทางการสัมภาษณ์หรือสังเกต --}}
                                    <tr>
                                        {{-- icon check --}}
                                        <td class="text-center">

                                        </td>
                                        <td colspan="3">แนวทางการสัมภาษณ์หรือสังเกต</td>
                                        <td>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('#actual-btn').change(function(){
                                                        console.log('tammmmmmm');
                                                        var file = $('#actual-btn')[0].files;
                                                        var fileName = document.getElementById("actual-btn").files[0].name;

                                                    });
                                                });
                                            </script>
                                            <input type='file' style="width: 250px" id="attach_survey4">
                                            {{-- <input type="file" id="actual-btn" hidden accept=".pdf"/>
                                            <label for="actual-btn" style="font-weight: normal !important; margin:0rem; padding: 0rem; cursor: pointer;">อัพโหลดไฟล์ pdf</label> --}}

                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary">บันทึก</button>
                                        </td>
                                        <td class="text-center ">
                                            <button  type="button" class="btn btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>
                                    {{-- อื่นๆ ระบุ --}}
                                    <tr>
                                        {{-- icon check --}}
                                        <td class="text-center">

                                        </td>
                                        <td colspan="3">
                                            <div class="form-check mb-2 form-check-inline">
                                                <label class="form-check-label col-sm-3" for="">อื่นๆ ระบุ</label>
                                                <input type="text" class="form-control" name="" id="input_other">
                                            </div>
                                        </td>
                                        <td>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('#actual-btn').change(function(){
                                                        console.log('tammmmmmm');
                                                        var file = $('#actual-btn')[0].files;
                                                        var fileName = document.getElementById("actual-btn").files[0].name;

                                                    });
                                                });
                                            </script>
                                            <input type='file' style="width: 250px" id="attach_survey5">
                                            {{-- <input type="file" id="actual-btn" hidden accept=".pdf"/>
                                            <label for="actual-btn" style="font-weight: normal !important; margin:0rem; padding: 0rem; cursor: pointer;">อัพโหลดไฟล์ pdf</label> --}}

                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary">บันทึก</button>
                                        </td>
                                        <td class="text-center ">
                                            <button  type="button" class="btn btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        {{-- icon check --}}
                                        <td class="text-center">

                                        </td>
                                        <td colspan="3">
                                            เอกสารหรือสื่ออื่น ๆ ที่ใช้ในการประชาสัมพันธ์โครงการวิจัย (ถ้ามี)
                                        </td>
                                        <td>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('#actual-btn').change(function(){
                                                        console.log('tammmmmmm');
                                                        var file = $('#actual-btn')[0].files;
                                                        var fileName = document.getElementById("actual-btn").files[0].name;

                                                    });
                                                });
                                            </script>
                                            <input type='file' style="width: 250px">
                                            {{-- <input type="file" id="actual-btn" hidden accept=".pdf"/>
                                            <label for="actual-btn" style="font-weight: normal !important; margin:0rem; padding: 0rem; cursor: pointer;">อัพโหลดไฟล์ pdf</label> --}}

                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary">บันทึก</button>
                                        </td>
                                        <td class="text-center ">
                                            <button  type="button" class="btn btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        {{-- icon check --}}
                                        <td class="text-center">

                                        </td>
                                        <td colspan="3">
                                            เอกสารรับรองการผ่านการอบรมด้านจริยธรรมการวิจัยในมนุษย์ (ถ้ามี) สำเนา
                                        </td>
                                        <td>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('#actual-btn').change(function(){
                                                        console.log('tammmmmmm');
                                                        var file = $('#actual-btn')[0].files;
                                                        var fileName = document.getElementById("actual-btn").files[0].name;

                                                    });
                                                });
                                            </script>
                                            <input type='file' style="width: 250px">
                                            {{-- <input type="file" id="actual-btn" hidden accept=".pdf"/>
                                            <label for="actual-btn" style="font-weight: normal !important; margin:0rem; padding: 0rem; cursor: pointer;">อัพโหลดไฟล์ pdf</label> --}}

                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary">บันทึก</button>
                                        </td>
                                        <td class="text-center ">
                                            <button  type="button" class="btn btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        {{-- icon check --}}
                                        <td class="text-center">

                                        </td>
                                        <td colspan="3">
                                            เอกสารแสดงการได้รับอนุญาตให้ใช้ข้อมูลจากเจ้าของข้อมูล กรณีใช้ข้อมูลทุติยภูมิ (ถ้ามี)
                                        </td>

                                        <td>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('#actual-btn').change(function(){
                                                        console.log('tammmmmmm');
                                                        var file = $('#actual-btn')[0].files;
                                                        var fileName = document.getElementById("actual-btn").files[0].name;

                                                    });
                                                });
                                            </script>
                                            <input type='file' style="width: 250px">
                                            {{-- <input type="file" id="actual-btn" hidden accept=".pdf"/>
                                            <label for="actual-btn" style="font-weight: normal !important; margin:0rem; padding: 0rem; cursor: pointer;">อัพโหลดไฟล์ pdf</label> --}}

                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary">บันทึก</button>
                                        </td>
                                        <td class="text-center ">
                                            <button  type="button" class="btn btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8 text-center">
                <button type="button" class="btn btn-primary btn-lg" style="background-color:#A51931; border-color: #A51931;">Preview</button>
            </div>
        </div>
        <div class="row justify-content-center mt-5 mx-0 px-2" >
            <div class="col-12">
                <hr style="height:5px;border-width:0;color:gray;background-color:#A51931">
            </div>
        </div>
        <div class="row justify-content-center mt-5 mx-0 px-2" >
            <div class="col-6 ">
                <a class=" float-left" href="{{ route('step_two') }}">
                    <span style="font-size: 40px" class="align-middle fas fa-backward"></span>&nbsp;
                    <span class="align-middle">STEP 2 : กรอกแบบฟอร์มการยื่นขอรับพิจารณาฯ</span>
                </a>
            </div>
            <div class="col-6 ">
                <a class=" float-right" href="{{ route('step_four') }}">
                    <span class="align-middle">STEP 4 : หนังสือนำส่งโครงการวิจัยเพื่อขอรับการพิจารณา</span>&nbsp;
                    <span style="font-size: 40px" class="align-middle fas fa-forward"></span>
                </a>
            </div>
        </div>

    </div>
@endsection
