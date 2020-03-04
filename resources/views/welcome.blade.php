@extends('layouts.main')

@section('content')
    
@include('layouts.slide')
{{-- @include('layouts.nav') --}}
@include('layouts.news')

<section class="p-t-0 p-b-40">
<div class="container">
<div class="heading-text heading-line">
<h4 class="kanit">ข่าวเด่น</h4>
</div>
<div class="row">
<div class="col-lg-5">
<div class="post-thumbnail">
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/features/7.png')}}">
<div class="post-thumbnail-content">
<h3><a href="#" class="kanit">ไบโอเทคสวทช. ขยายผลงานวิจัยการใช้ไวรัส NPV กำจัดหนอนศัตรูพืช</a></h3>
<p class="kanit">ที่ ริมปิงออร์แกนิคฟาร์ม จ.เชียงใหม่ : กระทรวงการอุดมศึกษา วิทยาศาสตร์ วิจัยและนวัตกรรม (อว.) สำนักงานพัฒนาวิทยาศาสตร์และเทคโนโลยีแห่งชาติ (สวทช.) โดยศูนย์พันธุ์วิศวกรรมและเทคโนโลยีชีวภาพแห่งชาติ</p>
<span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Technology</span>
</div>
</div>
</div>
</div>
<div class="col-lg-7">
<div class="row">
<div class="col-lg-6">
<div class="post-thumbnail-list">
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/thrumb/1.png')}}">
<div class="post-thumbnail-content">
<a href="#">ทดสอบ ทดสอบ ทดสอบ</a>
<span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Technology</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/thrumb/1.png')}}">
<div class="post-thumbnail-content">
<a href="#">ทดสอบ ทดสอบ ทดสอบ</a>
<span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/thrumb/1.png')}}">
<div class="post-thumbnail-content">
<a href="#">ทดสอบ ทดสอบ ทดสอบ</a>
<span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
 </div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/thrumb/1.png')}}">
<div class="post-thumbnail-content">
<a href="#">ทดสอบ ทดสอบ ทดสอบ</a>
<span class="post-date"><i class="far fa-clock"></i> 8h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
</div>
{{-- <div class="marketing-box">โฆษณา</div> --}}
</div>
<div class="col-lg-6">
<div class="post-thumbnail-list">
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/thrumb/1.png')}}">
<div class="post-thumbnail-content">
<a href="#">ทดสอบ ทดสอบ ทดสอบ</a>
<span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Technology</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/thrumb/1.png')}}">
<div class="post-thumbnail-content">
<a href="#">ทดสอบ ทดสอบ ทดสอบ</a>
<span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/thrumb/1.png')}}">
<div class="post-thumbnail-content">
<a href="#">ทดสอบ ทดสอบ ทดสอบ</a>
<span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/thrumb/1.png')}}">
<div class="post-thumbnail-content">
<a href="#">ทดสอบ ทดสอบ ทดสอบ</a>
<span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
</div>
{{-- <div class="marketing-box">โฆษณา</div> --}}
</div>
</div>
</div>
</div>
</div>
</section>


{{-- <section class="background-colored">
<div class="container">
<div class="text-medium text-light">HIGHTLIGHTS</div>
<div class="grid-articles carousel post-carousel m-b-20">
<article class="post-entry">
<a href="#" class="post-image"><img alt="" src="{{asset('assets/images/news/carousel/1.jpg')}}"></a>
<div class="post-entry-overlay">
<div class="post-entry-meta">
<div class="post-entry-meta-category">
<span class="badge badge-danger">NEWS</span>
</div>
<div class="post-entry-meta-title">
<h2><a href="#">Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor</a></h2>
</div>
</div>
</div>
</article>
<article class="post-entry">
<a href="#" class="post-image"><img alt="" src="{{asset('assets/images/news/carousel/2.jpg')}}"></a>
<div class="post-entry-overlay">
<div class="post-entry-meta">
<div class="post-entry-meta-category">
<span class="badge badge-danger">LIFESTYLE</span>
</div>
<div class="post-entry-meta-title">
<h2><a href="#">Beautiful nature, and rare feathers!</a></h2>
</div>
</div>
</div>
</article>
<article class="post-entry">
<a href="#" class="post-image"><img alt="" src="{{asset('assets/images/news/carousel/3.jpg')}}"></a>
<div class="post-entry-overlay">
<div class="post-entry-meta">
<div class="post-entry-meta-category">
<span class="badge badge-danger">LIFESTYLE</span>
</div>
<div class="post-entry-meta-title">
<h2><a href="#">A true story, that never been told!</a></h2>
</div>
</div>
</div>
</article>
<article class="post-entry">
<a href="#" class="post-image"><img alt="" src="{{asset('assets/images/news/carousel/4.jpg')}}"></a>
<div class="post-entry-overlay">
<div class="post-entry-meta">
<div class="post-entry-meta-category">
<span class="badge badge-danger">World</span>
</div>
<div class="post-entry-meta-title">
<h2><a href="#">Fusce id mi diam, non ornare orci</a></h2>
</div>
</div>
</div>
</article>
<article class="post-entry">
<a href="#" class="post-image"><img alt="" src="{{asset('assets/images/news/carousel/5.jpg')}}"></a>
<div class="post-entry-overlay">
<div class="post-entry-meta">
<div class="post-entry-meta-category">
<span class="badge badge-danger">World</span>
</div>
<div class="post-entry-meta-title">
<h2><a href="#">The most happiest time of the day!</a></h2>
</div>
 </div>
</div>
</article>
<article class="post-entry">
<a href="#" class="post-image"><img alt="" src="{{asset('assets/images/news/carousel/6.jpg')}}"></a>
<div class="post-entry-overlay">
<div class="post-entry-meta">
<div class="post-entry-meta-category">
<span class="badge badge-danger">World</span>
</div>
<div class="post-entry-meta-title">
<h2><a href="#">The most happiest time of the day!</a></h2>
</div>
</div>
</div>
</article>
<article class="post-entry">
<a href="#" class="post-image"><img alt="" src="{{asset('assets/images/news/carousel/7.jpg')}}"></a>
<div class="post-entry-overlay">
<div class="post-entry-meta">
<div class="post-entry-meta-category">
<span class="badge badge-danger">World</span>
</div>
<div class="post-entry-meta-title">
<h2><a href="#">The most happiest time of the day!</a></h2>
</div>
</div>
</div>
</article>
</div>
<div class="text-light text-right">
<a class="read-more" href="blog-post.html">
All stories in Highlights <i class="fa fa-long-arrow-alt-right"></i></a></div>
</div>
</section> --}}

{{-- <hr> --}}
<section class="p-t-0">
    <div class="container">
    <div class="heading-text heading-section text-center">
    <h4 class="kanit">ขั้นตอนการยื่นประเมิน</h4>
    <p class="kanit">ขั้นตอนการยื่นประเมิน ขั้นตอนการยื่นประเมิน ขั้นตอนการยื่นประเมิน ขั้นตอนการยื่นประเมิน
    </p>
    </div>
    <div class="row">
    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="0">
    <div class="icon-box effect medium border small">
    <div class="icon">
    <a href="#"><i class="fa fa-plug"></i></a>
    </div>
    <h3 class="kanit">ขั้นตอนที่1</h3>
    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
    </p>
    </div>
    </div>
    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="200">
    <div class="icon-box effect medium border small">
    <div class="icon">
    <a href="#"><i class="fa fa-desktop"></i></a>
    </div>
    <h3 class="kanit">ขั้นตอนที่2</h3>
    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
    </p>
    </div>
    </div>
    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="400">
    <div class="icon-box effect medium border small">
    <div class="icon">
    <a href="#"><i class="fa fa-cloud"></i></a>
    </div>
    <h3 class="kanit">ขั้นตอนที่3</h3>
    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
    </p>
    </div>
    </div>
    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="600">
    <div class="icon-box effect medium border small">
    <div class="icon">
    <a href="#"><i class="far fa-lightbulb"></i></a>
    </div>
    <h3 class="kanit">ขั้นตอนที่4</h3>
    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
    </p>
    </div>
    </div>
    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="800">
    <div class="icon-box effect medium border small">
    <div class="icon">
    <a href="#"><i class="fa fa-trophy"></i></a>
    </div>
    <h3 class="kanit">ขั้นตอนที่5</h3>
    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
    </p>
    </div>
    </div>
    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1000">
    <div class="icon-box effect medium border small">
    <div class="icon">
    <a href="#"><i class="fa fa-thumbs-up"></i></a>
    </div>
    <h3 class="kanit">ขั้นตอนที่6</h3>
    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
    </p>
    </div>
    </div>
    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1200">
    <div class="icon-box effect medium border small">
    <div class="icon">
    <a href="#"><i class="fa fa-rocket"></i></a>
    </div>
    <h3 class="kanit">ขั้นตอนที่7</h3>
    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
    </p>
    </div>
    </div>
    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1400">
    <div class="icon-box effect medium border small">
    <div class="icon">
    <a href="#"><i class="fa fa-flask"></i></a>
    </div>
    <h3 class="kanit">ขั้นตอนที่8</h3>
    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
    </p>
    </div>
    </div>
    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1600">
    <div class="icon-box effect medium border small">
    <div class="icon">
    <a href="#"><i class="fa fa-umbrella"></i></a>
    </div>
    <h3 class="kanit">ขั้นตอนที่9</h3>
    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
    </p>
    </div>
    </div>
    </div>
    </div>
    </section>

{{-- <section class="p-t-60 p-b-40">
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="heading-text heading-line">
<h4>FOOD</h4>
</div>
<div class="post-thumbnail">
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/thrumb/1.png')}}">
<div class="post-thumbnail-content">
<span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Technology</span>
<h3><a href="#">Morbi ac neque at mi</a></h3>
<p>The most happiest time of the day!. Morbi ac neque at mi elementum gravida.</p>
</div>
</div>
</div>
<div class="post-thumbnail-list">
<div class="post-thumbnail-entry">
<div class="post-thumbnail-content">
<a href="#">A true story, that never been told!</a>
</div>
</div>
<div class="post-thumbnail-entry">
<div class="post-thumbnail-content">
<a href="#">Beautiful nature, and rare feathers!</a>
</div>
</div>
<div class="post-thumbnail-entry">
<div class="post-thumbnail-content">
<a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
</div>
</div>
 <div class="post-thumbnail-entry">
<div class="post-thumbnail-content">
<a href="#">Consectetur ipsum dolor sit amet</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="heading-text heading-line">
<h4>TECHNOLOGY</h4>
</div>
<div class="post-thumbnail">
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/thrumb/1.png')}}">
<div class="post-thumbnail-content">
<span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Technology</span>
<h3><a href="#">Fringilla consectetur amet</a></h3>
<p>The most happiest time of the day!. Morbi ac neque at mi elementum gravida.</p>
</div>
</div>
</div>
<div class="post-thumbnail-list">
<div class="post-thumbnail-entry">
<div class="post-thumbnail-content">
<a href="#">A true story, that never been told!</a>
</div>
</div>
<div class="post-thumbnail-entry">
<div class="post-thumbnail-content">
<a href="#">Beautiful nature, and rare feathers!</a>
</div>
</div>
<div class="post-thumbnail-entry">
<div class="post-thumbnail-content">
<a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
</div>
</div>
<div class="post-thumbnail-entry">
<div class="post-thumbnail-content">
<a href="#">Consectetur ipsum dolor sit amet</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="heading-text heading-line">
<h4>AUTO</h4>
</div>
<div class="post-thumbnail">
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/thrumb/1.png')}}">
<div class="post-thumbnail-content">
<span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Technology</span>
<h3><a href="#">Dolor sit amet ipsum</a></h3>
<p>The most happiest time of the day!. Morbi ac neque at mi elementum gravida.</p>
</div>
</div>
</div>
<div class="post-thumbnail-list">
<div class="post-thumbnail-entry">
<div class="post-thumbnail-content">
<a href="#">A true story, that never been told!</a>
</div>
</div>
<div class="post-thumbnail-entry">
 <div class="post-thumbnail-content">
<a href="#">Beautiful nature, and rare feathers!</a>
</div>
</div>
<div class="post-thumbnail-entry">
<div class="post-thumbnail-content">
<a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
</div>
</div>
<div class="post-thumbnail-entry">
<div class="post-thumbnail-content">
<a href="#">Consectetur ipsum dolor sit amet</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section> --}}

{{-- 
<section class="p-t-20 p-b-40">
<div class="container">
<div class="marketing-box">ADVERTISEMENT</div>
</div>
</section>


<section class="p-t-0 p-b-40">
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="heading-text heading-line">
<h4>TECH</h4>
</div>
<div class="post-thumbnail-list">
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/thrumb/1.png')}}">
<div class="post-thumbnail-content">
<a href="#">A true story, that never been told!</a>
<span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Technology</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/thrumb/1.png')}}">
<div class="post-thumbnail-content">
<a href="#">Beautiful nature, and rare feathers!</a>
<span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/3.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">The most happiest time of the day!</a>
<span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/4.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">Consectetur ipsum dolor sit amet</a>
<span class="post-date"><i class="far fa-clock"></i> 8h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
 </div>
</div>
<div class="col-lg-4">
<div class="heading-text heading-line">
<h4>SPORT</h4>
</div>
<div class="post-thumbnail-list">
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/5.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">A true story, that never been told!</a>
<span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Technology</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/6.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">Beautiful nature, and rare feathers!</a>
<span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/7.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">The most happiest time of the day!</a>
<span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/8.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">New costs and rise of the economy!</a>
<span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="heading-text heading-line">
<h4>FASHION</h4>
</div>
<div class="post-thumbnail-list">
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/1.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">A true story, that never been told!</a>
<span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Technology</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/2.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">Beautiful nature, and rare feathers!</a>
<span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
 <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/3.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">The most happiest time of the day!</a>
<span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/4.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">Consectetur ipsum dolor sit amet</a>
<span class="post-date"><i class="far fa-clock"></i> 8h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="p-t-0 p-b-40">
<div class="container">
<div class="marketing-box">ADVERTISEMENT</div>
</div>
</section>


<section class="p-t-0 p-b-40">
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="heading-text heading-line">
<h4>ENTERTAINMENT</h4>
</div>
<div class="post-thumbnail-list">
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/1.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">A true story, that never been told!</a>
<span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Technology</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/2.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">Beautiful nature, and rare feathers!</a>
<span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/3.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">The most happiest time of the day!</a>
<span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
<div class="post-thumbnail-entry">
 <img alt="" src="{{asset('assets/images/news/thumbnail/4.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">Consectetur ipsum dolor sit amet</a>
<span class="post-date"><i class="far fa-clock"></i> 8h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="heading-text heading-line">
<h4>NATURE</h4>
</div>
<div class="post-thumbnail-list">
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/5.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">A true story, that never been told!</a>
<span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Technology</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/6.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">Beautiful nature, and rare feathers!</a>
<span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/7.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">The most happiest time of the day!</a>
<span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/8.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">New costs and rise of the economy!</a>
<span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="heading-text heading-line">
<h4>POLITICS</h4>
</div>
<div class="post-thumbnail-list">
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/1.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">A true story, that never been told!</a>
<span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Technology</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/2.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">Beautiful nature, and rare feathers!</a>
<span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/3.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">The most happiest time of the day!</a>
<span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img alt="" src="{{asset('assets/images/news/thumbnail/4.jpg')}}">
<div class="post-thumbnail-content">
<a href="#">Consectetur ipsum dolor sit amet</a>
<span class="post-date"><i class="far fa-clock"></i> 8h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section> --}}


{{-- <div class="call-to-action call-to-action-colored background-colored m-b-0">
<div class="container">
<div class="col-lg-10">
<h3>Ready to purchase POLO Template?</h3>
<p>This is a simple hero unit, a simple call-to-action-style component for calling extra attention to featured content.</p>
</div>
<div class="col-lg-2"> <a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923" class="btn btn-light btn-outline">Purchase</a> </div>
</div>
</div> --}}

@include('layouts.footer')
@endsection

