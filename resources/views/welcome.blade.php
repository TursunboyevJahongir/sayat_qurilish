@extends('app-layout')

@section('content')
    <header class="slider white-space-bottom">
        <div class="container">
            <div class="swiper-container slider-content">
                <div class="swiper-wrapper">
                    <?php
                    /**
                     * @var \App\Models\Slideshow[] $slides
                     */
                    ?>
                    @foreach($slides as $slide)
                        <div class="swiper-slide">
                            <div class="inner">
                                <h2>{{\Illuminate\Support\Str::limit($slide->title, 100, '...')}}</h2>
                            </div>
                        </div>
                    @endforeach
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
                    @foreach($slides  as $slide)
                        <div class="swiper-slide">
                            <div class="slide-image" data-background="{{$slide->image}}"></div>
                        </div>
                    @endforeach
                </div>
                <!-- end swiper-wrapper -->
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
                    <p>Bizning turli xil portfelimiz sifatli, mijozlarga xizmat ko'rsatish sohasidagi ajoyib
                        texnologiyalarga bo'lgan ishtiyoq bilan ta'minlangan o'nlab yillik qurilish tajribasini aks
                        ettiradi.</p>
                </div>
                <!-- end col-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="swiper-container project-slider">
            <div class="swiper-wrapper">
                @foreach($projects as $project)
                    <div class="swiper-slide">
                        <figure class="project-box"><a href="{{route('project.view', ['id' => $project->id])}}"><img
                                    src="{{$project->image ?? asset('images/slide03.jpg')}}" alt="Image"></a>
                            <figcaption>
                                <a href="{{route('project.view', ['id' => $project->id])}}"><h5>{{$project->title}}</h5>
                                </a>
                                <p>{{$project->short_description}}</p>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <!-- end project-slider -->
    </section>
    @if (!empty($data))
        <section class="content-section ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="counter-box"><span class="odometer odometer-auto-theme"
                                                       data-count="{{$data->workers_count}}"
                                                       data-status="yes"><div class="odometer-inside"><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span
                                                        class="odometer-value">3</span></span></span></span></span><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span
                                                        class="odometer-value">3</span></span></span></span></span></div></span>
                            <span class="value"> ta</span>
                            <p><h6>Ishchilar soni</h6></p>
                        </div>
                        <!-- end counter-box -->
                    </div>
                    <!-- end col-3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="counter-box"><span class="odometer odometer-auto-theme"
                                                       data-count="{{$data->firm_year}}"
                                                       data-status="yes"><div class="odometer-inside"><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span
                                                        class="odometer-value">2</span></span></span></span></span><span
                                        class="odometer-formatting-mark">,</span><span class="odometer-digit"><span
                                            class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span
                                                class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                                                        class="odometer-value">0</span></span></span></span></span><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span
                                                        class="odometer-value">2</span></span></span></span></span><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span
                                                        class="odometer-value">1</span></span></span></span></span></div></span>
                            <span class="value">-yil</span>
                            <p><h6>Firma tashkil topgan</h6></p>
                        </div>
                        <!-- end counter-box -->
                    </div>
                    <!-- end col-3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="counter-box"><span class="odometer odometer-auto-theme"
                                                       data-count="{{$data->projects_count}}"
                                                       data-status="yes"><div class="odometer-inside"><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span
                                                        class="odometer-value">2</span></span></span></span></span><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span
                                                        class="odometer-value">4</span></span></span></span></span><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span
                                                        class="odometer-value">7</span></span></span></span></span></div></span>
                            <span class="value">ta</span>
                            <p><h6>Bitkazilgan loyihalar</h6></p>
                        </div>
                        <!-- end counter-box -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
    @endif

    <section class="content-section no-spacing">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="section-title text-left">
                        <h6>Katalog</h6>
                        <h2>Xizmatlar katalogi</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                @foreach($categories as $category)
                    <div class="col-lg-4 col-md-6"><a href="{{route('catalog.category', ['id' => $category->id])}}"
                                                      class="sector-box"> <span>{{$category->title}}</span> <i
                                class="lni lni-arrow-right"></i> </a></div>
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h6>Xodimlar</h6>
                        <h2>Boshqaruvchi xodimlar</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
            <div class="row no-gutters">
                <?php
                /**
                 * @var \App\Models\Employer[] $workers
                 */
                ?>
                @foreach($workers as $worker)
                    <div class="col">
                        <div class="sales-team">
                            <figure><img src="{{$worker->image}}" alt="Image"></figure>
                            <div class="infos">
                                <h6>{{$worker->full_name}}</h6>
                                <small>{{$worker->role}}</small>
                            </div>
                            <!-- end infos -->
                        </div>
                        <!-- end sales-team -->
                    </div>
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>


    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h6>Erishilgan yangilanishlar</h6>
                        <h2>Oxirgi yangiliklar</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <div class="col-lg-5">
                    <?php
                    /**
                     * @var \App\Models\News[] $news
                     */
                    ?>
                    @foreach($news as $new)
                        @if($loop->index === 0)
                            <div class="recent-news">
                                <figure><img src="{{$new->image}}" alt="Image"></figure>
                                <div class="content"><small>{{$new->created_at}}</small>
                                    <h3>
                                        <a href="{{route('news.view', ['id' => $new->id])}}">{{\Illuminate\Support\Str::limit($new->title, 27, '...')}}</a>
                                    </h3>
                                    <!-- end author -->
                                </div>
                                <!-- end content -->
                            </div>
                    @endif
                @endforeach
                <!-- end recent-news -->
                </div>
                <!-- end col-5 -->
                <div class="col-lg-7">
                    <div class="row inner">
                        @foreach($news as $new)
                            @if($loop->index !== 0)
                                <div class="col-md-6">
                                    <div class="recent-news">
                                        <figure><img src="{{$new->image}}" alt="Image"></figure>
                                        <div class="content"><small>{{$new->created_at}}</small>
                                            <h3>
                                                <a href="{{route('news.view', ['id' => $new->id])}}">{{\Illuminate\Support\Str::limit($new->title, 16, '...')}}</a>
                                            </h3>
                                            <!-- end author -->
                                        </div>
                                        <!-- end content -->
                                    </div>
                                </div>
                        @endif
                    @endforeach
                    <!-- end col-4 -->
                    </div>
                    <!-- end row inner -->
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
@endsection

