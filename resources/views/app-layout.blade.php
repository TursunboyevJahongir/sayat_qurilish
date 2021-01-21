<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#feed01"/>
    <title>Sayat Qurilish | Sanoat qurilish kompaniyasi</title>
    <meta name="author" content="Javlonbek Sharipov">
    <meta name="description" content="For all kind of construction company website">
    <meta name="keywords"
          content="consto, business, construction, company, industrial, building, projects, corporate, apartments, flat, condo, brick, website, design, animation, transition, themezinho">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="Consto | Industrial Construction Company">
    <meta property="og:image" content="http://www.themezinho.net/consto/preview.png">
    <meta property="og:site_name" content="consto">
    <meta property="og:title" content="consto">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.themezinho.net/consto">

    <!-- TWITTER META -->
{{--    <meta name="twitter:card" content="summary">--}}
{{--    <meta name="twitter:site" content="@consto">--}}
{{--    <meta name="twitter:creator" content="@consto">--}}
{{--    <meta name="twitter:title" content="consto">--}}
{{--    <meta name="twitter:description" content="Consto | Industrial Construction Company">--}}
{{--    <meta name="twitter:image" content="http://www.themezinho.net/consto/preview.png">--}}

<!-- FAVICON FILES -->
{{--    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">--}}
{{--    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">--}}
{{--    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">--}}
{{--    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">--}}
{{--    <link href="ico/favicon.png" rel="shortcut icon">--}}

<!-- CSS FILES -->
    <link rel="stylesheet" href="{{asset('css/lineicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="first-transition"></div>
<!-- end first-transition -->
<div class="page-transition"></div>
<!-- end page-transition -->
<div class="search-box">
    <div class="inner">
        <form>
            <input type="search" placeholder="Izlash uchun bosing">
            <input type="submit" value="Izlash">
        </form>
    </div>
</div>
<!-- end search-box -->
<aside class="side-widget">
    <div class="inner">
        <div class="logo"><a href="/"><img src="{{asset('logo.png')}}" alt="Image"></a></div>
        <!-- end logo -->
        <div class="hide-mobile">
            <h6 class="widget-title">MANZIL</h6>
            <address class="address">
                <p>Xorazm viloyati
                    Xiva tumani, Sayot</p>
                <p>+99890 111 22 33</p>
            </address>
        </div>
        <!-- end hide-mobile -->
        <div class="show-mobile">
            <!-- end languages -->
            <div class="site-menu">
                <ul>
                    <li><a href="{{route('home.about')}}">Kompaniya haqida</a>
                    </li>
                    <li><a href="{{route('project.index')}}">Loyihalar</a></li>
                    <li><a href="{{route('news.index')}}">Yangiliklar</a></li>
                    <li><a href="{{route('home.contacts')}}">Aloqa</a></li>
                </ul>
            </div>
            <!-- end site-menu -->
        </div>
        <!-- end show-mobile -->
        <small>© 2021 Sayat Qurilish</small></div>
    <!-- end inner -->
</aside>
<!-- end side-widget -->
<nav class="navbar">
    <div class="container">
        <div class="logo"><a href="/" style="color: #fff;text-decoration: none"><img src="{{asset('logo.png')}}"
                                                                                     alt="Image">&nbsp;&nbsp;Sayat
                Qurilish</a></div>
        <div class="site-menu">
            <ul>
                <li><a href="{{route('home.about')}}">Kompaniya haqida</a></li>
                <li><a href="{{route('catalog.index')}}">Katalog</a></li>
                <li><a href="{{route('project.index')}}">Loyihalar</a></li>
                <li><a href="{{route('news.index')}}">Yangiliklar</a></li>
            </ul>
        </div>

        <div class="hamburger">
            <div id="hamburger"><span></span> <span></span> <span></span></div>
            <div id="cross"><span></span> <span></span></div>
        </div>
        <!-- end hamburger -->
        <!-- end hamburher -->
        <a href="{{route('home.contacts')}}" class="navbar-button"><i class="lni lni-mobile"></i> <span>BIZ BILAN BOG'LANING</span></a>
    </div>
    <!-- end container -->
</nav>
@yield('content')


<section class="footer-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="logo"><img src="{{asset('logo.png')}}" alt="Image"> Sayat Qurilish</figure>
                <h2><b>Yaxshi</b> va <b>chiroyli</b> yashang</h2>
                <div class="button">ALOQA UCHUN <i class="lni lni-arrow-right"></i></div>
                <div class="sales-representive">
                    <figure><img src="/images/author01.jpg" alt="Image"></figure>
                    Telefon raqam <b>+99862-225-62-63</b></div>
                <!-- end sales-representive -->
            </div>
            <!-- end col-12  -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <h6 class="widget-title">BOSH OFIS</h6>
                <address>
                    <p>Xorazm viloyati<br>
                        Xiva tumani, Sayot</p>
                    <p>+99862-225-62-63</p>
                </address>
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4 col-md-6">
                <h6 class="widget-title">Ma'lumot</h6>
                <address>
                    <p>Guvohnoma № 325571<br>
                    </p>
                </address>
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4">
                <h6 class="widget-title">Savol bormi?</h6>
                <p><a href="{{route('home.contacts')}}" class="btn btn-light">XABAR YUBORISH</a></p>
            </div>
            <!-- end col-4 -->
            <div class="col-12">
                <div class="footer-bottom"><span>© 2021 "Sayat Kurilish" MChJ</span>
                </div>
                <!-- end footer-bottom -->
            </div>
            <!-- end col-12  -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <a href="#" class="scroll-top"><i class="lni lni-arrow-up"></i> <small>Yuqoriga</small> </a>
    <!-- end scroll-top -->
</footer>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/swiper.min.js')}}"></script>
<script src="{{asset('js/fancybox.min.js')}}"></script>
<script src="{{asset('js/odometer.min.js')}}"></script>
<script src="{{asset('js/isotope.min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>
