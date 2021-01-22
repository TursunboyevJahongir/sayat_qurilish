{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>{{$post->category->short_title}}</h1>
@stop

@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Elementini tahrirlash</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('admin.post.update', ['post' => $post->id])}}" method="post"
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
                    <label for="exampleInputEmail1">Sarlavha </label>
                    <input type="text" class="form-control" name="title" value="{{$post->title}}" placeholder="Sarlavha" required>
                </div>
                <!-- textarea -->
                <div class="form-group">
                    <x-summernote id="desc" name="description" :text="$post->description"></x-summernote>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-body">
                <div class="form-group row">
                    <div class="product-image-thumb active">
                        <img src="{{'/uploads/'.$post->image_url}}"
                             alt="Product Image">
                    </div>
                    <div class="com-11">
                        <label for="exampleInputFile">Rasmi</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" accept="image/*" class="custom-file-input" name="image_url"
                                       id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Rasmni tanlang</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Yangilash</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
