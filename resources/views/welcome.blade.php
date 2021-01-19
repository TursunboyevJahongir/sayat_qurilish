@extends('app-layout')

@section('content')
    <header class="slider white-space-bottom">
        <div class="container">
            <div class="swiper-container slider-content">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="inner">
                            <h2>Orzularingizni  <b>ro'yobga</b> chiqaring</h2>
                            <p>Biz oilalar qulay yashashi uchun mo'ljallangan binolarni qurmoqdamiz</p>
                            <a href="#">BARCHASINI KO'RISH <i class="lni lni-arrow-right"></i></a> </div>
                        <!-- end inner -->
                    </div>
                    <!-- end swiper-slide -->
                    <div class="swiper-slide">
                        <div class="inner">
                            <h2>All <b>Smart</b> Apartments</h2>
                            <p>We building ambientic living spaces for families</p>
                            <a href="#">SEE ALL CATALOGUE <i class="lni lni-arrow-right"></i></a> </div>
                        <!-- end inner -->
                    </div>
                    <!-- end swiper-slide -->
                    <div class="swiper-slide">
                        <div class="inner">
                            <h2>Mock <b>Living</b> Environment</h2>
                            <p>We building ambientic living spaces for families</p>
                            <a href="#">DISCOVER CONSTO <i class="lni lni-arrow-right"></i></a> </div>
                        <!-- end inner -->
                    </div>
                    <!-- end swiper-slide -->
                </div>
                <!-- end swiper-wrapper -->
                <div class="controls">
                    <div class="swiper-pagination"></div>
                    <!-- end swiper-pagination -->
                    <div class="button-prev"><i class="lni lni-arrow-left"></i></div>
                    <!-- end button-prev -->
                    <div class="button-next"><i class="lni lni-arrow-right"></i></div>
                    <!-- end button-next -->
                </div>
                <!-- end controls -->

            </div>
            <!-- end slider-content -->
            <div class="swiper-container slider-main">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-image" data-background="{{asset('images/slide01.jpg')}}"></div>
                    </div>
                    <!-- end swiper-slide -->
                    <div class="swiper-slide">
                        <div class="slide-image" data-background="{{asset('images/slide02.jpg')}}"></div>
                    </div>
                    <!-- end swiper-slide -->
                    <div class="swiper-slide">
                        <div class="slide-image" data-background="{{asset('images/slide03.jpg')}}"></div>
                    </div>
                    <!-- end swiper-slide -->
                </div>
                <!-- end swiper-wrapper -->
                <div class="header-box"> <b>27</b> <small>YILLIK TAJRIBA</small> </div>
                <!-- end header-box -->
            </div>
            <!-- end slider-main -->
        </div>
        <!-- end container -->
    </header>

    <section class="content-section white-space-bottom" data-background="#f7f6f1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title text-left">
                        <h6>SAYAT QURILISH</h6>
                        <h2>BIZNING LOYIHALAR</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-7 -->
                <div class="col-lg-5">
                    <p>Bizning turli xil portfelimiz sifatli, mijozlarga xizmat ko'rsatish sohasidagi ajoyib texnologiyalarga bo'lgan ishtiyoq bilan ta'minlangan o'nlab yillik qurilish tajribasini aks ettiradi.</p>
                </div>
                <!-- end col-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="swiper-container project-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <figure class="project-box"> <a href="#"><img src="images/slide02.jpg" alt="Image"></a>
                        <figcaption>
                            <h5>Life Science Center</h5>
                            <p>The building opened in 2020 and includes more than 120+ flats</p>
                        </figcaption>
                    </figure>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <figure class="project-box"> <a href="#"><img src="images/slide03.jpg" alt="Image"></a>
                        <figcaption>
                            <h5>Life Science Center</h5>
                            <p>The building opened in 2020 and includes more than 120+ flats</p>
                        </figcaption>
                    </figure>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <figure class="project-box"> <a href="#"><img src="images/slide01.jpg" alt="Image"></a>
                        <figcaption>
                            <h5>Life Science Center</h5>
                            <p>The building opened in 2020 and includes more than 120+ flats</p>
                        </figcaption>
                    </figure>
                </div>
                <!-- end swiper-slide -->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <!-- end project-slider -->
    </section>

@endsection

