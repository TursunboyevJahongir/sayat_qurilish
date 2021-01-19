{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>{{__('post.post')}}</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{__('post.post')}}</h3>
            <a href="{{route('post.form')}}" type="button" class="btn btn-outline-success float-right btn-sm"
               data-toggle="tooltip" title="{{__('post.add')}}"> <i class="fa fa-plus"></i></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{__('post.name_en')}}</th>
                    <th>{{__('post.name_ru')}}</th>
                    <th>{{__('post.name_uz')}}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($posts as $num => $post)
                        <td>{{$num+1}}</td>

                        @foreach($post->title as $name)
                            <td>{{$name}}</td>
                        @endforeach
                        <td>
                            <div class="btn-group mr-2">
                                <a href="{{route('district.index', ['post' => $post->id])}}" type="button"
                                   class="btn btn-outline-secondary btn-sm"><i class="fa fa-eye"></i>
                                </a>
                                <a href="{{route('post.edit', ['post' => $post->id])}}" type="button"
                                   class="btn btn-outline-warning btn-sm" data-toggle="tooltip"
                                   title="{{__('post.edit')}}"><i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('post.delete', ['post' => $post->id])}}"
                                      method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm" data-toggle="tooltip"
                                            title="{{__('post.delete')}}"><i class="fa fa-trash"></i>
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
