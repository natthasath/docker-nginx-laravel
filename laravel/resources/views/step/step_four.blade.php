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
                <span style="font-size: 24px; background-color: #A51931; " class="align-middle text-white ">&nbsp;STEP 4: </span>
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
        <div class="row justify-content-center d-flex" >{{-- mt-5 mx-0 mb-4 --}}
            {{-- <div class="col-10 mb-3"> --}}
                <div class="card">
                    <div class="card-body">
                        preview generate pdf
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th class="text-center"><i class="fa fa-check" aria-hidden="true"></i></th>
                                        <th class="text-center">ลำดับ</th>
                                        <th class="text-center">รหัสเอกสาร</th>
                                        <th class="text-center">เอกสารแนบ</th>
                                        <th class="text-center">ชื่อไฟล์</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </div>

        <div class="row justify-content-center mt-5 mx-0 px-2" >
            <div class="col-12">
                <hr style="height:5px;border-width:0;color:gray;background-color:#A51931">
            </div>
        </div>
        <div class="row justify-content-center mt-5 mx-0 px-2" >
            <div class="col-6 ">
                <a class=" float-left" href="{{ route('step_three') }}">
                    <span style="font-size: 40px" class="align-middle fas fa-backward"></span>&nbsp;
                    <span class="align-middle">STEP 3 : กรอกแบบฟอร์มการยื่นขอรับพิจารณาฯ</span>
                </a>
            </div>
            <div class="col-6 ">
                <a class=" float-right" href="{{ route('step_five') }}">
                    <span class="align-middle">STEP 5 : Upload แบบฟอร์มและเอกสารเพิ่มเติม</span>&nbsp;
                    <span style="font-size: 40px" class="align-middle fas fa-forward"></span>
                </a>
            </div>
        </div>

    </div>
@endsection
