@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center d-flex pt-3" >
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <span style="font-size: 20px;"class="align-middle">&nbsp;อัพเดทแบบฟอร์ม</span>
                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <table class="table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 100px">รหัสเอกสาร</th>
                                        <th class="text-center">รายละเอียด</th>
                                        <th class="text-center">Download</th>
                                        <th class="text-center" >Upload</th>
                                        <th class="text-center">บันทึก</th>
                                        <th class="text-center" style="width: 100px">ลบเอกสาร</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- EV-F-08-00 pdf --}}
                                    <tr>
                                        <td rowspan="2" class="text-center">EV-F-08-00</td>
                                        <td rowspan="2">
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
                                    {{-- EV-F-08-00 word --}}
                                    <tr>
                                        <td class="text-center">
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
                                    {{-- EV-F-08-01 pdf --}}
                                    <tr>
                                        <td rowspan="2" class="text-center">EV-F-08-01</td>
                                        <td rowspan="2">
                                            หนังสือแสดงความสมัครใจในการเข้าร่วมการวิจัย (อายุ 18 ปีขึ้นไป) </td>
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
                                    {{-- EV-F-08-01 word --}}
                                    <tr>
                                        <td class="text-center">
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
                                        <td rowspan="2" class="text-center">EV-F-08-02</td>
                                        <td rowspan="2">
                                            เอกสารชี้แจงผู้เข้าร่วมการวิจัยสำหรับเด็ก (อายุต่ำกว่า 18 ปี)</td>
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
                                        <td class="text-center">
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
                                        <td rowspan="2" class="text-center">EV-F-08-03</td>
                                        <td rowspan="2">
                                            เอกสารชี้แจงผู้เข้าร่วมการวิจัยสำหรับผู้ปกครอง (เด็กอายุต่ำกว่า 18 ปี) </td>
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
                                        <td class="text-center">
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
                                        <td rowspan="2" class="text-center">EV-F-08-04</td>
                                        <td rowspan="2">
                                            หนังสือแสดงความสมัครใจในการเข้าร่วมการวิจัยสำหรับเด็ก (อายุต่ำกว่า 18 ปี)
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
                                    {{-- EV-F-08-04 --}}
                                    <tr>
                                        <td class="text-center">
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
                                        <td rowspan="2" class="text-center">EV-F-08-05</td>
                                        <td rowspan="2">
                                            แบบฟอร์มขอยกเว้นการขอความยินยอมเป็นลายลักษณ์อักษร (ถ้ามี)
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
                                    {{-- EV-F-08-05 --}}
                                    <tr>
                                        <td class="text-center">
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

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
