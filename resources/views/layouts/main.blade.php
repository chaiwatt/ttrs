
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="author" content="INSPIRO" />
<meta name="description" content="Themeforest Template Polo">
<link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>TTRS</title>
<link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/extend.css')}}" rel="stylesheet">
<link href="css/color-variations/red-dark.html" rel="stylesheet" type="text/css" media="screen" title="blue">
</head>

<body >
    <div class="body-inner">
        <div id="topbar" class="d-none d-xl-block d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="topbar-dropdown">
                            <a class="title">ไทย <i class="fa fa-caret-down"></i></a>
                            <div class="dropdown-list">
                                <a class="list-entry" href="#">ไทย</a>
                                <a class="list-entry" href="#">English</a>
                            </div>
                        </div>
                        <div class="topbar-dropdown">
                            <div class="title"><i class="fa fa-user"></i><a href="#">เข้าสู่ระบบ</a></div>
                            <div class="topbar-form">
                                <form>
                                    <div class="form-group">
                                        <label class="sr-only">Username or Email</label>
                                        <input type="text" placeholder="Username or Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Password</label>
                                        <input type="password" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="form-inline form-group"> 
                                        <div class="form-check">
                                            <label>
                                            <input type="checkbox">
                                        </div>
                                        <button type="button" class="btn btn-primary btn-block">เข้าสู่ระบบ</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="topbar-dropdown">
                            <div class="title"><i class="fa fa-sun-o"></i>กรุงเทพมหานคร 35°</div>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-sm-block">
                        <div class="social-icons social-icons-colored-hover">
                            <ul>
                                <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-google"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <header id="header" class="dark">
            <div class="header-inner">
                <div class="container">
                    <div id="logo"> <a href="index.html"><span class="logo-default">TTRS</span><span class="logo-dark">TT<span style="color:#f00728">RS</span></span></a> </div>
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                        <form class="search-form" action="https://inspirothemes.com/polo/search-results-page.html" method="get">
                            <input class="form-control" name="q" type="search" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div> 
                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li ><a href="index.html" class="topkanit">หน้าแรก</a></li>
                                    <li class="dropdown"><a href="#" class="topkanit">แนะนำ สวทช.</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="preview/index.html" class="topkanit">โครงสร้างองค์กร</a></li>
                                            <li><a href="preview/index.html" class="topkanit">ทำเนียบผู้บริหาร</a></li>
                                            <li><a href="preview/index.html" class="topkanit">กวทช.</a></li>
                                            <li><a href="preview/index.html" class="topkanit">สถิติ</a></li>
                                        </ul>
                                    </li>
                                    <li ><a href="index.html" class="topkanit">กองทุนพัฒนา ว และ ท</a></li>
                                    <li ><a href="index.html" class="topkanit">งานเพื่ออุตสาหกรรม</a></li>
                                    <li ><a href="index.html" class="topkanit">งานเพื่อสังคม</a></li>
                                    <li ><a href="index.html" class="topkanit">บริการจากสวทช.</a></li>
                                    <li class="dropdown"><a href="#" class="topkanit">ติดต่อสวทช.</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="preview/index.html" class="topkanit">สอบถามข้อมูล</a></li>
                                            <li><a href="preview/index.html" class="topkanit">ข้อเสนอแนะ</a></li>
                                            <li><a href="preview/index.html" class="topkanit">ข้อร้องเรียนทั่วไป</a></li>
                                            <li><a href="preview/index.html" class="topkanit">ร้องเรียนเกี่ยวกับจริยธรรมวิจัย</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        {{-- @include('layouts.footer') --}}
    
    </div>

    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/functions.js')}}"></script>
</body>

</html>