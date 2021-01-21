{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>{{$title}}</h1>
@stop

@section('content')
    <!-- general form elements -->
    <section class="content">

        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Inbox</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm">
                        <form class="input-group row " method="get">
                            <input type="text" class="form-control" name="search" placeholder="Qidirish[tel,sms,ism]">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="mailbox-controls">
                    <!-- Check all button -->


                    <!-- /.btn-group -->
                    <button type="button" onClick="window.location.reload();" class="btn btn-default btn-sm"><i
                            class="fas fa-sync-alt"></i>
                    </button>
                    <div class="float-right">
                        <div class="d-flex justify-content-center" id="myformid">
                            {!! $messages->appends($_GET)->links() !!}
                        </div>

                        <!-- /.btn-group -->
                    </div>
                    <!-- /.float-right -->
                </div>
                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                        <tbody>
                        @foreach($messages as $message)
                            <tr>

                                <td class="mailbox-name">
                                    <a href="{{route('admin.message.show',['message'=>$message->id])}}">
                                        {{$message->full_name}}
                                    </a>
                                </td>
                                <td class="mailbox-subject">
                                    <b>{{$message->title}}</b>- {{$message->short_message}}
                                </td>
                                <td class="mailbox-attachment"></td>
                                <td class="mailbox-date">{{$message->time}}</td>
                                <td>
                                    <form action="{{route('admin.message.delete',['message'=>$message->id])}}"
                                          method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" data-toggle="tooltip"
                                                title=O'chirish><i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- /.table -->
                </div>
                <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
                <div class="mailbox-controls">
                    <!-- Check all button -->
                    <!-- /.btn-group -->
                    <button type="button" onClick="window.location.reload();" class="btn btn-default btn-sm"><i
                            class="fas fa-sync-alt"></i>
                    </button>
                    <div class="float-right">
                        <div class="d-flex justify-content-center" id="myformid">
                            {!! $messages->appends($_GET)->links() !!}
                        </div>
                        <!-- /.btn-group -->
                    </div>
                    <!-- /.float-right -->
                </div>
            </div>
        </div>
        <!-- /.card -->
        <!-- /.col -->
        <!-- /.row -->
    </section>
    <!-- /.card -->
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
