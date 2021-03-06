{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>{{$title}}</h1>
@stop
@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{$title}}</h3>
            <a href="{{route('admin.news.form')}}" type="button"
               class="btn btn-outline-success float-right btn-lg"
               data-toggle="tooltip" title="yangi maxsulot"> <i class="fa fa-plus"></i></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Sarlavha</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($news as $num => $item)
                        <td>{{$item->id}}</td>
                        <td>
                            <a href="{{route('admin.news.edit', ['news' => $item->id])}}"
                               data-toggle="tooltip"
                               title="Yangilikni tahrirlash">{{$item->title}}</i>
                            </a>
                        </td>
                        <td>
                            <div class="btn-group mr-2">

                                <a href="{{route('admin.news.edit', ['news' => $item->id])}}" type="button"
                                   class="btn btn-outline-warning btn-sm" data-toggle="tooltip"
                                   title="Yangilikni tahrirlash"><i class="fa fa-edit"></i>
                                </a>
                                <x-destroy-button message="Yangilik o'chirish"
                                                  :url="route('admin.news.delete', ['news' => $item->id])"/>
                            </div>
                        </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center" id="myformid">
                {!! $news->appends($_GET)->links() !!}
            </div>
        </div>
        <!-- /.card-body -->
    </div>

@stop

