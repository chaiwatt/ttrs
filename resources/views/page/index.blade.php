@extends('layouts.main')

@section('content')
    
{{-- @include('layouts.slide') --}}
{{-- @include('layouts.nav') --}}
{{-- @include('layouts.news') --}}

<section id="page-content" class="sidebar-right">
    <div class="container">
    <div class="row">
    
    <div class="content col-lg-9">
    
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
    
    
    <div id="blog" class="post-thumbnails">
    
    <div class="post-item">
    <div class="post-item-wrap">
    <div class="post-image">
    <a href="#">
    <img alt="" src="{{asset('assets/images/pages/images/feature.png')}}">
    </a>
    <span class="post-meta-category"><a href="#" class="kanit">หมวดหมู่1</a></span>
    </div>
    <div class="post-item-description">
    <span class="post-meta-date"><i class="fa fa-calendar"></i>กพ 21, 2020</span>
    <span class="post-meta-comments"><a href="#"><i class="fa fa-comments"></i>33 ความเห็น</a></span>
    <span class="post-meta-comments"><a href="#"><i class="fa fa-eye"></i>(อ่าน 33)</a></span>
    <h2><a href="#" class="kanit">ตัวอย่างบทความที่ 1
    </a></h2>
    <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
    <a href="#" class="item-link">อ่านเพิ่มเติม <i class="icon-chevron-right"></i></a>
    </div>
    </div>
    </div>
    

    <div class="post-item">
        <div class="post-item-wrap">
        <div class="post-image">
        <a href="#">
        <img alt="" src="{{asset('assets/images/pages/images/feature.png')}}">
        </a>
        <span class="post-meta-category"><a href="#" class="kanit">หมวดหมู่2</a></span>
        </div>
        <div class="post-item-description">
            <span class="post-meta-date"><i class="fa fa-calendar"></i>กพ 21, 2020</span>
            <span class="post-meta-comments"><a href="#"><i class="fa fa-comments"></i>33 ความเห็น</a></span>
            <span class="post-meta-comments"><a href="#"><i class="fa fa-eye"></i>(อ่าน 33)</a></span>
        <h2><a href="#" class="kanit">ตัวอย่างบทความที่ 2
        </a></h2>
        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
        <a href="#" class="item-link">อ่านเพิ่มเติม <i class="icon-chevron-right"></i></a>
        </div>
        </div>
    </div>
    
    <div class="post-item">
    <div class="post-item-wrap">
    <div class="post-video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/dA8Smj5tZOQ" frameborder="0" allowfullscreen></iframe>
    <span class="post-meta-category"><a href="#">Video</a></span>
    </div>
    <div class="post-item-description">
        <span class="post-meta-date"><i class="fa fa-calendar"></i>กพ 21, 2020</span>
        <span class="post-meta-comments"><a href="#"><i class="fa fa-comments"></i>33 ความเห็น</a></span>
        <span class="post-meta-comments"><a href="#"><i class="fa fa-eye"></i>(อ่าน 33)</a></span>
    <span class="post-meta-category"><a href="#"><i class="fa fa-tag"></i>Lifestyle</a></span>
    <h2><a href="#" class="kanit">ตัวอย่างบทความที่ 1 และ Youtube</a></h2>
    <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
    <a href="#" class="item-link">อ่านเพิ่มเติม </a>
    </div>
    </div>
    </div>
    
    



    </div>
    
    
    <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item active"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
    </ul>
    
    </div>
    
    
    @include('layouts.right')
    
    </div>
    </div>
    </section> 




@endsection

