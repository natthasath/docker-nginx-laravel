@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                {{-- <div class="col-8"> --}}
                    <div class="card">
                        <div class="card-header">
                            ค้นหารายการแบบเสนอโครงการวิจัยเพื่อขอรับการพิจารณารับรองจริยธรรมการวิจัยในมนุษย์
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group form-inline">
                                            <label class="control-label col-sm-4">ชื่อโครงการ :</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>
                                        <div class="form-group form-inline">
                                            <label class="control-label col-sm-4" style="text-align: left !important;">รหัสโครงการ :</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col">
                                        <div class="form-group form-inline">
                                            <label class="control-label col-sm-4">สถานะ :</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>
                                        <div class="form-group form-inline">
                                            <label class="control-label col-sm-4">รอบ :</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>
                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>
                {{-- </div> --}}
            </div>

        </div>
        <div class="row justify-content-center py-2">
            <div class="col">
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: #2D2A4A">
                        รายการแบบเสนอโครงการวิจัยเพื่อขอรับการพิจารณารับรองจริยธรรมการวิจัยในมนุษย์
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td class="text-center">#</td>
                                        <td class="text-center">รหัสโครงการ</td>
                                        <td class="text-center">ชื่อโครงการ</td>
                                        <td class="text-center">วันที่ยื่น</td>
                                        <td class="text-center">สถานะ</td>
                                        <td class="text-center">#</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>01-0000-2566</td>
                                        <td>โครงการที่ 1</td>
                                        <td>07/10/2566</td>
                                        <td class="text-center align-middle">
                                            <span class="py-1 px-2 my-1 mx-2 rounded-pill" style="background-color: #0069D9; color: white;">กรอกแบบฟอร์ม</span>
                                        </td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-primary btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>02-0000-2566</td>
                                        <td>โครงการที่ 2</td>
                                        <td>07/10/2566</td>
                                        <td class="text-center align-middle">
                                            <span class="py-1 px-2 my-1 mx-2 rounded-pill" style="background-color: #FFC107; color: white;">ตรวจสอบเอกสาร</span>
                                        </td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-primary btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>03-0000-2566</td>
                                        <td>โครงการที่ 3</td>
                                        <td>07/10/2566</td>
                                        <td class="text-center align-middle">
                                            <span class="py-1 px-2 my-1 mx-2 rounded-pill" style="background-color: #25993F; color: white;">รับรองโครงการ</span>
                                        </td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-primary btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>04-0000-2566</td>
                                        <td>โครงการที่ 4</td>
                                        <td>07/10/2566</td>
                                        <td class="text-center align-middle">
                                            <span class="py-1 px-2 my-1 mx-2 rounded-pill" style="background-color: #25993F; color: white;">รับรองโครงการ</span>
                                        </td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-primary btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>
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
