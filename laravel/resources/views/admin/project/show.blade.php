@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <br>
        <div class="row justify-content-center py-2">
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: #2D2A4A">
                        ชื่อโครงการ หรือ รหัสโครงการ
                    </div>
                    <div class="card-body">
                        preview generate pdf
                    </div>
                    <br>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">ลำดับ</th>
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
                                        <td class="text-center">

                                        </td>
                                        <td>
                                            ประวัติย่อ (CV) ของผู้วิจัยหลักและผู้วิจัยร่วม (ถ้ามี) <span style="color:red">*</span>
                                        </td>
                                        <td class="text-center">
                                            <a href=""><i class="far fa-file-pdf" style="color:red"></i></a>
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
                                            <label for="actual-btn" style="font-weight: normal !important; margin:0rem; padding: 0rem; cursor: pointer;" title="อัพโหลดไฟล์ pdf">อัพโหลดไฟล์ pdf</label> --}}

                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary">บันทึก</button>
                                        </td>
                                        <td class="text-center " style="width: 100px">
                                            <button  type="button" class="btn btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>
                                    {{-- โครงการวิจัย --}}
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">

                                        </td>
                                        <td>
                                            โครงการวิจัย/โครงร่างวิทยานิพนธ์ <span style="color:red">*</span>
                                        </td>
                                        <td class="text-center">
                                            <a href=""><i class="far fa-file-pdf" style="color:red"></i></a>
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
                                        <td class="text-center">EV-F-08-00</td>
                                        <td>
                                            เอกสารชี้แจงผู้เข้าร่วมการวิจัย (อายุ 18 ปีขึ้นไป)
                                        </td>
                                        <td class="text-center">
                                            <a href=""><i class="far fa-file-pdf" style="color:red"></i></a>
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
                                        <td class="text-center">EV-F-08-01</td>
                                        <td>เอกสารชี้แจงผู้เข้าร่วมการวิจัยสำหรับเด็ก (อายุต่ำกว่า 18 ปี)</td>
                                        <td class="text-center">
                                            <a href=""><i class="far fa-file-pdf" style="color:red"></i></a>
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
                                        <td class="text-center">EV-F-08-02</td>
                                        <td>เอกสารชี้แจงผู้เข้าร่วมการวิจัยสำหรับเด็ก (อายุต่ำกว่า 18 ปี)</td>
                                        <td class="text-center">
                                            <a href=""><i class="far fa-file-pdf" style="color:red"></i></a>
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
                                        <td class="text-center">EV-F-08-03</td>
                                        <td>เอกสารชี้แจงผู้เข้าร่วมการวิจัยสำหรับเด็ก (อายุต่ำกว่า 18 ปี)</td>
                                        <td class="text-center">
                                            <a href=""><i class="far fa-file-pdf" style="color:red"></i></a>
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
                                        <td class="text-center">EV-F-08-04</td>
                                        <td>เอกสารชี้แจงผู้เข้าร่วมการวิจัยสำหรับเด็ก (อายุต่ำกว่า 18 ปี)</td>
                                        <td class="text-center">
                                            <a href=""><i class="far fa-file-pdf" style="color:red"></i></a>
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
                                        <td class="text-center">EV-F-08-05</td>
                                        <td>เอกสารชี้แจงผู้เข้าร่วมการวิจัยสำหรับเด็ก (อายุต่ำกว่า 18 ปี)</td>
                                        <td class="text-center">
                                            <a href=""><i class="far fa-file-pdf" style="color:red"></i></a>
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
                                        <td rowspan="4"  class="align-middle">4</td>
                                        <td colspan="3">
                                            <div class="form-check mb-2">
                                                แบบสอบถาม
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
                                    {{-- แบบสัมภาษณ์ --}}
                                    <tr>
                                        <td colspan="3">
                                            <div class="form-check mb-2">
                                                แบบสัมภาษณ์
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
                                    {{-- แบบสนทนากลุ่ม --}}
                                    <tr>
                                        <td colspan="3">
                                            <div class="form-check mb-2">
                                                แบบสนทนากลุ่ม
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
                                    {{-- แนวทางการสัมภาษณ์หรือสังเกต --}}
                                    <tr>
                                        <td colspan="3">
                                            <div class="form-check mb-2">
                                                แนวทางการสัมภาษณ์หรือสังเกต
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
                                        <td class="text-center">5</td>
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
        <div class="row justify-content-center py-2">
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: #2D2A4A">
                        Comment
                    </div>
                    <div class="card-body" style="font-family: 'Graphik', sans-serif !important;">
                        <form>
                            {{-- name --}}
                            <div class="form-group">
                                {{-- <label for="" class="control-label">comment : </label>&nbsp; --}}
                                {{-- <input type="text" name="" id="" class="form-control"  placeholder=""> --}}
                                <textarea class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-sm" type="button" style="background-color:#A51931; border-color: #A51931;">
                                    <i class="far fa-save"></i>&nbsp;บันทึก
                                </button>
                                <button class="btn btn-secondary btn-sm" type="reset" >
                                    ยกเลิก
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
