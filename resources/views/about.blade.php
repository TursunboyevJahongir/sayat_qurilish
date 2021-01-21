<?php
/**
 * @var \App\Models\Data $data
 */
?>
@extends('app-layout')
@section('content')
    <header class="page-header">
        <div class="container">
            <h1>Kompaniya haqida</h1>
            <ul>
                <li><a href="/">BOSH SAHIFA</a></li>
                <li>Kompaniya haqida</li>
            </ul>
        </div>
        <!-- end container -->
    </header>
    <section class="content-section">
        <div class="container">
            {{$data->about ?? "Ma'lumot yo'q"}}
        </div>
        <ul>

        </ul>
    </section>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="/">BOSH SAHIFA</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kompaniya haqida</li>
            </ol>
        </nav>
    </div>
@endsection
