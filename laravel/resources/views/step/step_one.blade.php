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
                <span style="font-size: 24px; background-color: #A51931; " class="align-middle text-white ">&nbsp;STEP 1: </span>
                <span style="font-size: 20px;"class="align-middle">&nbsp;เลือกประเภทการพิจารณา</span>
            </div>
            <div class="col-3 align-self-center w-100" style="background-color: #FFFAFA">
                <a href="" style="font-size: 20px;" class="align-middle">คำแนะนำ</a>&nbsp;
                <span style="font-size: 24px;" class="align-middle" >|</span>&nbsp;
                <a style="font-size: 20px;" class="align-middle">คู่มือ</a>&nbsp;
                <span style="font-size: 24px;" class="align-middle">|</span>&nbsp;
                <a style="font-size: 20px;" class="align-middle">คำอธิบาย</a>&nbsp;
            </div>
        </div>
        <div class="row justify-content-center mt-5 mx-0" >
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="background-color: #FFFAFA">
                        <div class="p-4 justify-content-center">
                            <img class="rounded mx-auto d-block" src="{{ asset('icon/filter.png') }}" height="125px">
                        </div>
                        <form method="POST" >
                            <a href="" class="form-control btn btn-primary" style="background-color: #2D2A4A;word-wrap: break-word;">การพิจารณาแบบยกเว้น</a>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-3 offset-md-1">
                <div class="card">
                    <div class="card-body " style="background-color: #FFFAFA">
                        <div class="p-4 justify-content-center">
                            <img class="rounded mx-auto d-block" src="{{ asset('icon/shuttle.png') }}" height="125px">
                        </div>
                        <form method="POST" >
                            <a href="" class="form-control btn btn-primary" style="background-color: #2D2A4A; word-wrap: break-word;">การพิจารณาแบบเร่งด่วน</a>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-3 offset-md-1">
                <div class="card">
                    <div class="card-body" style="background-color: #FFFAFA">
                        <div class="p-4 justify-content-center">
                            <img class="rounded mx-auto d-block" src="{{ asset('icon/book.png') }}" height="125px">
                        </div>
                        <form method="POST" >
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="" class="form-control btn btn-primary " style="background-color: #2D2A4A; word-wrap: break-word;">การพิจารณาแบบเต็มคณะ</a>
                                </div>
                            </div>

                        </form>
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
            <div class="col-12 ">
                <a class=" float-right" href="{{ route('step_two') }}">
                    <span class="align-middle">STEP 2 : กรอกแบบฟอร์มการยื่นขอรับพิจารณาฯ</span>&nbsp;
                    <span style="font-size: 40px" class="align-middle fas fa-forward"></span>
                </a>
            </div>
        </div>

    </div>
@endsection
