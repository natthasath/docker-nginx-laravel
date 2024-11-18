@extends('layouts.app')

@push('scripts')
<!-- Scripts -->
<script src="{{ asset('/form.js')}}"></script>
@endpush

@section('content')
    <div class="container">


        <div class="row justify-content-center pt-5 pb-2">
            <div class="col-12">
                <a style="font-size: 25px">Dashboard</a>
            </div>
        </div>
        <div class="row justify-content-center my-2" >
            <div class="col-9" style="background-color: #FFFAFA">
                <span style="font-size: 24px; background-color: #A51931; " class="align-middle text-white ">&nbsp;STEP 2: </span>
                <span style="font-size: 20px;"class="align-middle">&nbsp;แบบเสนอโครงการวิจัยเพื่อขอรับการพิจารณารับรองจริยธรรมการวิจัยในมนุษย์</span>
            </div>
            <div class="col-3 align-self-center w-100" style="background-color: #FFFAFA">
                <a href="" style="font-size: 20px;" class="align-middle">คำแนะนำ</a>&nbsp;
                <span style="font-size: 24px;" class="align-middle" >|</span>&nbsp;
                <a style="font-size: 20px;" class="align-middle">คู่มือ</a>&nbsp;
                <span style="font-size: 24px;" class="align-middle">|</span>&nbsp;
                <a style="font-size: 20px;" class="align-middle">คำอธิบาย</a>&nbsp;
            </div>
        </div>
        <div class="row justify-content-center mt-5 mx-0 mb-3" >
            <div class="row mb-3">
                <div class="card">
                    <div class="card-body" style="font-family: 'Graphik', sans-serif !important;">
                        <div class="container" style="border: 5px solid #000065">
                            <h6 class="pt-3" style="font-weight: 700 !important;">สำหรับผู้วิจัย</h6>
                            <h6 class="" style="font-weight: 700 !important;">คำชี้แจง</h6>
                            <p class="m-0">&emsp; 1) กรอกข้อมูลลงในแบบฟอร์มข้างล่างให้ครบถ้วน หากข้อใดไม่มีข้อมูล ให้ทำสัญลักษณ์ “-” </p>
                            <p class="m-0">&emsp; 2) ข้อมูลที่กรอกลงในแบบเสนอโครงการวิจัยฯ ต้องสอดคล้องกับโครงร่างการวิจัยที่ออกแบบไว้ และขอให้ผู้วิจัยตรวจสอบรายละเอียด เช่น ตัวสะกดของคำ เป็นต้น </p>
                            <p class="mx-0 mt-0">&emsp; 3) ความยาวทั้งหมดของแบบเสนอโครงการวิจัยนี้ต้องไม่เกิน 15 หน้า </p>
                        </div>
                        <br>
                        <form class="">
                            {{-- ข้อ 1 --}}
                            <div class="form-group">
                                <label for="" class="control-label">1. ชื่อโครงการวิจัย (ภาษาไทย) : </label>&nbsp;
                                <input type="text" name=""  class="form-control"  placeholder="">
                            </div>
                            {{-- ข้อ 2 --}}
                            <div class="form-group">
                                <label for="" class="control-label">2. ชื่อโครงการวิจัย (ภาษาอังกฤษ) : </label>&nbsp;
                                <input type="text" name=""  class="form-control"  placeholder="">
                            </div>
                            {{-- ข้อ 3 --}}
                            <div class="form-group">
                                <label for="" class="control-label">3. ชื่อผู้วิจัยหลัก (ภาษาไทย) :
                                    <small  class="text-muted"><em> ระบุคำนำหน้าชื่อและ/หรือตำแหน่ง เช่น นาย/นางสาว/นาง/ผศ.ดร.</em></small>
                                </label>&nbsp;
                                <input type="text" name=""  class="form-control"  placeholder="">
                            </div>
                            {{-- ข้อ 4 --}}
                            <div class="form-group">
                                <label for="" class="control-label">4. ชื่อผู้วิจัยหลัก (ภาษาอังกฤษ) : <small  class="text-muted"><em> ระบุคำนำหน้าชื่อและ/หรือตำแหน่ง เช่น Mr., Miss, Mrs., Asst. Prof. Dr.</em></small></label>&nbsp;
                                <input type="text" name=""  class="form-control"  placeholder="">
                            </div>
                            {{-- ข้อ 5 --}}
                            <div class="form-group">
                                <label for="" class="control-label">5. สถานะผู้วิจัย : </label>
                                <div class="form-check mb-2">
                                    <input type="radio" class="form-check-input"  name="radio1" >
                                    <label class="form-check-label" for="">อาจารย์</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input type="radio" class="form-check-input"  name="radio1" >
                                    <label class="form-check-label" for="">บุคลากร</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input type="radio" class="form-check-input"  name="radio1">
                                    <label class="form-check-label" for="">
                                            นักศึกษา
                                    </label>
                                </div>
                                <div class="container form-group mx-3 mb-3">
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" name="check1" >
                                        <label class="form-check-label" for="">ปริญญาโท</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" name="check1" >
                                        <label class="form-check-label" for="">ปริญญาเอก</label>
                                    </div>
                                </div>
                            </div>
                            {{-- ข้อ 6 --}}
                            <div class="form-group">
                                <label for="" class="control-label">6. สังกัด :
                                    <small  class="text-muted"><em> ระบุเป็นภาษไทยและภาษาอังกฤษ</em></small>
                                </label>
                                <div class="container form-group mx-2 form-inline">
                                    <label for="" class="control-label">หลักสูตรและสาขาวิชา : </label>&nbsp;
                                    <input type="text" name=""  class="form-control col-sm-6"  placeholder="">
                                </div>
                                <div class="container form-group mx-2 form-inline">
                                    <label for="" class="control-label">คณะ/วิทยาลัย/สำนัก/ศูนย์/อื่น ๆ : </label>&nbsp;
                                    <input type="text" name=""  class="form-control col-sm-6"  placeholder="">
                                </div>
                                <div class="container form-group mx-2 form-inline">
                                    <label for="" class="control-label">รหัสนักศึกษา (กรณีเป็นนักศึกษา) : </label>&nbsp;
                                    <input type="text" name=""  class="form-control col-sm-6"  placeholder="">
                                </div>
                            </div>
                            {{-- ข้อ 7 --}}
                            <div class="form-group">
                                <label for="" class="control-label">7. ข้อมูลการติดต่อสื่อสาร : <small  class="text-muted"><em> ใช้ในการแจ้งข้อมูลโครงการวิจัย</em></small></label>
                                <div class="container form-group mx-2 form-inline">
                                    <label for="" class="control-label">หมายเลขโทรศัพท์มือถือ : </label>&nbsp;
                                    <input type="text" name=""  class="form-control col-sm-6"  placeholder="">
                                </div>
                                <div class="container form-group mx-2 form-inline">
                                    <label for="" class="control-label">อีเมล: </label>&nbsp;
                                    <input type="email" name=""  class="form-control col-sm-6"  placeholder="">
                                </div>
                                <div class="container form-group mx-2 form-inline">
                                    <label for="" class="control-label">LINE ID (ถ้ามี) : </label>&nbsp;
                                    <input type="text" name=""  class="form-control col-sm-6"  placeholder="">
                                </div>
                                <div class="container form-group mx-2 form-inline">
                                    <label for="" class="control-label">ที่อยู่ในการติดต่อ : </label>&nbsp;
                                    <input type="text" name=""  class="form-control col-sm-6"  placeholder="">
                                </div>
                            </div>
                            {{-- ข้อ 8 --}}
                            <div class="form-group mb-2">
                                <label for="" class="control-label">8. ข้อมูลเกี่ยวกับทุนวิจัย : </label>
                                <div class="form-group mx-2">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="radio1" id="radio_main1" >
                                        <label class="form-check-label" style="white-space: nowrap;" for="">
                                            ได้รับทุนจำนวน :
                                        </label>&nbsp;
                                        <input type="text" name=""  class="form-control"  placeholder="">
                                    </div>

                                    <div class="container form-group mx-2">
                                        <label for="" class="control-label mb-1" > แหล่งทุน : </label>&nbsp;
                                        <div class="container form-group mx-1">
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="radio2" id="radio_sub1_1">
                                                <label class="form-check-label" for="" style="white-space: nowrap;">
                                                    ทุนรัฐบาล :
                                                    <small class="text-muted"><em> (โปรดระบุ) </em></small>
                                                </label>&nbsp;
                                                <input type="text" name="" class="form-control"  placeholder="">
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="radio2" id="radio_sub1_2">
                                                <label class="form-check-label" for="" style="white-space: nowrap;">
                                                    ทุนเอกชน :
                                                    <small  class="text-muted"><em> (โปรดระบุ) </em></small>
                                                 </label>&nbsp;
                                                <input type="text" name="" class="form-control"  placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="radio1" id="radio_main2">
                                        <label class="form-check-label" for="">อยู่ระหว่างการขอรับทุนจำนวน </label>&nbsp;
                                        <input type="hidden" name=""  class="form-control"  placeholder="">
                                    </div>
                                    <div class="container form-group mx-2">
                                        <label for="" class="control-label mb-1"> แหล่งทุน : </label>&nbsp;
                                        <div class="container form-group mx-1">
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="radio2" id="radio_sub2_1">
                                                <label class="form-check-label" for="" style="white-space: nowrap;">
                                                    ทุนรัฐบาล :
                                                    <small  class="text-muted"><em> (โปรดระบุ)</em></small>
                                                </label>&nbsp;
                                                <input type="text" name="" class="form-control"  placeholder="">
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="radio2" id="radio_sub2_2">
                                                <label class="form-check-label" for="" style="white-space: nowrap;">
                                                    ทุนเอกชน :
                                                    <small  class="text-muted"><em> (โปรดระบุ)</em></small>
                                                </label>&nbsp;
                                                <input type="text" name="" class="form-control"  placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label" for="" style="white-space: nowrap;">
                                            <input type="radio" class="form-check-input" name="radio1" id="radio_main3">
                                            <label class="form-check-label" for="">ไม่ได้รับทุน </label>
                                        </label>
                                    </div>
                                </div>

                            </div>
                            {{-- ข้อ 9  --}}
                            <div class="form-group" id="main_add">
                                <div class="row">
                                    <div class="col-9">
                                        <label for="" class="control-label">9. ข้อมูลผู้วิจัยร่วม/อาจารย์ที่ปรึกษาวิทยานิพนธ์/อาจารย์ที่ปรึกษาวิทยานิพนธ์ร่วม (ถ้ามี)
                                            <small  class="text-muted"><em> ระบุได้มากกว่า 1 คน</em></small>
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <button type="button" data-count="4" id="add_people" class="form-control btn btn-primary" style="background-color: #2D2A4A"><i class="fas fa-plus"></i>&nbsp;เพิ่มข้อมูลผู้วิจัยร่วม</button>
                                    </div>
                                </div>
                                {{-- ข้อ 9 คนที่ 1  --}}
                                <div class="containter form-group mx-2 pt-3" id="1">
                                    {{-- <label for="" class="control-label">&nbsp;1)&nbsp;</label> --}}
                                    <div class="container form-group mx-2 ">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 control-label">1) ชื่อ (ภาษาไทย) : </label>
                                            <div class="col-sm-10">
                                                <input type="text" name=""  class="form-control"  placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container form-group mx-2">
                                        <div class="form-group row">
                                            <label for="" class="col-2 control-label">&emsp;ชื่อ (ภาษาอังกฤษ) : </label>
                                            <div class="col-sm-10">
                                                <input type="text" name=""  class="form-control"  placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container form-group mx-2">
                                        <div class="form-group row">
                                            <div class="col">
                                                <div class="row">
                                                    <label for="" class="col-sm-5 control-label">&emsp;หมายเลขโทรศัพท์มือถือ : </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name=""  class="d-flex form-control"  placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row">
                                                    <label for="" class="col-sm-2 control-label">อีเมล : </label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name=""  class="d-flex form-control"  placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- ข้อ 9 คนที่ 2  --}}
                                <div class="containter form-group mx-2 pt-3" id="2">
                                    {{-- <label for="" class="control-label">&nbsp;2)&nbsp;</label> --}}
                                    <div class="container form-group mx-2 ">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 control-label">2) ชื่อ (ภาษาไทย) : </label>
                                            <div class="col-sm-10">
                                                <input type="text" name=""  class="form-control"  placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container form-group mx-2">
                                        <div class="form-group row">
                                            <label for="" class="col-2 control-label">&emsp;ชื่อ (ภาษาอังกฤษ) : </label>
                                            <div class="col-sm-10">
                                                <input type="text" name=""  class="form-control"  placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container form-group mx-2">
                                        <div class="form-group row">
                                            <div class="col">
                                                <div class="row">
                                                    <label for="" class="col-sm-5 control-label">&emsp;หมายเลขโทรศัพท์มือถือ : </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name=""  class="d-flex form-control"  placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row">
                                                    <label for="" class="col-sm-2 control-label">อีเมล : </label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name=""  class="d-flex form-control"  placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- ข้อ 9 คนที่ 3 --}}
                                <div class="containter form-group mx-2 pt-3" id="3">
                                    {{-- <label for="" class="control-label">&nbsp;3)&nbsp;</label> --}}
                                    <div class="container form-group mx-2 ">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 control-label">3) ชื่อ (ภาษาไทย) : </label>
                                            <div class="col-sm-10">
                                                <input type="text" name=""  class="form-control"  placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container form-group mx-2">
                                        <div class="form-group row">
                                            <label for="" class="col-2 control-label">&emsp;ชื่อ (ภาษาอังกฤษ) : </label>
                                            <div class="col-sm-10">
                                                <input type="text" name=""  class="form-control"  placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container form-group mx-2">
                                        <div class="form-group row">
                                            <div class="col">
                                                <div class="row">
                                                    <label for="" class="col-sm-5 control-label">&emsp;หมายเลขโทรศัพท์มือถือ : </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name=""  class="d-flex form-control"  placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row">
                                                    <label for="" class="col-sm-2 control-label">อีเมล : </label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name=""  class="d-flex form-control"  placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ข้อ 10 --}}
                            <div class="form-group">
                                <label for="" class="control-label">10. หลักการและเหตุผลที่ต้องทำวิจัย : </label>
                                <textarea class="form-control" rows="4"></textarea>
                            </div>
                            {{-- ข้อ 11 --}}
                            <div class="form-group">
                                <label for="" class="control-label">11. วัตถุประสงค์ : </label>
                                <textarea class="form-control" rows="4"></textarea>
                            </div>
                            {{-- ข้อ 12  --}}
                            <div class="form-group">
                                <label for="" class="control-label">12. ระเบียบวิธีวิจัย : </label>
                                {{-- <input type="text" name=""  class="form-control"  placeholder=""> --}}

                                {{-- 12.1 การออกแบบการวิจัย --}}
                                <div class="container form-group mx-3 mb-3">
                                    <label for="" class="control-label">12.1 การออกแบบการวิจัย : <small  class="text-muted"><em>ให้ทำเครื่องหมาย <i class="fa-solid fa-square-check"></i> หน้าข้อความที่ตรงกับโครงการวิจัยของผู้วิจัย และอธิบายถึงการออกแบบการวิจัย (เช่น การสำรวจ สัมภาษณ์เชิงลึก สนทนากลุ่ม สังเกตการณ์ และกลุ่มควบคุม กลุ่มทดลอง เป็นต้น) และวิธีการเก็บรวบรวมข้อมูล</em></small></label>
                                    {{-- 12.1 ย่อย ประเภทการวิจัย --}}
                                    <div class="container form-group mx-3 mb-3">
                                        <label for="" class="control-label">1) ประเภทการวิจัย :
                                            <small  class="text-muted"><em> (สามารถตอบได้มากกว่า 1 ข้อ)</em></small>
                                        </label>
                                        <div class="container form-group">
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">การวิจัยเชิงปริมาณ</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">การวิจัยเชิงคุณภาพ</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">การวิจัยเอกสาร</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">การวิจัยเชิงปฏฺิบัติการ</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">การวิจัยเชิงปฏฺิบัติการแบบมีส่วนร่วม</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">การวิจัยแบบผสมผสาน</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="check1" id="check_1">
                                                <label class="form-check-label col-sm-3" for="" style="inlin">อื่นๆ ระบุ</label>
                                                <input type="text" class="form-control" name="" disabled id="input_other1">
                                            </div>

                                        </div>
                                    </div>
                                    {{-- 12.1 ย่อย การเก็บรวบรวมข้อมูล --}}
                                    <div class="container form-group mx-3 mb-3">
                                        <label for="" class="control-label">2) การเก็บรวบรวมข้อมูล :
                                            <small  class="text-muted"><em> (สามารถตอบได้มากกว่า 1 ข้อ)</em></small>
                                        </label>
                                        <div class="container form-group">
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">การใช้แบบสอบถามชนิดตอบด้วยตนเอง</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">การใช้แบบสอบถามชนิดสัมภาษณ์</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">การสัมภาษณ์เชิงลึก</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">การสนทนากลุ่ม</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">การสังเกต</label>
                                                <div class="container form-group mt-1">
                                                    <div class="form-check mb-2">
                                                        <input type="checkbox" class="form-check-input" name="check1" >
                                                        <label class="form-check-label col-sm" for="">การสังเกตแบบมีส่วนร่วม</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input type="checkbox" class="form-check-input" name="check1" >
                                                        <label class="form-check-label col-sm" for="">การสังเกตแบบไม่มีส่วนร่วม</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="check1" id="check_2">
                                                <label class="form-check-label col-sm-3" for="" style="inlin">อื่นๆ ระบุ</label>
                                                <input type="text" class="form-control" name="" disabled id="input_other2">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                {{-- 12.2 --}}
                                <div class="container form-group mx-3 mb-3 ">
                                    <label for="" class="control-label">12.2 ขั้นตอนการวิจัย : <small  class=""><em>
                                        ระบุรายละเอียดกระบวนการวิจัยที่จะปฏิบัติกับผู้เข้าร่วมการวิจัยขอให้ผู้วิจัยระบุถึงวิธีการสื่อสารกับผู้เข้าร่วมวิจัยให้เหมาะสมกับวัฒนธรรมของผู้เข้าร่วมการวิจัยด้วย เช่น ชาวบ้านทั่วไป และชาวต่างชาติ
                                    </em></small></label>
                                    <textarea class="form-control" rows="4"></textarea>
                                    {{-- <input type="textarea" name=""  class="form-control"  placeholder=""> --}}
                                </div>
                                {{-- 12.3 --}}
                                <div class="container form-group mx-3 mb-3 ">
                                    <label for="" class="control-label">12.3 ลักษณะทั่วไปของผู้เข้าร่วมการวิจัย : </label>&nbsp;
                                    <label><small  class=""><em>
                                        เช่น จำนวนประชากร ขนาดกลุ่มตัวอย่าง อายุ เพศ ชาติพันธุ์ และภาวะสุขภาพ
                                    </em></small></label>
                                    <textarea class="form-control" rows="4"></textarea>
                                    {{-- <input type="text" name=""  class="form-control"  placeholder=""> --}}
                                </div>
                                {{-- 12.4 --}}
                                <div class="container form-group mx-3 mb-3 ">
                                    <label for="" class="control-label">12.4 เกณฑ์การคัดเลือกผู้เข้าร่วมการวิจัย : </label>&nbsp;
                                    <textarea class="form-control" rows="4"></textarea>
                                    {{-- <input type="text" name=""  class="form-control"  placeholder=""> --}}
                                </div>
                                {{-- 12.5 --}}
                                <div class="container form-group mx-3 mb-3 ">
                                    <label for="" class="control-label">12.5 เกณฑ์การยุติการเข้าร่วมการวิจัย : </label>&nbsp;
                                    {{-- <input type="text" name=""  class="form-control"  placeholder=""> --}}
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                                {{-- 12.6 --}}
                                <div class="container form-group mx-3 mb-3 ">
                                    <label for="" class="control-label">12.6 การดำเนินการหากผู้เข้าร่วมการวิจัยถอนตัวออกจากการวิจัย : </label>&nbsp;
                                    {{-- <input type="text" name=""  class="form-control"  placeholder=""> --}}
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                                {{-- 12.7 --}}
                                <div class="container form-group mx-3 mb-3 ">
                                    <label for="" class="control-label">12.7 จำนวนกลุ่มตัวอย่าง พร้อมทั้งอ้างอิง/ระบุที่มาของขนาดตัวอย่าง : </label>&nbsp;
                                    <textarea class="form-control" rows="4"></textarea>
                                    {{-- <input type="text" name=""  class="form-control"  placeholder=""> --}}
                                </div>
                                {{-- 12.8 --}}
                                <div class="container form-group mx-3 mb-3 ">
                                    <label for="" class="control-label">12.8 ประเภทของผู้เข้าร่วมการวิจัย :
                                        <small  class=""><em>
                                            (สามารถระบุได้มากกว่า 1 ข้อ)
                                        </em></small>
                                    </label>&nbsp;
                                    <div class="container form-group">
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" name="check1" >
                                            <label class="form-check-label col-sm" for="">เป็นกลุ่มเปราะบาง</label>
                                        </div>
                                        {{-- ข้อย่อย กลุ่มเปราะบาง --}}
                                        <div class="container form-group  mx-3 mb-3">
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">บุคคลผู้ด้วยโอกาสทางฐานะการเงิน หรือการศึกษา หรือผู้อ่านเขียนไม่ได้</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">ผู้ป่วยที่ไม่สามารถรักษาหายได้</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">ผู้ป่วยด้วยโรคที่สังคมไม่ยอมรับ</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">คนพิการ ซึ่งมีประเภทความพิการ ดังนี้</label>
                                                <div class="container form-group mt-1">
                                                    <div class="form-check mb-2">
                                                        <input type="checkbox" class="form-check-input" name="check1" >
                                                        <label class="form-check-label col-sm" for="">ความพิการทางการมองเห็น</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input type="checkbox" class="form-check-input" name="check1" >
                                                        <label class="form-check-label col-sm" for="">ความพิการทางการได้ยินหรือสื่อความหมาย</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input type="checkbox" class="form-check-input" name="check1" >
                                                        <label class="form-check-label col-sm" for="">ความพิการทางการเคลื่อนไหวหรือทางร่างกาย</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input type="checkbox" class="form-check-input" name="check1" >
                                                        <label class="form-check-label col-sm" for="">ความพิการทางจิตใจหรือพฤติกรรม หรือออทิสติก</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input type="checkbox" class="form-check-input" name="check1" >
                                                        <label class="form-check-label col-sm" for="">ความพิการทางสติปัญญา</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input type="checkbox" class="form-check-input" name="check1" >
                                                        <label class="form-check-label col-sm" for="">ความพิการทางการเรียนรู้</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">เด็กและเยาวชน</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">ผู้สูงอายุ (อายุ 60 ปีขึ้นไป)</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">ทารกในครรภ์หรือหญิงตั้งครรภ์</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">กลุ่มผู้ลี้ภัย</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">นักโทษหรือผู้ต้องขัง</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">กลุ่มคนไร้ที่อยู่</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">ชนกลุ่มน้อย โดยเฉพาะที่ไม่สามารถสื่อสารด้วยภาษาไทยได้</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">ผู้ทำผิดกฏหมาย เช่น กลุ่มผู้ขายบริการทางเพศ ผู้เสพหรือผู้ขายสารเสพติด เป็นต้น</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1" >
                                                <label class="form-check-label col-sm" for="">กลุ่มคนที่มีข้อจำกัดด้านอำนาจตัดสินใจและข้อต่อรอง เช่น ผู้ใต้บังคับบัญชาของผู้วิจัย นักเรียน หรือนักศึกษาที่ผู้วิจัยเป็นผู้สอน เป็นต้น</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="check1" id="check_3">
                                                <label class="form-check-label col-sm-3" for="" style="inlin">อื่นๆ ระบุ</label>
                                                <input type="text" class="form-control" name="" disabled id="input_other3">
                                            </div>

                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" name="check1" >
                                            <label class="form-check-label col-sm" for="">ไม่เป็นกลุ่มเปราะบาง</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- 12.9 --}}
                                <div class="container form-group mx-3 mb-3 ">
                                    <label for="" class="control-label">12.9 กระบวนการเชิญชวนให้เข้าร่วมการวิจัย :
                                    </label>&nbsp;
                                    <textarea class="form-control" rows="4"></textarea>
                                    {{-- <input type="text" name=""  class="form-control"  placeholder=""> --}}
                                </div>
                                {{-- 12.10 --}}
                                <div class="container form-group mx-3 mb-3 ">
                                    <label for="" class="control-label">12.10 สถานที่ที่ใช้ในการวิจัย :
                                    </label>&nbsp;
                                    <textarea class="form-control" rows="4"></textarea>
                                    {{-- <input type="text" name=""  class="form-control"  placeholder=""> --}}
                                </div>
                                {{-- 12.11 --}}
                                <div class="container form-group mx-3 mb-3 ">
                                    <label for="" class="control-label">12.11 ระยะเวลาในการเก็บรวบรวมข้อมูล :
                                        <small  class=""><em>
                                            เช่น 2 เดือน (มี.ค. 63-เม.ย. 63)
                                        </em></small>
                                    </label>&nbsp;
                                    <div class="row">
                                        <div class="col">
                                            <input type="month" name="" id="month1_min" class="form-control"  placeholder="">
                                        </div>
                                        <div class="col">
                                            <input type="month" name="" id="month1_max" class="form-control"  placeholder="">
                                        </div>
                                    </div>

                                </div>
                                {{-- 12.12 --}}
                                <div class="container form-group mx-3 mb-3 ">
                                    <label for="" class="control-label">12.12 ระยะเวลาในการทำวิจัยทั้งสิ้น :
                                        <small  class=""><em>
                                            เช่น 1 ปี (ม.ค.63-ธ.ค. 63)
                                        </em></small>
                                    </label>&nbsp;
                                    <div class="row">
                                        <div class="col">
                                            <input type="month" name="" id="month2_min" class="form-control"  placeholder="">
                                        </div>
                                        <div class="col">
                                            <input type="month" name="" id="month2_max" class="form-control"  placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ข้อ 13 --}}
                            <div class="form-group">
                                <label for="" class="control-label">13. ประโยชน์ที่คาดว่าจะได้รับ : </label>
                                <textarea class="form-control" rows="4"></textarea>
                                {{-- <input type="text" name=""  class="form-control"  placeholder=""> --}}
                            </div>
                            {{-- ข้อ 14 --}}
                            <div class="form-group">
                                <label for="" class="control-label">14. มาตรการในการรักษาความลับของข้อมูล : </label>
                                <textarea class="form-control" rows="4"></textarea>
                                {{-- <input type="text" name=""  class="form-control"  placeholder=""> --}}
                            </div>
                            {{-- ข้อ 15 --}}
                            <div class="form-group">
                                <label for="" class="control-label">15. ระยะเวลาในการเก็บรักษาข้อมูล : </label>
                                <textarea class="form-control" rows="4"></textarea>
                                {{-- <input type="text" name=""  class="form-control"  placeholder=""> --}}
                            </div>
                            {{-- ข้อ 16 --}}
                            <div class="form-group">
                                <label for="" class="control-label">16. วิธีการทำลายข้อมูลหลังจากเสร็จสิ้นการวิจัย : </label>
                                <textarea class="form-control" rows="4"></textarea>
                                {{-- <input type="text" name=""  class="form-control"  placeholder=""> --}}
                            </div>
                            {{-- ข้อ 17 --}}
                            <div class="form-group">
                                <label for="" class="control-label">17. ความเสี่ยงที่อาจจะเกิดเหตุการณ์ไม่พึงประสงค์ :
                                    <small  class=""><em>
                                        เช่น ผู้เข้าร่วมการวิจัยอาจจะรู้สึกไม่สบายใจกับบางคำถาม เป็นต้น
                                    </em></small>
                                </label>
                                <textarea class="form-control" rows="4"></textarea>
                                {{-- <input type="text" name=""  class="form-control"  placeholder=""> --}}
                            </div>
                            {{-- ข้อ 18 --}}
                            <div class="form-group">
                                <label for="" class="control-label">18. ค่าตอบแทนหรือของที่ระลึกให้ผู้เข้าร่วมการวิจัย :
                                    <small  class=""><em>
                                        กรุณาระบุค่าตอบแทน ค่าเสียเวลา หรือมูลค่าของที่ระลึก (ถ้ามี)
                                    </em></small>
                                </label>
                                <input type="text" name=""  class="form-control"  placeholder="">
                            </div>
                            {{-- ข้อ 19 --}}
                            <div class="form-group">
                                <label for="" class="control-label">19. เอกสารชี้แจงผู้เข้าร่วมการวิจัย :
                                    <small  class=""><em>
                                        (สามารถระบุได้มากกว่า 1 ข้อ)
                                    </em></small>
                                </label>
                                <div class="container form-group">
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" name="check1" >
                                        <label class="control-label" for="">กรณีผู้เข้าร่วมวิจัยอายุต่ำกว่า 18 ปี :&nbsp;</label>
                                        <label class="form-check-label" for="">เอกสารชี้แจงผู้เข้าร่วมการวิจัยสำหรับเด็ก (อายุต่ำกว่า 18 ปี) <a href="">(EC-F-08-02)</a> และเอกสารชี้แจงผู้เข้าร่วมการวิจัยสำหรับผู้ปกครอง (เด็กอายุต่ำกว่า 18 ปี) <a href="">(EC-F-08-03)</a></label>
                                    </div>
                                </div>
                                <div class="container form-group">
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" name="check1" >
                                        <label class="control-label" for="">กรณีผู้เข้าร่วมวิจัยอายุต่ำกว่า 18 ปี :&nbsp;</label>
                                        <label class="form-check-label" for="">เอกสารชี้แจงผู้เข้าร่วมการวิจัยสำหรับเด็ก (อายุ 18 ปีขึ้นไป) <a href="">(EC-F-08-00)</a></label>
                                    </div>
                                </div>
                            </div>
                            <!-- ข้อ 20 -->
                            <div class="form-group">
                                <label for="" class="control-label">20. หนังสือแสดงความสมัครใจในการเข้าร่วมการวิจัย
                                    <small  class=""><em>
                                        (สามารถระบุได้มากกว่า 1 ข้อ)
                                    </em></small>
                                </label>
                                <div class="container form-group">
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" name="check1">
                                        <label class="form-check-label" for="">มีหนังสือแสดงความสมัครใจในการเข้าร่วมการวิจัย</label>
                                        <div class="container form-group mt-2">
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1">
                                                <label class="form-check-label" for="">กรณีผู้เข้าร่วมการวิจัยอายุต่ำกว่า 18 ปี: หนังสือแสดงความสมัครใจในการเข้าร่วมการวิจัยสำหรับเด็ก (อายุต่ำกว่า 18 ปี) <a href="">(EC-F-08-04)</a></label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1">
                                                <label class="form-check-label" for="">กรณีผู้เข้าร่วมการวิจัยอายุ 18 ปีขึ้นไป: หนังสือแสดงความสมัครใจในการเข้าร่วมการวิจัย (อายุ 18 ปีขึ้นไป) <a href="">(EC-F-08-01)</a></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container form-group">
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" name="check1">
                                        <label class="form-check-label" for="">
                                            ขอยกเว้นหนังสือแสดงความสมัครใจในการเข้าร่วมการวิจัย เนื่องจาก
                                            <em>
                                                (สามารถระบุได้มากกว่า 1 ข้อ)
                                            </em>
                                        </label>
                                        <div class="container form-group mt-2">
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1">
                                                <label class="form-check-label" for="">เก็บข้อมูลโดยใช้แบบสอบถามที่ไม่ระบุชื่อผู้เข้าร่วมการวิจัย และไม่มีการเก็บข้อมูลที่สามารถเชื่อมโยงตัวตนของผู้เข้าร่วมการวิจัยได้ เช่น ภาพถ่าย เป็นต้น</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1">
                                                <label class="form-check-label" for="">เก็บข้อมูลโดยใช้แบบสอบถามผ่านช่องทางออนไลน์ โดยผู้วิจัยตั้งระบบการยินยอมที่ระบุว่า“ผู้เข้าร่วมการวิจัยได้อ่านเอกสารชี้แจงผู้เข้าร่วมการวิจัยเรียบร้อยแล้ว และยินดีเข้าร่วมการวิจัย” ก่อนเข้าสู่แบบสอบถามออนไลน์</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1">
                                                <label class="form-check-label" for="">เก็บข้อมูลโดยการสัมภาษณ์ทางโทรศัพท์หรือช่องทางออนไลน์ ซึ่งจำเป็นต้องขอความยินยอมด้วยวาจา</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1">
                                                <label class="form-check-label" for="">โครงการวิจัยใช้ข้อมูลทุติยภูมิที่ไม่สามารถระบุตัวตนของผู้เข้าร่วมการวิจัยหรือติดต่อผู้เข้าร่วมการวิจัย เพื่อขอความยินยอมได้</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1">
                                                <label class="form-check-label" for="">การลงนามในหนังสือแสดงความสมัครใจในการเข้าร่วมการวิจัยทำให้เกิดความเสี่ยงต่อผู้เข้าร่วม การวิจัย โดยผู้เข้าร่วมการวิจัยอาจได้รับอันตรายหรือความเสียหาย หากมีการเปิดเผยข้อมูลของผู้เข้าร่วมการวิจัย </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="check1">
                                                <label class="form-check-label" for="">การขอความยินยอมเป็นลายลักษณ์อักษรก่อนดำเนินการเก็บข้อมูลอาจทำให้ได้ข้อมูลที่มีความเอนเอียง</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="check1" id="check_4">
                                                <label class="form-check-label col-sm-3" for="" style="inlin">อื่นๆ ระบุ</label>
                                                <input type="text" class="form-control" name="" disabled id="input_other4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="container text-center" style="border: 5px solid red">
                               <div class="py-2" style="padding-left: 7rem; padding-right: 7rem; color: red;">
                                    **ผู้วิจัยต้องนำส่งแบบฟอร์มขอยกเว้นการขอความยินยอมเป็นลายลักษณ์อักษร (EC-F-08-05)
                                    <br>ทั้งนี้การอนุญาตหรือไม่ ขึ้นอยู่กับการพิจารณาของคณะกรรมการฯ**
                               </div>
                            </div>
                            <br>
                            {{-- ประวัติโดยสังเขป --}}
                            <div class="form-group ">
                                <label for="" class="control-label">ประวัติโดยสังเขปของผู้วิจัยหลัก</label>&nbsp;
                                <div class="form-group">
                                    <label for="" class="control-label">การศึกษา</label>&nbsp;
                                    {{-- ปริญญาเอก --}}
                                    <div class="container form-group">
                                        <div class="row">
                                            <label class="col-sm-2 col-form-label">ปริญญาเอก :</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="" >
                                            </div>
                                        </div>
                                    </div>
                                    {{-- ปริญญาโท --}}
                                    <div class="container form-group">
                                        <div class="row">
                                            <label class="col-sm-2 col-form-label">ปริญญาโท :</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="" >
                                            </div>
                                        </div>
                                    </div>
                                    {{-- ปริญญาตรี --}}
                                    <div class="container form-group">
                                        <div class="row">
                                            <label class="col-sm-2 col-form-label">ปริญญาตรี :</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">สถานที่ทำงาน: ตำแหน่ง: </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ความเชี่ยวชาญ : </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ประสบการณ์ด้านจริยธรรมการวิจัยในคน : </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body" style="font-family: 'Graphik', sans-serif !important;">
                        <div class="container">
                            <p class="fw-bold fs-5">ข้อสัญญา</p>
                            <p>
                                1) ข้าพเจ้าในฐานะผู้วิจัยได้ลงชื่อไว้ในเอกสารนี้และคณะผู้วิจัยดังมีรายนามข้างต้นจะดำเนินการวิจัยตามที่ระบุไว้
                                ในโครงการวิจัยฉบับที่ได้รับการรับรองจากคณะกรรมการจริยธรรมการวิจัยในมนุษย์ สถาบันบัณฑิตพัฒนบริหารศาสตร์ <span class="text-decoration-underline">และได้ขอความยินยอมจากผู้เข้าร่วมการวิจัยอย่างถูกต้องตามหลักจริยธรรมการวิจัยในมนุษย์ ดังที่ได้ระบุไว้ในแบบเสนอโครงการวิจัยฯ โดยจะให้ความเคารพในสิทธิและคำนึงถึงสวัสดิภาพของผู้เข้าร่วมการวิจัยเป็นสำคัญ </span>

                            </p>
                            <p>
                                2) ข้าพเจ้าขอรับรองว่า จะเริ่มทำการศึกษาวิจัยภายหลังจากได้รับการรับรองจากคณะกรรมการจริยธรรมการวิจัยในมนุษย์ สถาบันบัณฑิตพัฒนบริหารศาสตร์ เรียบร้อยแล้วเท่านั้น
                            </p>
                            <p>
                                3) หากมีข้อมูลที่คณะกรรมการจริยธรรมการวิจัยในมนุษย์ สถาบันบัณฑิตพัฒนบริหารศาสตร์ เสนอให้ปรับแก้ไข ข้าพเจ้าจะแจ้งให้ผู้วิจัยร่วมทราบด้วย
                            </p>
                            <p>
                                ข้าพเจ้าขอรับรองว่าข้อความข้างต้นเป็นความจริง และเข้าใจความหมายโดยชัดเจนทุกประการ
                            </p>
                        </div>
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
            <div class="col-6 ">
                <a class=" float-left" href="{{ route('step_one') }}">
                    <span style="font-size: 40px" class="align-middle fas fa-backward"></span>&nbsp;
                    <span class="align-middle">STEP 1 : เลือกประเภทการพิจารณา</span>
                </a>
            </div>
            <div class="col-6">
                <a class=" float-right" href="{{ route('step_three') }}">
                    <span class="align-middle">STEP 3 : กรอกแบบฟอร์มการยื่นขอรับพิจารณาฯ</span>&nbsp;
                    <span style="font-size: 40px" class="align-middle fas fa-forward"></span>
                </a>
            </div>
        </div>

    </div>
@endsection
