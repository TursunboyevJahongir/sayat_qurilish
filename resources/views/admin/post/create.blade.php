{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>{{__('post.add')}}</h1>
@stop

@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('post.create') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">The name of the district </label>
                    <input type="text" class="form-control" name="title[en]" placeholder="in English" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Название региона</label>
                    <input type="text" class="form-control" name="title[ru]" placeholder="на Русском" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tuman nomi</label>
                    <input type="text" class="form-control" name="title[uz]" placeholder="O'zbekchada" required>
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
