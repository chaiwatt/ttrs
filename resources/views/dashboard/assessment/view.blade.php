@extends('layouts.dashboard.main')
@section('pageCss')
@stop
@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">รายงานผลประเมิน: บริษัท ทดสอบ จำกัด</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> ตั้งค่า</a>
                    <span class="breadcrumb-item active">รายงานผลประเมิน</span>
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
                        <h6 class="card-title">ผลการประเมินแยกตามหมวดและ Criteria</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
         

                        <div class="chart-container">
                            <div class="chart has-fixed-height" id="bars_stacked"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header header-elements-sm-inline">
                        <h6 class="card-title">ตารางผลการประเมิน</h6>
                        <div class="header-elements">
                            {{-- <span class="badge bg-success badge-pill">28 active</span> --}}
                            {{-- <div class="list-icons ml-3">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                                        <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
                                        <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    {{-- <div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
                        <div class="d-flex align-items-center mb-3 mb-sm-0">
                            <div id="campaigns-donut"></div>
                            <div class="ml-3">
                                <h5 class="font-weight-semibold mb-0">38,289 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+16.2%)</span></h5>
                                <span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">May 12, 12:30 am</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3 mb-sm-0">
                            <div id="campaign-status-pie"></div>
                            <div class="ml-3">
                                <h5 class="font-weight-semibold mb-0">2,458 <span class="text-danger font-size-sm font-weight-normal"><i class="icon-arrow-down12"></i> (-4.9%)</span></h5>
                                <span class="badge badge-mark border-danger mr-1"></span> <span class="text-muted">Jun 4, 4:00 am</span>
                            </div>
                        </div>

                        <div>
                            <a href="#" class="btn bg-indigo-300"><i class="icon-statistics mr-2"></i> View report</a>
                        </div>
                    </div> --}}

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th>หมวดการประเมิน</th>
                                    <th>Criteria1</th>
                                    <th>Criteria2</th>
                                    <th>Criteria3</th>
                                    <th>Criteria4</th>
                                    <th>Criteria5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-active table-border-double">
                                    <td colspan="5">หมวดที่1</td>
                                    <td class="text-right">
                                        <span class="progress-meter" id="today-progress" data-progress="30"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-success-400 rounded-round btn-icon btn-sm">
                                                    <span class="letter-icon">A</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold letter-icon-title">รายงานผลประเมินหมวดที่1</a>                                       
                                            </div>
                                        </div>
                                    </td>
                                    <td><span >320</span></td>
                                    <td><span >210</span></td>
                                    <td><span >310</span></td>
                                    <td><span >410</span></td>
                                    <td><span >1320</span></td>
                                </tr>


                                <tr class="table-active table-border-double">
                                    <td colspan="5">หมวดที่2</td>
                                    <td class="text-right">
                                        <span class="progress-meter" id="yesterday-progress" data-progress="65"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-primary-400 rounded-round btn-icon btn-sm">
                                                    <span class="letter-icon">C</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold letter-icon-title">รายงานผลประเมินหมวดที่2</a>                                       
                                            </div>
                                        </div>
                                    </td>
                                    <td><span >330</span></td>
                                    <td><span >230</span></td>
                                    <td><span >330</span></td>
                                    <td><span >330</span></td>
                                    <td><span >1330</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /form layouts -->
    </div>
    <!-- /content area -->
@endsection
@section('pageScript')

<script src="{{asset('assets/dashboard/js/plugins/visualization/echarts/echarts.min.js')}}"></script>

<script src="{{asset('assets/dashboard/js/demo_charts/echarts/light/bars/bars_basic.js')}}"></script>
<script src="{{asset('assets/dashboard/js/demo_charts/echarts/light/bars/bars_stacked.js')}}"></script>
<script src="{{asset('assets/dashboard/js/demo_charts/echarts/light/bars/bars_stacked_clustered.js')}}"></script>
<script src="{{asset('assets/dashboard/js/demo_charts/echarts/light/bars/bars_floating.js')}}"></script>
<script src="{{asset('assets/dashboard/js/demo_charts/echarts/light/bars/bars_line.js')}}"></script>

<script src="{{asset('assets/dashboard/js/demo_charts/echarts/light/bars/tornado_negative_stack.js')}}"></script>
<script src="{{asset('assets/dashboard/js/demo_charts/echarts/light/bars/tornado_staggered.js')}}"></script>
@stop
