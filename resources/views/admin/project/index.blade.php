{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>Proektlar</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Proektlar</h3>
            <a href="{{route('category.form')}}" type="button" class="btn btn-outline-success float-right btn-sm"
               data-toggle="tooltip" title="kategorya qo'shish"> <i class="fa fa-plus"></i></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    'title',
                    'address',
                    'image_url',
                    'start_date',
                    'end_date',
                    'short_description',
                    'description',
                    'hidden'
                    <th>#</th>
                    <th>Nomi</th>
                    <th>Matni</th>
                    <th>Qisqacha Matni</th>
                    <th>Boshlan Sanasi</th>
                    <th>tugallangan Sanasi</th>
                    <th>ko'rinishi</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($categories as $num => $category)
                        <td>{{$num+1}}</td>

                        <td>
                            <a href="{{route('post.index', ['category' => $category->id])}}">
                                {{$category->short_title}}
                            </a>
                        </td>
                        <td>
                            <div class="btn-group mr-2">
                                <a href="{{route('post.index', ['category' => $category->id])}}" type="button"
                                   class="btn btn-outline-secondary btn-sm"><i class="fa fa-eye"></i>
                                </a>
                                <a href="{{route('category.edit', ['category' => $category->id])}}" type="button"
                                   class="btn btn-outline-warning btn-sm" data-toggle="tooltip"
                                   title="kategoryani taxrirlash"><i class="fa fa-edit"></i>
                                </a>
                                <x-destroy-button message="Kategoryani o'chirish"
                                                  :url="route('category.delete', ['category' => $category->id])"/>
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
