{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <div class="card-header">
        <h1 class="card-title">{{$title}}</h1>
        <a href="{{route('admin.slide.form')}}" type="button"
           class="btn btn-outline-success float-right btn-lg"
           data-toggle="tooltip" title="yangi sini qo'shish"> <i class="fa fa-plus"></i></a>
    </div>
@stop
@section('content')

    <div class="row">
        @foreach($slides as $slide)
            <div class="col-md-4 ">
                <a href="{{route('admin.slide.edit', ['slide' => $slide->id])}}">
                    <div class="card card-widget widget-user cardShadow">
                        <div class="widget-user-header text-white"
                             style="background: url('{{url('uploads/'.$slide->image_url)}}') center center;">
                            <h3 class="widget-user-username text-right">{{$slide->short_title}}</h3>
                            <h5 class="widget-user-desc text-right">{{$slide->short_title}}</h5>
                        </div>
                        <div class="card-footer">
                            <h4 class="widget-user-desc ">{{$slide->short_title}}</h4>
                            <div class="float-right">
                                <x-destroy-button message="Rasmni o'chirish"
                                                  :url="route('admin.slide.delete', ['slide' => $slide->id])"/>
                            </div>
                        </div>
                </a>
            </div>
    </div>
    @endforeach
    <div class="d-flex justify-content-center" id="myformid">
        {!! $slides->appends($_GET)->links() !!}
    </div>

@stop
@section('css')
    <link rel="stylesheet" href="/css/my.css">
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
