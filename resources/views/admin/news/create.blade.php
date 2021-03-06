{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>{{$title}}</h1>
@stop

@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Yangilik qo'shish</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('admin.news.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Asosiy rasm</label>
                    <input type="file" class="form-control" name="image_url" placeholder="Rasm" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Sarlavha</label>
                    <input type="text" class="form-control" name="title" placeholder="Sarlavha" required>
                </div>
                <!-- textarea -->
                <div class="form-group">
                    <x-summernote id="desc" name="content"></x-summernote>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Qo'shish</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@stop
