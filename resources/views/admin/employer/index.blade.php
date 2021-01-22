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
            <a href="{{route('admin.employer.form')}}" type="button"
               class="btn btn-outline-success float-right btn-lg"
               data-toggle="tooltip" title="yangi maxsulot"> <i class="fa fa-plus"></i></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th></th>
                    <th>Ism Familyasi</th>
                    <th>Mansabi</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($employers as $num => $employer)
                        <td>{{$num+1}}</td>
                        <td>
                            <div class="product-image-thumb active">
                                <a href="{{route('admin.employer.edit', ['employer' => $employer->id])}}">
                                    <img src="{{'/uploads/'.$employer->image_url}}"
                                         alt="Product Image">
                                </a>
                            </div>
                        </td>
                        <td>
                            <a href="{{route('admin.employer.edit', ['employer' => $employer->id])}}"
                               data-toggle="tooltip"
                               title="Xodim ma'lumotlarini tahrirlash">{{$employer->full_name}}</i>
                            </a>
                        </td>
                        <td>{{$employer->role}}</td>

                        <td>
                            <div class="btn-group mr-2">

                                <a href="{{route('admin.employer.edit', ['employer' => $employer->id])}}" type="button"
                                   class="btn btn-outline-warning btn-sm" data-toggle="tooltip"
                                   title="Xodim ma'lumotlarini tahrirlash"><i class="fa fa-edit"></i>
                                </a>
                                <x-destroy-button message="Xodimni o'chirish"
                                                  :url="route('admin.employer.delete', ['employer' => $employer->id])"/>
                            </div>
                        </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center" id="myformid">
                {!! $employers->appends($_GET)->links() !!}
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
