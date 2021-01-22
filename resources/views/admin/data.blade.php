@extends('adminlte::page')

@section('title', 'bosh Sahifa')


@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Ma'lumotlar</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('admin.data.update') }}" method="post">
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
                @if(session()->get('message'))
                    <div class="alert alert-success">{{session()->get('message')}}</div>
                @endif
                <div class="form-group">
                    <label for="exampleInputEmail1">Ishchilar soni</label>
                    <input type="text" class="form-control" name="workers_count" value="{{$data->workers_count ?? 0}}" required>
                </div>
                <!-- textarea -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Loyihalar soni</label>
                    <input type="text" class="form-control" name="projects_count" value="{{$data->projects_count ?? ''}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Firma ochilgan yil</label>
                    <input type="text" class="form-control" name="firm_year" value="{{$data->firm_year ?? ''}}" required>
                </div>
                <div class="form-group">
                    <x-summernote id="desc" :text="$data->about" name="about"></x-summernote>
                </div>
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </div>
        </form>
    </div>
@stop
