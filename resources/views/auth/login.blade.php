@extends('layouts.login')

@section('content')
    <div class="col-lg-6 center p-40 background-white b-r-6">
        <form class="form-transparent-grey">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="kanit">สมัครใช้งาน</h3>
                    <p class="kanit">กรอกอีเมล์และรหัสผ่าน หรือสมัครด้วยบัญชี Facebook</p>
                </div>
                {{-- <div class="col-lg-12 form-group">
                    <label class="sr-only">ชื่อ</label>
                    <input type="text" name="name" placeholder="ชื่อ" class="form-control">
                </div> --}}
                <div class="col-lg-12 form-group">
                    <label class="sr-only">อีเมล์</label>
                    <input type="text" name="email" placeholder="อีเมล์" class="form-control">
                </div>
                <div class="col-lg-12 form-group">
                    <label class="sr-only">รหัสผ่าน</label>
                    <input type="password" placeholder="รหัสผ่าน" class="form-control">
                </div>
                <div class="col-lg-12 form-group">
                    <button class="btn kanit" type="button btn-info">สมัคร </button>
                    <button type="button" class="btn btn-facebook">
                        <i class="fab fa-facebook m-r-5"></i> Facebook
                    </button>
                    
                </div>
            </div>
        </form>
    </div>
@endsection