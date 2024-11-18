@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="pt-5 text-center">
                <h5>การสนับสนุนการพิจารณาการรับรองมาตรฐานจริยธรรมการวิจัยในมนุษย์</h5>
            </div>
        </div>
        <br>
        <div class="row justify-content-center py-2">
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: #2D2A4A">
                        เพิ่มรายการปฏิทิน
                    </div>
                    <div class="card-body" style="font-family: 'Graphik', sans-serif !important;">
                        <form>
                            {{-- name --}}
                            <div class="form-group">
                                <label for="" class="control-label">name : </label>&nbsp;
                                <input type="text" name="" id="" class="form-control"  placeholder="">
                            </div>
                            {{-- start_date --}}
                            <div class="form-group">
                                <label for="" class="control-label">start_date : </label>&nbsp;
                                <input type="date" name="" id="" class="form-control"  placeholder="">
                            </div>
                            {{-- finish_date --}}
                            <div class="form-group">
                                <label for="" class="control-label">finish_date : </label>&nbsp;
                                <input type="date" name="" id="" class="form-control"  placeholder="">
                            </div>
                            {{-- meeting_date --}}
                            <div class="form-group">
                                <label for="" class="control-label">meeting_date : </label>&nbsp;
                                <input type="date" name="" id="" class="form-control"  placeholder="">
                            </div>
                            {{-- notification_date --}}
                            <div class="form-group">
                                <label for="" class="control-label">notification_date : </label>&nbsp;
                                <input type="date" name="" id="" class="form-control"  placeholder="">
                            </div>
                            {{-- certification_date --}}
                            <div class="form-group">
                                <label for="" class="control-label">certification_date : </label>&nbsp;
                                <input type="date" name="" id="" class="form-control"  placeholder="">
                            </div>
                            {{-- final_date --}}
                            <div class="form-group">
                                <label for="" class="control-label">final_date : </label>&nbsp;
                                <input type="date" name="" id="" class="form-control"  placeholder="">
                            </div>
                            {{-- status --}}
                            <div class="form-group">
                                <label for="" class="control-label">status : </label>&nbsp;
                                <input type="text" name="" id="" class="form-control"  placeholder="">
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
