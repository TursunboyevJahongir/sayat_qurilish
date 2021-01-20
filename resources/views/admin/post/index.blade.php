{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>{{$category->title}}</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{$title}}</h3>
            <a href="{{route('post.form',['category'=>$category->id])}}" type="button"
               class="btn btn-outline-success float-right btn-sm"
               data-toggle="tooltip" title="yangi maxsulot"> <i class="fa fa-plus"></i></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Mavzusi</th>
                    <th>Matni</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($posts as $num => $post)
                        <td>{{$num+1}}</td>
                        <td>
                            <a href="{{route('post.edit', ['post' => $post->id])}}"
                                data-toggle="tooltip"
                               title="Elementni tahrirlash">{{$post->short_title}}</i>
                            </a>
                        </td>
                        <td>{{$post->short_des}}</td>
                        <td>
                            <div class="btn-group mr-2">

                                <a href="{{route('post.edit', ['post' => $post->id])}}" type="button"
                                   class="btn btn-outline-warning btn-sm" data-toggle="tooltip"
                                   title="Elementni tahrirlash"><i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('post.delete', ['post' => $post->id])}}"
                                      method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm" data-toggle="tooltip"
                                            title="Elementni o'chirish"><i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/vendor/css/admin_custom.css">

@stop

@section('js')
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });


    </script>

    <script>
        $(document).ready(function () {
            $("#myTooltips a").tooltip({
                title: "This will show in absence of title attribute."
            });
        });
    </script>
@stop
