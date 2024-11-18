@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row ">
            <div class="pt-5 text-center">
                <h5>การสนับสนุนการพิจารณาการรับรองมาตรฐานจริยธรรมการวิจัยในมนุษย์</h5>
            </div>
        </div>
        <br>
        <div class="row justify-content-center py-2">
            <div class="col-4">
                @include('calendar')
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="p-2" style="font-size: 17px">
                            <div class="row p-1 m-1">
                                <div class="col">
                                    <span class="fas fa-envelope-circle-check text-primary" style="font-size: 25px"></span>&nbsp;
                                    <a>รับโครงการวิจัย :</a>&nbsp;
                                    <a style="color: #13CAF2"> 6 - 20 ตุลาคม 2566</a>
                                </div>


                            </div>
                            <div class="row p-1 m-1">
                                <div class="col">
                                    <span class="fas fa-calendar-days text-primary" style="font-size: 25px"></span>&nbsp;
                                    <a>วันที่ประชุม :</a>&nbsp;
                                    <a style="color: #13CAF2"> 9 ตุลาคม 2566</a>
                                </div>
                            </div>
                            <div class="row p-1 m-1">
                                <div class="col">
                                    <span class="fas fa-square-poll-horizontal text-primary" style="font-size: 25px"></span>&nbsp;
                                    <a>แจ้งผลการพิจารณาทางอีเมล :</a>&nbsp;
                                    <a style="color: #13CAF2">14 ตุลาคม 2566</a>
                                </div>
                            </div>
                            <div class="row p-1 m-1">
                                <div class="col">
                                    <span class="fas fa-calendar-check text-primary" style="font-size: 25px"></span>&nbsp;
                                <a>กำหนดการรับพิจารณาครั้งต่อไป :</a>&nbsp;
                                <a style="color: #13CAF2">8 - 21 พฤศจิกายน 2566</a>
                                </div>

                            </div>
                            <div class="row py-3 m-1 justify-content-center">
                                {{-- <form method="POST" action="{{ route('step_one') }}"> --}}
                                <form>
                                    {{-- <a href="{{ redirect('step_one') }}" class="form-control btn btn-primary" style="background-color: #2D2A4A">ยื่นขอรับพิจารณาโครงการ</a> --}}
                                    <a href="{{ route('step_one') }}" class="form-control btn btn-primary" style="background-color: #2D2A4A">ยื่นขอรับพิจารณาโครงการ</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center py-2">
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-white" style="background-color: #2D2A4A">
                        <center>รายการยื่นขอรับพิจารณาโครงการวิจัย</center>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>รหัสโครงการ</td>
                                        <td>ชื่อโครงการ</td>
                                        <td>วันที่ยื่น</td>
                                        <td>สถานะ</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>01-0000-2566</td>
                                        <td>โครงการที่ 1</td>
                                        <td>07/10/2566</td>
                                        <td>
                                            <button class="btn btn-primary rounded-pill btn-sm">กรอกแบบฟอร์ม</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>02-0000-2566</td>
                                        <td>โครงการที่ 2</td>
                                        <td>07/10/2566</td>
                                        <td>
                                            <button class="btn btn-warning rounded-pill btn-sm">ตรวจสอบเอกสาร</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>03-0000-2566</td>
                                        <td>โครงการที่ 3</td>
                                        <td>07/10/2566</td>
                                        <td>
                                            <button class="btn btn-success rounded-pill btn-sm">รับรองโครงการ</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>04-0000-2566</td>
                                        <td>โครงการที่ 4</td>
                                        <td>07/10/2566</td>
                                        <td>
                                            <button class="btn btn-success rounded-pill btn-sm">รับรองโครงการ</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="pagination">
                                {{-- {!! $users->appends(['search' => Request::get('search')])->render() !!}  --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
