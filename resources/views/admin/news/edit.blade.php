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
            <h3 class="card-title">Xodim haqqidagi malumotlarni tahrirlash</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('admin.news.update', ['news' => $news->id])}}" method="post"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                    <label for="file">Asosiy rasm (majburiy emas)</label>
                    <input type="file" id="file" class="form-control" name="image_url" placeholder="Rasm">
                </div>
                <div class="form-group">
                    <label for="title">Mavzusi</label>
                    <input type="text" id="title" class="form-control" name="title" value="{{$news->title}}" placeholder="Mavzu" required>
                </div>
                <!-- textarea -->
                <div class="form-group">
                    <x-summernote id="desc" name="content" :text="$news->content"></x-summernote>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Yangilash</button>
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
