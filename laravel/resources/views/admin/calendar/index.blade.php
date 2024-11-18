@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="pt-5 text-center">
                <h5>รายการปฏิทิน</h5>
            </div>

        </div>
        <div class="row">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('car_create') }}" role="button" class="btn btn-primary btn-sm float-right" style="background-color:#A51931; border-color: #A51931;"><i class="fas fa-plus"></i>&nbsp;เพิ่มข้อมูล</a>
                <a href="{{ route('car_create') }}" role="button" class="btn btn-primary btn-sm float-right" style="background-color:#A51931; border-color: #A51931;"><i class="fas fa-plus"></i>&nbsp;นำเข้า csv</a>&nbsp;
            </div>
        </div>
        <div class="row justify-content-center py-2">
            <div class="col">
                <div class="card">
                    {{-- <div class="card-header text-white text-center" style="background-color: #2D2A4A">
                        รายการปฏิทิน

                    </div> --}}
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td class="text-center">#</td>
                                        <td class="text-center">เดือน</td>
                                        <td class="text-center">วันที่เริ่มรับโครงการวิจัย</td>
                                        <td class="text-center">วันสุดท้ายรับโครงการวิจัย</td>
                                        <td class="text-center">วันที่ประชุม</td>
                                        <td class="text-center">วันที่แจ้งผลการพิจารณาทางอีเมล</td>
                                        <td class="text-center">วันที่ผู้วิจัยรับเอกสารรับรอง</td>
                                        <td class="text-center">วันสุดท้ายที่ผู้วิจัยส่งผลการแก้ไข(กรณีมีการแก้ไข)</td>
                                        <td class="text-center">สถานะ</td>
                                        <td class="text-center">action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>ตุลาคม</td>{{--  name --}}
                                        <td>6 ตุลาคม 2566</td>{{--  start_date --}}
                                        <td>20 ตุลาคม 2566</td>{{--  finish_date --}}
                                        <td>9 ตุลาคม 2566</td>{{--  meeting_date --}}
                                        <td>14 ตุลาคม 2566</td>{{--  notification_date --}}
                                        <td>14 ตุลาคม 2566</td>{{--  certification_date --}}
                                        <td>14 ตุลาคม 2566</td>{{--  final_date --}}
                                        <td>status</td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-secondary btn-sm">
                                                <i class="fas fa-edit"></i>
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
