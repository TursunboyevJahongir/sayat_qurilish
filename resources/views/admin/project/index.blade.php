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
            <a href="{{route('admin.project.form')}}" type="button" class="btn btn-outline-success float-right btn-lg"
               data-toggle="tooltip" title="kategorya qo'shish"> <i class="fa fa-plus"></i></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th></th>
                    <th>Nomi</th>
                    <th>Dan</th>
                    <th>Gacha</th>
                    <th>holati</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($projects as $num => $project)
                        <td>{{$num+1}}</td>
                        <td>
                            <div class="product-image-thumb active">
                                <a href="{{route('admin.project.edit', ['project' => $project->id])}}">
                                    <img src="{{$project->image}}"
                                         alt="Product Image">
                                </a>
                            </div>
                        </td>

                        <td>
                            <a href="{{route('admin.project.edit', ['project' => $project->id])}}">
                                {{$project->short_title}}
                            </a>
                        </td>
                        <td>
                            {{$project->start_date->format('d.m.Y')}}
                        </td>
                        <td>
                            {{$project->end_date->format('d.m.Y')}}
                        </td>
                        @if($project->hidden)
                            <td style="background-color: #00b44e">
                                <b>faol</b>
                            </td>
                        @else
                            <td style="background-color: #bd081d">
                                <b>o'chiq</b>
                            </td>
                        @endif

                        <td>
                            <div class="btn-group mr-2">
                                <a href="{{route('admin.project.edit', ['project' => $project->id])}}" type="button"
                                   class="btn btn-outline-warning btn-sm" data-toggle="tooltip"
                                   title="proektni taxrirlash"><i class="fa fa-edit"></i>
                                </a>
                                <x-destroy-button message="proektni o'chirish"
                                                  :url="route('admin.project.delete', ['project' => $project->id])"/>
                            </div>
                        </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center" id="myformid">
                {!! $projects->appends($_GET)->links() !!}
            </div>
        </div>
        <!-- /.card-body -->
    </div>


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
