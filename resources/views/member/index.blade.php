@extends('layouts.main')

@section('content')
    
{{-- @include('layouts.slide') --}}
@include('layouts.nav')
{{-- @include('layouts.news') --}}

<section class="p-t-40 p-b-40">
    <div class="container">
        <h4 class="kanit">รายงานการประเมิน</h4>
        
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="width:100px">วันที่</th>
                            <th scope="col" >รายการ</th>
                            <th scope="col" >สถานะ</th>
                            <th scope="col" style="width:150px">เพิ่มเติม</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>ขอรับการประเมินบริษัท</td>
                            <td>รอการยืนยันการรับการประเมิน</td>
                            <td><button type="button" class="btn btn-xs btn-success kanit">เพิ่มเติม</button> <button type="button" class="btn btn-xs btn-danger kanit">ลบ</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- <button type="button" class="btn btn-xs btn-success kanit">เพิ่มเติม</button>  --}}
            <button type="button" class="btn btn-secondary kanit">ขอรับการประเมิน</button>
        </div>
    </div>
</section>



@endsection

