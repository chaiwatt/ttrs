
<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="author" content="INSPIRO" />
<meta name="description" content="Themeforest Template Polo">
<link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>POLO | The Multi-Purpose HTML5 Template</title>

<link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/extend.css')}}" rel="stylesheet">
</head>
<body>

<div class="body-inner">
    <section class="fullscreen" style="background-image: url({{asset('assets/images/pages/2.png')}})">
        <div class="container container-fullscreen">
            <div class="text-middle">
                <div class="text-center m-b-30">
                    <a href="index.html" class="logo">
                    <img src="{{asset('assets/images/logo.png')}}" alt="Polo Logo">
                    </a>
                </div>
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
</div>


<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>

<script src="{{asset('assets/js/functions.js')}}"></script>
</body>
</html>