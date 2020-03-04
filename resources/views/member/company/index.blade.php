@extends('layouts.main')

@section('content')
    
{{-- @include('layouts.slide') --}}
@include('layouts.nav')
{{-- @include('layouts.news') --}}

<section class="p-t-40 p-b-40">
    <div class="container">
        <div class="tabs tabs-clean">
            <ul class="nav nav-tabs" id="myTab2" role="tablist">
            <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">ประวัติผู้ประกอบการ</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">ผลประกอบการย้อนหลัง</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact" aria-selected="false">สภาวะทางการตลาด</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">วิเคราะห์คู่แข่งการตลาด</a>

            </li>
            </ul>
            <div class="tab-content" id="myTabContent2">
            <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">ประวัติของกิจการ/ผู้เริ่มกิจการ</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">แนวความคิดในการก่อตั้งกิจการ</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">ความสำเร็จที่ผ่านมา</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">อุปสรรคที่ผ่านมา</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>

                    </div>
                    {{-- <button type="submit" class="btn">Sign in</button> --}}
                </form>
            </div>
            <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab">
            <p>Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. </p>
            <p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
            </div>
            <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab">
            <p>Soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. </p>
            </div>
            </div>
            </div>
        </div>
    </div>
</section>

@endsection

