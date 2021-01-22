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
            <h3 class="card-title"></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('admin.category.create') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kategoriya nomi</label>
                    <input type="text" class="form-control" name="title" placeholder="Kategoriya nomi" required>
                </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                @if($error == "The title has already been taken.")
                                    <div class="alert alert-danger" role="alert">
                                        Bunday nomdagi Kategoriya mavjud
                                    </div>
                                @else
                                    <div class="alert alert-danger" role="alert">
                                        {{ $error }}
                                    </div>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Qo'shish</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@stop

