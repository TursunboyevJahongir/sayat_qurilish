<?php
/**
 * @var \Illuminate\Contracts\Pagination\LengthAwarePaginator $projects
 */
?>
@extends('app-layout')
@section('content')
    <header class="page-header">
        <div class="container">
            <h1>KATALOG</h1>
            <ul>
                <li><a href="/">BOSH SAHIFA</a></li>
                <li>KATALOG</li>
            </ul>
        </div>
        <!-- end container -->
    </header>
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                   <div class="row">
                       <?php
                       /**
                        * @var \App\Models\Projects $project
                        */
                       ?>
                       @foreach($items as $item)
                           <div class="col-lg-6 mb-2">
                               <div class="recent-news">
                                   <figure> <img class="img-fluid" src="{{$item->image}}" alt="Image"> </figure>
                                   <div class="content"> <small>{{$item->created_at->format('d.m.Y')}}</small>
                                       <h3><a href="{{route('catalog.view', ['id' => $item->id])}}">{{\Illuminate\Support\Str::limit($item->title, 16, '...')}}</a></h3>
                                       <!-- end author -->
                                   </div>
                                   <!-- end content -->
                               </div>
                               <!-- end recent-news -->
                           </div>
                       @endforeach
                   </div>
                    {{$items->links()}}
                </div>
                <div class="col-md-4">
                    @include('catalog.sidebar')
                </div>
            </div>

        </div>
        <!-- end container -->
    </section>

@endsection
