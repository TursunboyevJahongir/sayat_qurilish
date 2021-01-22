<?php
/**
 * @var \Illuminate\Contracts\Pagination\LengthAwarePaginator $projects
 */
?>
@extends('app-layout')
@section('content')
    <header class="page-header">
        <div class="container">
            <h1>LOYIHALAR</h1>
            <ul>
                <li><a href="/">BOSH SAHIFA</a></li>
                <li>LOYIHALAR</li>
            </ul>
        </div>
        <!-- end container -->
    </header>
    <section class="content-section">
        <div class="container">
            <div class="row">
            <?php
                /**
                 * @var \App\Models\Projects $project
                 */
                ?>
            @foreach($projects as $project)
                    <div class="col-lg-4 mb-2">
                        <div class="recent-news">
                            <figure> <img class="img-fluid" src="{{$project->image}}" alt="Image"> </figure>
                            <div class="content"> <small>{{$project->created_at->format('d.m.Y')}}</small>
                                <h3><a href="{{route('project.view', ['id' => $project->id])}}">{{\Illuminate\Support\Str::limit($project->title, 16, '...')}}</a></h3>
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
            {{$projects->links()}}
        </div>
        <!-- end container -->
    </section>

@endsection
