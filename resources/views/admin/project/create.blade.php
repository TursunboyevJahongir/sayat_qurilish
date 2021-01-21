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
        <form role="form" action="{{ route('admin.project.create')}}"
              method="post" enctype="multipart/form-data">
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
                    <label for="exampleInputEmail1">Proekt nomi </label>
                    <input type="text" class="form-control" name="title" placeholder="Kategorya nomi"
                           required>
                </div>

                <div class="form-group">
                    <label>Qisqacha Matni</label>
                    <textarea class="form-control" rows="3" name='short_description'
                              placeholder="Qisqacha ..."></textarea>
                </div>

                <div class="form-group">
                    <label>Matni</label>
                    <textarea class="form-control" rows="3" name='description'
                              placeholder="Matn ..."></textarea>
                </div>


                <div class="form-group row">

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

                <label>Boshlanish sanasi</label>
                <input type="date" name="start_date" class="form-control"
                       data-target="#reservationdate" required>

                <label>Tugallanish sanisi</label>
                <input type="date" name="end_date" class="form-control"
                       data-target="#reservationdate">

                <div class="form-group">
                    <label for="exampleInputEmail1">Manzil </label>
                    <input type="text" class="form-control" name="address" placeholder="Manzili..."
                           required>
                </div>
                <br>
                <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                        <input type="checkbox" class="custom-control-input" checked name="hidden"
                               id="customSwitch3">
                        <label class="custom-control-label" for="customSwitch3">holati(o'chiq,faol)</label>
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
