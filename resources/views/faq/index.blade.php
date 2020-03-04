@extends('layouts.main')

@section('content')
    
{{-- @include('layouts.slide') --}}
{{-- @include('layouts.nav') --}}
{{-- @include('layouts.news') --}}

<section id="page-content" class="sidebar-right">
    <div class="container">
    <div class="row">
    
    {{-- <div class="content col-lg-9">
    
        <div class="page-title">
            <h1 class="kanit">ตัวอย่าง - ผลการค้นหา</h1>
            <div class="breadcrumb float-left">
            <ul>
            <li><a href="#" class="kanit">หน้าแรก</a>
            </li>
            <li><a href="#" class="kanit">บทความ</a>
            </li>
            <li class="active"><a href="#" class="kanit">ตัวอย่าง - ผลการค้นหา</a>
            </li>
            </ul>
            </div>
        </div>
    </div> --}}

    <div class="content col-lg-9">
        <h4 class='kanit'>ถามตอบ</h4>
        <div class="accordion">
            <div class="ac-item">
            <h5 class="ac-title kanit">ตัวอย่างถามตอบที่ 1</h5>
            <div class="ac-content kanit">
            <p class='kanit'>ตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบ
                ตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบ
                ตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบ
                ตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบตัวอย่างถามตอบ</p>
            </div>
            </div>
            <div class="ac-item">
            <h5 class="ac-title kanit">ตัวอย่างถามตอบที่ 2</h5>
            <div class="ac-content">
            <p>When, while the lovely valley teems with vapour around me, and the meridian sun
            strikes the upper surface of the impenetrable foliage of my trees, and but a few
            stray gleams steal into the inner sanctuary.</p>
            <p>I throw myself down among the tall grass by the trickling stream; and, as I lie
            close to the earth, a thousand unknown plants are noticed by me</p>
            </div>
            </div>
            <div class="ac-item">
            <h5 class="ac-title kanit">ตัวอย่างถามตอบที่ 3</h5>
            <div class="ac-content">
            <p>As it floats around us in an eternity of bliss; and then, my friend, when
            darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and
            absorb its power, like the form of a beloved mistress</p>
            <p>I often think with longing, Oh, would I could describe these conceptions, could
            impress upon paper all that is living so full and warm within me, that it might
            be the mirror of my soul, as my soul is the mirror of the infinite God! O my
            friend — but it is too much for my strength — I sink under the weight of the
            splendour of these visions!”</p>
            </div>
            </div>
        </div>
    </div>
    
    
    @include('layouts.right')
    
    </div>
    </div>
    </section> 




@endsection

