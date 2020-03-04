@extends('layouts.dashboard.main')
@section('pageCss')
@stop
@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">รายการประเมิน: บริษัท ทดสอบ จำกัด</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> ตั้งค่า</a>
                    <span class="breadcrumb-item active">รายการประเมิน</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title"></h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="left-icon-tab1">
                                <div class="card-body">
                                    <form action="#">
                                        <fieldset>
                                            <div class="form-group">
                                                <label>คะแนน ประวัติของกิจการ/ผู้เริ่มกิจการ</label>
                                                <input type="text" class="form-control" placeholder="คะแนน">
                                            </div>
    
                                            <div class="form-group">
                                                <label>ข้อคิดเห็น/ข้อเสนอแนะ ประวัติของกิจการ/ผู้เริ่มกิจการ</label>
                                                <textarea rows="3" cols="5" placeholder="ข้อคิดเห็น/ข้อเสนอแนะ ประวัติของกิจการ/ผู้เริ่มกิจการ" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>คะแนน แนวความคิดในการก่อตั้งกิจการ</label>
                                                <input type="text" class="form-control" placeholder="คะแนน">
                                            </div>
    
                                            <div class="form-group">
                                                <label>ข้อคิดเห็น/ข้อเสนอแนะ แนวความคิดในการก่อตั้งกิจการ</label>
                                                <textarea rows="3" cols="5" placeholder="ข้อคิดเห็น/ข้อเสนอแนะ ประวัติของกิจการ/ผู้เริ่มกิจการ" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>คะแนน ความสำเร็จที่ผ่านมา</label>
                                                <input type="text" class="form-control" placeholder="คะแนน">
                                            </div>
    
                                            <div class="form-group">
                                                <label>ข้อคิดเห็น/ข้อเสนอแนะ ความสำเร็จที่ผ่านมา</label>
                                                <textarea rows="3" cols="5" placeholder="ข้อคิดเห็น/ข้อเสนอแนะ ความสำเร็จที่ผ่านมา" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>คะแนน อุปสรรคที่ผ่านมา</label>
                                                <input type="text" class="form-control" placeholder="คะแนน">
                                            </div>
    
                                            <div class="form-group">
                                                <label>ข้อคิดเห็น/ข้อเสนอแนะ อุปสรรคที่ผ่านมา</label>
                                                <textarea rows="3" cols="5" placeholder="ข้อคิดเห็น/ข้อเสนอแนะ อุปสรรคที่ผ่านมา" class="form-control"></textarea>
                                            </div>
                                        </fieldset>

                                        {{-- <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                                        </div> --}}
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="left-icon-tab2">
                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
                            </div>

                            <div class="tab-pane fade" id="left-icon-tab3">
                                DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
                            </div>

                            <div class="tab-pane fade" id="left-icon-tab4">
                                Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /form layouts -->
    </div>
    <!-- /content area -->
@endsection
@section('pageScript')
@stop
