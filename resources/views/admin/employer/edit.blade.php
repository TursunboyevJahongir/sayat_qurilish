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
        <form role="form" action="{{ route('admin.employer.update', ['employer' => $employer->id])}}" method="post"
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
                    <label for="exampleInputEmail1">Ismi va familyasi</label>
                    <input type="text" class="form-control" name="full_name" value="{{$employer->full_name}}"
                           placeholder="Ism va Familyasi" required>
                </div>
                <!-- textarea -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Mansabi</label>
                    <input type="text" class="form-control" name="role" value="{{$employer->role}}"
                           placeholder="Mansabi" required>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-body">
                <div class="form-group row">
                    <div class="product-image-thumb active">
                        <img src="{{'/uploads/'.$employer->image_url}}"
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
