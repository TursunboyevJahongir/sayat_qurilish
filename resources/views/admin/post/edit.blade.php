{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>{{__('post.edit')}}</h1>
@stop

@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('post.update', ['post' => $region->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">The name of the region </label>
                    <input type="text" class="form-control" name="title[en]" placeholder="in English"
                           value="{{$region->title['en']}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Название региона</label>
                    <input type="text" class="form-control" name="title[ru]" placeholder="на Русском"
                           value="{{$region->title['ru']}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Viloyat nomi</label>
                    <input type="text" class="form-control" name="title[uz]" placeholder="O'zbekchada"
                           value="{{$region->title['uz']}}" required>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{__('post.submit')}}</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
