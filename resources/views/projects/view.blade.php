<?php
/**
 * @var \App\Models\Projects $project
 */
?>
@extends('app-layout')
@section('content')
    <header class="page-header">
        <div class="container">
            <h1>{{$project->title}}</h1>
            <ul>
                <li><a href="/">BOSH SAHIFA</a></li>
                <li><a href="{{route('project.index')}}">LOYIHALAR</a></li>
                <li>{{$project->title}}</li>
            </ul>
        </div>
        <!-- end container -->
    </header>
    <section class="content-section">
        <div class="container">
            <div class="text-center mb-3">
                <img src="{{$project->image_url}}" alt="Image">
            </div>
            {{$project->description}}
        </div>
        <ul>

        </ul>
    </section>
   <div class="container">
       <nav aria-label="breadcrumb">
           <ol class="breadcrumb bg-transparent">
               <li class="breadcrumb-item"><a href="/">BOSH SAHIFA</a></li>
               <li class="breadcrumb-item"><a href="{{route('project.index')}}">LOYIHALAR</a></li>
               <li class="breadcrumb-item active" aria-current="page">{{$project->title}}</li>
           </ol>
       </nav>
   </div>
@endsection
