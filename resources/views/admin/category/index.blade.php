{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>Kategoryalar</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Kategoryalar</h3>
            <a href="{{route('admin.category.form')}}" type="button" class="btn btn-outline-success float-right btn-lg"
               data-toggle="tooltip" title="kategorya qo'shish"> <i class="fa fa-plus"></i></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nomi</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($categories as $num => $category)
                        <td>{{$num+1}}</td>

                        <td>
                            <a href="{{route('admin.post.index', ['category' => $category->id])}}">
                                {{$category->short_title}}
                            </a>
                        </td>
                        <td>
                            <div class="btn-group mr-2">
                                <a href="{{route('admin.post.index', ['category' => $category->id])}}" type="button"
                                   class="btn btn-outline-secondary btn-sm"><i class="fa fa-eye"></i>
                                </a>
                                <a href="{{route('admin.category.edit', ['category' => $category->id])}}" type="button"
                                   class="btn btn-outline-warning btn-sm" data-toggle="tooltip"
                                   title="kategoryani taxrirlash"><i class="fa fa-edit"></i>
                                </a>
                                <x-destroy-button message="Kategoryani o'chirish"
                                                  :url="route('admin.category.delete', ['category' => $category->id])"/>
                            </div>
                        </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center" id="myformid">
                {!! $categories->appends($_GET)->links() !!}
            </div>

        </div>
        <!-- /.card-body -->
    </div>

@stop

