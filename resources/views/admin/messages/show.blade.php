{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>{{$title}}</h1>
@stop

@section('content')
    <div class="card card-primary card-outline">

        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="mailbox-read-info ">
                <h5><i class="fas fa-user"></i>{{$message->full_name}}</h5><br>
                <h6><i class="fas fa-phone-alt"></i> {{$message->phone}}
                    <span class="mailbox-read-time float-right">{{$message->created_at}}</span></h6>
            </div>
            <div class="mailbox-read-message ">
                <p>{{$message->full_name}}</p>
                <p class="text-center">{{$message->title}}</p>
                {{$message->message}}
            </div>
            <!-- /.mailbox-read-message -->
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer -->
        <div class="card-footer">


            <div class="btn-group mr-3">


            <form action="{{route('admin.message.delete',['message'=>$message->id])}}"
                  method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i> Delete</button>
            </form>
            <button type="button" class="btn  btn-outline-secondary btn-sm" onclick="window.print();"><i class="fas fa-print"></i> Print</button>
            </div>
        </div>
        <!-- /.card-footer -->
    </div>
@stop

