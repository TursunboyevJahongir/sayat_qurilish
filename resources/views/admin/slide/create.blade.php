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
            <h3 class="card-title">Xodim qo'shish</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('admin.slide.create') }}" method="post"
              enctype="multipart/form-data">
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
                    <label for="exampleInputEmail1">Matni</label>
                    <input type="text" class="form-control" name="title" placeholder="Matni.." required>
                </div>
                <!-- textarea -->
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputFile">Rasmi</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" accept="image/*" class="custom-file-input" name="image_url"
                                   id="exampleInputFile" required>
                            <label class="custom-file-label" for="exampleInputFile">Rasmni Kiriting</label>
                        </div>
                    </div>
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

@section('js')
    <script> console.log('Hi!'); </script>
@stop
