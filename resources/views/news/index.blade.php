<?php
/**
 * @var \Illuminate\Contracts\Pagination\LengthAwarePaginator $projects
 */
?>
@extends('app-layout')
@section('content')
    <header class="page-header">
        <div class="container">
            <h1>YANGILIKLAR</h1>
            <ul>
                <li><a href="/">BOSH SAHIFA</a></li>
                <li>YANGILIKLAR</li>
            </ul>
        </div>
        <!-- end container -->
    </header>
    <section class="content-section">
        <div class="container">
            <div class="row">
                <?php
                /**
                 * @var \App\Models\News $news
                 */
                ?>
                @foreach($news as $new)
                    <div class="col-lg-4 mb-2">
                        <div class="recent-news">
                            <figure> <img class="img-fluid" src="{{$new->image_url}}" alt="Image"> </figure>
                            <div class="content"> <small>{{$new->created_at->format('d.m.Y')}}</small>
                                <h3><a href="{{route('news.view', ['id' => $new->id])}}">{{\Illuminate\Support\Str::limit($new->title, 16, '...')}}</a></h3>
                                <!-- end author -->
                            </div>
                            <!-- end content -->
                        </div>
                        <!-- end recent-news -->
                    </div>
            @endforeach
            <!-- end col-5 -->
            </div>
            <!-- end row -->
            {{$news->links()}}
        </div>
        <!-- end container -->
    </section>

@endsection
