@extends('layouts.main')

@section('content')
    
{{-- @include('layouts.slide') --}}
{{-- @include('layouts.nav') --}}
{{-- @include('layouts.news') --}}

<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
        
        <div class="content col-lg-9">
        
        <div id="blog" class="single-post">
        
        <div class="post-item">
        <div class="post-item-wrap">
        <div class="post-image">
        <a href="#">
        <img alt="" src="{{asset('assets/images/news/feature.png')}}">
        </a>
        </div>
        <div class="post-item-description">
        <h2 class='kanit'>สวทช. จับมือ ปตท.สผ. หนุนการพัฒนา EECi ร่วมพัฒนานวัตกรรม ตอบโจทย์ประเทศไทย 4.0</h2>
        <div class="post-meta">
        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>ก.พ. 21, 2020</span>
        <span class="post-meta-comments"><a href="#" class="kanit"><i class="fa fa-comments-o"></i>1 ความคิดเห็น</a></span>
        <span class="post-meta-category"><a href="#" class="kanit"><i class="fa fa-tag"></i>บทความ</a></span>
        <div class="post-meta-share">
        <a class="btn btn-xs btn-slide btn-facebook" href="#">
        <i class="fab fa-facebook-f"></i>
        <span>Facebook</span>
        </a>
        <a class="btn btn-xs btn-slide btn-twitter" href="#" data-width="100">
        <i class="fab fa-twitter"></i>
        <span>Twitter</span>
        </a>
        {{-- <a class="btn btn-xs btn-slide btn-instagram" href="#" data-width="118">
        <i class="fab fa-instagram"></i>
        <span>Instagram</span>
        </a> --}}
        <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:#" data-width="80">
        <i class="icon-mail"></i>
        <span>Mail</span>
        </a>
        </div>
        </div>
        <p class="kanit">21 กุมภาพันธ์ 2563 ณ อุทยานวิทยาศาสตร์ประเทศไทย จังหวัดปทุมธานี : บริษัท ปตท.สำรวจและผลิตปิโตรเลียม จำกัด (มหาชน) จับมือ สำนักงานพัฒนาวิทยาศาสตร์และเทคโนโลยีแห่งชาติ (สวทช.) ลงนามความร่วมมือการสนับสนุนการพัฒนาเขตนวัตกรรมระเบียงเศรษฐกิจพิเศษภาคตะวันออก (Eastern Economic Corridor of Innovation: EECi) เพื่อร่วมวิจัยและพัฒนานวัตกรรมที่ตอบโจทย์ความต้องการของภาคอุตสาหกรรม 4.0 โดยมี นายพงศธร ทวีสิน ประธานเจ้าหน้าที่บริหารและกรรมการผู้จัดการใหญ่ บริษัท ปตท.สำรวจและผลิตปิโตรเลียม จำกัด (มหาชน) และ ดร.ณรงค์ ศิริเลิศวรกุล ผู้อำนวยการสำนักงานพัฒนาวิทยาศาสตร์และเทคโนโลยีแห่งชาติ (สวทช.) ร่วมลงนาม</p>

        <p class="kanit"> การลงนามความร่วมมือการสนับสนุนการพัฒนาเขตนวัตกรรมระเบียงเศรษฐกิจพิเศษภาคตะวันออก (EECi) ในครั้งนี้ ปตท.สผ. และ สวทช. จะดำเนินกิจกรรมวิจัยและพัฒนาเทคโนโลยีและนวัตกรรมร่วมกัน ทั้งด้านองค์ความรู้ การพัฒนาด้านบุคลากร โครงสร้างพื้นฐาน เพื่อตอบโจทย์ทางธุรกิจและช่วยยกระดับอุตสาหกรรมของประเทศต่อไปในอนาคต</p>
        <p class="kanit">ดร.ณรงค์ ศิริเลิศวรกุล ผู้อำนวยการสำนักงานพัฒนาวิทยาศาสตร์และเทคโนโลยีแห่งชาติ (สวทช.)กล่าวว่า สวทช. หน่วยงานวิจัยและพัฒนา ในฐานะที่เป็นผู้บริหารโครงการ EECi ได้ดำเนินงานร่วมกับพันธมิตรต่าง ๆ โดยมีความก้าวหน้าเป็นอย่างมาก สำหรับความร่วมมือกับ ปตท.สผ. ในครั้งนี้ เป็นการประสานประโยชน์ร่วมกันในการเป็นพันธมิตรร่วมทางที่ดี ซึ่ง สวทช. ให้ความสำคัญในเรื่องนี้เป็นอย่างมาก และมุ่งเน้นถึงประโยชน์ของ EECi ที่จะเกิดขึ้นกับการพัฒนาเทคโนโลยีเพื่ออุตสาหกรรมยุค 4.0 การพัฒนาอุตสาหกรรมหุ่นยนต์เพื่ออุตสาหกรรมและระบบอัตโนมัติ และการยกระดับขีดความสามารถด้านการวิจัย พัฒนา และนวัตกรรม ในสาขาต่าง ๆ ของทั้งสองฝ่ายและภาคส่วนอื่น ๆ ของประเทศ รวมถึงสนับสนุนข้อมูลและองค์ความรู้ ตลอดจนบุคลากรและทรัพยากรที่เหมาะสม เพื่อวางแผนขับเคลื่อนและการพัฒนา EECi พัฒนากำลังคนและโครงสร้างพื้นฐานด้านวิทยาศาสตร์ เทคโนโลยีและนวัตกรรม (วทน.) ของประเทศใน EECi และดำเนินกิจกรรมวิจัยและนวัตกรรมร่วมกัน รวมถึงให้บริการที่เกี่ยวข้องเพื่อส่งเสริมสนับสนุนกิจกรรมวิจัยและนวัตกรรมในพื้นที่ EECi</p>
        
        </div>
        <div class="post-tags">
        <a href="#">tag1</a>
        <a href="#">tag2</a>
        <a href="#">tag3</a>
        <a href="#">tag4</a>
        </div>
        {{-- <div class="post-navigation">
        <a href="blog-single-slider.html" class="post-prev">
        <div class="post-prev-title"><span>Previous Post</span>Post with a slider and lightbox</div>
        </a>
        <a href="blog-masonry-3.html" class="post-all">
        <i class="icon-grid"> </i>
        </a>
        <a href="blog-single-video.html" class="post-next">
        <div class="post-next-title"><span>Next Post</span>Post with YouTube Video</div>
        </a>
        </div> --}}
        
        <div class="comments" id="comments">
        <div class="comment_number">
        ความคิดเห็น <span>(1)</span>
        </div>
        <div class="comment-list">
        
        <div class="comment" id="comment-1">
         <div class="image"><img alt="" src="images/blog/author.jpg" class="avatar"></div>
        <div class="text">
        <h5 class="name kanit">นายทดสอบ</h5>
        <span class="comment_date kanit">15:32น, 06 กุมภาพันธ์</span>
        <a class="comment-reply-link kanit" href="#">ตอบกลับ</a>
        <div class="text_holder">
        <p class='kanit'>ทดสอบ ทดสอบ ทดสอบ ทดสอบ ทดสอบ ทดสอบ ทดสอบ ทดสอบ ทดสอบ ทดสอบ ทดสอบ ทดสอบ ทดสอบ ทดสอบ ทดสอบ ทดสอบ ทดสอบ ทดสอบ ทดสอบ ทดสอบ ทดสอบ</p>
        </div>
        </div>


        
        </div>
         
        
        
        </div>
        </div>
        
        <div class="respond-form" id="respond">
        <div class="respond-comment">
        แสดงความคิดเห็น</div>
        <form class="form-gray-fields">
        <div class="row">
        <div class="col-lg-4">
        <div class="form-group">
        <label class="upper" for="name">ชื่อ</label>
        <input class="form-control required" name="senderName" placeholder="ชื่อ" id="name" aria-required="true" type="text">
        </div>
        </div>
        <div class="col-lg-4">
        <div class="form-group">
        <label class="upper" for="email">อีเมล์</label>
        <input class="form-control required email" name="senderEmail" placeholder="อีเมล์" id="email" aria-required="true" type="email">
        </div>
        </div>
        <div class="col-lg-4">
        <div class="form-group">
        <label class="upper" for="website">เว็บไซต์</label>
        <input class="form-control website" name="senderWebsite" placeholder="เว็บไซต์" id="website" aria-required="false" type="text">
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
        <div class="form-group">
        <label class="upper" for="comment">ความคิดเห็น</label>
        <textarea class="form-control required" name="comment" rows="9" placeholder="ความคิดเห็น" id="comment" aria-required="true"></textarea>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
        <div class="form-group text-center">
        <button class="btn kanit" type="submit">แสดงความเห็น</button>
        </div>
        </div>
        </div>
        </form>
        </div>
        </div>
        </div>
        
        </div>
        </div>
        
        
        @include('layouts.right')
        
        </div>
        </div>
    </section> 




@endsection

