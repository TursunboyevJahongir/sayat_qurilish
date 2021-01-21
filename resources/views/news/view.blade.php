<?php
/**
 * @var \App\Models\Projects $project
 */
?>
@extends('app-layout')
@section('content')
    <header class="page-header">
        <div class="container">
            <h1>{{\Illuminate\Support\Str::limit($news->title, 30, '...')}}</h1>
            <ul>
                <li><a href="/">BOSH SAHIFA</a></li>
                <li><a href="{{route('news.index')}}">YANGILIKLAR</a></li>
                <li>{{\Illuminate\Support\Str::limit($news->title, 30, '...')}}</li>
            </ul>
        </div>
        <!-- end container -->
    </header>
    <section class="content-section">
        <div class="container">
            <div class="text-center mb-3">
                <img src="{{$news->image_url}}" alt="Image">
            </div>
            {{$news->content}}
        </div>
        <ul>

        </ul>
    </section>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="/">BOSH SAHIFA</a></li>
                <li class="breadcrumb-item"><a href="{{route('news.index')}}">YANGILIKLAR</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{\Illuminate\Support\Str::limit($news->title, 30, '...')}}</li>
            </ol>
        </nav>
    </div>
@endsection
