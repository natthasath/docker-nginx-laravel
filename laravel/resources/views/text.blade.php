@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="pt-5">
                <h5>การสนับสนุนการพิจารณาการรับรองมาตรฐานจริยธรรมการวิจัยในมนุษย์</h5>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-10" style="background-color: #1b1833; color: white;">
                <div class="p-2">
                    &nbsp;&nbsp;รหัสโครงการ :&nbsp;
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-10" style="background-color: white; ">
                <div class="p-2">
                    <div class="row p-1">
                        <div class="col">
                            &nbsp;&nbsp;โครงการวิจัย &nbsp;
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-5">
                            &nbsp;&nbsp;ประเภทวิจัย &nbsp;
                        </div>
                        <div class="col">
                           วันที่ยื่นโครงการ &nbsp;
                        </div>
                        <div class="col">
                            สภานะ : &nbsp;
                        </div>
                    </div>
                    <div class="row p-4">
                        <div class="col">
                            <div class="containter">
                                {{-- add editor --}}
                                <form>
                                    <textarea class="form-control" rows="10" id="comment"></textarea>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
