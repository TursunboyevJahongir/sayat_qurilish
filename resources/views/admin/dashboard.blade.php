@extends('adminlte::page')

@section('title', 'bosh Sahifa')

@section('content_header')
    <h1>Bosh Sahifa</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <a href="admin/categories" class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fa fa-align-justify"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Kategoryalar</span>
                    <span class="info-box-number">
                  {{$category_count}}
                </span>
                </div>
                <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <a href="admin/projects" class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fab fa-product-hunt"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Proektlar</span>
                    <span class="info-box-number">{{$project_count}}</span>
                </div>
                <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <a href="admin/news" class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-newspaper"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Yangiliklar</span>
                    <span class="info-box-number">{{$news_count}}</span>
                </div>
                <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <a href="admin/slides" class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-images"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">slayd rasm</span>
                    <span class="info-box-number">{{$slide_count}}</span>
                </div>
                <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-warning">
                <div class="card-header">
                    <h3 class="card-title">Xabarlar</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                                data-widget="chat-pane-toggle">
                            <span data-toggle="tooltip" title="3 New Messages" class="badge badge-warning">3</span>

                        </button>

                        <a href="admin/messages">
                            <i class="fas fa-comments"></i></a>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table m-0">

                        <tbody>
                        @foreach($messages as $message)
                            <tr>
                                <td>
                                    <a href="{{route('admin.message.show',['message'=>$message->id])}}">{{$message->full_name}}</a>
                                </td>
                                <td>{{$message->short_message}}</td>
                                <td><span class="badge badge-success">{{$message->time}}</span></td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <a href="admin/messages">Barcha xabarlarni ko'rish</a>
                </div>
                <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
            <!-- USERS LIST -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Xodimlar</h3>

                    <div class="card-tools">
                        <span class="badge badge-danger">8 New Members</span>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <ul class="users-list clearfix">
                        @foreach($employers as $employer)
                            <li>
                                <a href="{{route('admin.employer.edit', ['employer' => $employer->id])}}">
                                    <div class="product-image-thumb ">
                                        <img src="{{'/uploads/'.$employer->image_url}}">
                                    </div>
                                    <div class="users-list-name" href="#">{{$employer->full_name}}</div>
                                    <span class="users-list-date">{{$employer->role}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <!-- /.users-list -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <a href="admin/employers">Barcha Xodimlarni ko'rish</a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!--/.card -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-md-9">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach($slides as $key => $slide)
                        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                            <img class="d-block w-100" src="{{url($slide->image_url)}}"
                                 alt="{{$slide->title}}">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>{{$slide->title}}</h3>
                                <p>Slaylar</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="card bg-gradient-dark col-md-3">
            <div class="card-header border-0 ui-sortable-handle">

                <h3 class="card-title">
                    <i class="far fa-calendar-alt"></i>
                    Calendar
                </h3>
                <!-- tools card -->

                <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%">
                    <div class="bootstrap-datetimepicker-widget usetwentyfour">
                        <ul class="list-unstyled">
                            <li class="show">
                                <div class="datepicker">
                                    <div class="datepicker-days" style="">
                                        <table class="table table-sm">
                                            <thead>
                                            <tr>
                                                <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                                                                              title="Previous Month"></span>
                                                </th>
                                                <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                                    title="Select Month">January 2021
                                                </th>
                                                <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                                                                          title="Next Month"></span>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th class="dow">Su</th>
                                                <th class="dow">Mo</th>
                                                <th class="dow">Tu</th>
                                                <th class="dow">We</th>
                                                <th class="dow">Th</th>
                                                <th class="dow">Fr</th>
                                                <th class="dow">Sa</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td data-action="selectDay" data-day="12/27/2020"
                                                    class="day old weekend">27
                                                </td>
                                                <td data-action="selectDay" data-day="12/28/2020" class="day old">28
                                                </td>
                                                <td data-action="selectDay" data-day="12/29/2020" class="day old">29
                                                </td>
                                                <td data-action="selectDay" data-day="12/30/2020" class="day old">30
                                                </td>
                                                <td data-action="selectDay" data-day="12/31/2020" class="day old">31
                                                </td>
                                                <td data-action="selectDay" data-day="01/01/2021" class="day">1</td>
                                                <td data-action="selectDay" data-day="01/02/2021" class="day weekend">
                                                    2
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-action="selectDay" data-day="01/03/2021" class="day weekend">
                                                    3
                                                </td>
                                                <td data-action="selectDay" data-day="01/04/2021" class="day">4</td>
                                                <td data-action="selectDay" data-day="01/05/2021" class="day">5</td>
                                                <td data-action="selectDay" data-day="01/06/2021" class="day">6</td>
                                                <td data-action="selectDay" data-day="01/07/2021" class="day">7</td>
                                                <td data-action="selectDay" data-day="01/08/2021" class="day">8</td>
                                                <td data-action="selectDay" data-day="01/09/2021" class="day weekend">
                                                    9
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-action="selectDay" data-day="01/10/2021" class="day weekend">
                                                    10
                                                </td>
                                                <td data-action="selectDay" data-day="01/11/2021" class="day">11</td>
                                                <td data-action="selectDay" data-day="01/12/2021" class="day">12</td>
                                                <td data-action="selectDay" data-day="01/13/2021" class="day">13</td>
                                                <td data-action="selectDay" data-day="01/14/2021" class="day">14</td>
                                                <td data-action="selectDay" data-day="01/15/2021" class="day">15</td>
                                                <td data-action="selectDay" data-day="01/16/2021" class="day weekend">
                                                    16
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-action="selectDay" data-day="01/17/2021" class="day weekend">
                                                    17
                                                </td>
                                                <td data-action="selectDay" data-day="01/18/2021" class="day">18</td>
                                                <td data-action="selectDay" data-day="01/19/2021" class="day">19</td>
                                                <td data-action="selectDay" data-day="01/20/2021" class="day">20</td>
                                                <td data-action="selectDay" data-day="01/21/2021" class="day">21</td>
                                                <td data-action="selectDay" data-day="01/22/2021"
                                                    class="day active today">22
                                                </td>
                                                <td data-action="selectDay" data-day="01/23/2021" class="day weekend">
                                                    23
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-action="selectDay" data-day="01/24/2021" class="day weekend">
                                                    24
                                                </td>
                                                <td data-action="selectDay" data-day="01/25/2021" class="day">25</td>
                                                <td data-action="selectDay" data-day="01/26/2021" class="day">26</td>
                                                <td data-action="selectDay" data-day="01/27/2021" class="day">27</td>
                                                <td data-action="selectDay" data-day="01/28/2021" class="day">28</td>
                                                <td data-action="selectDay" data-day="01/29/2021" class="day">29</td>
                                                <td data-action="selectDay" data-day="01/30/2021" class="day weekend">
                                                    30
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-action="selectDay" data-day="01/31/2021" class="day weekend">
                                                    31
                                                </td>
                                                <td data-action="selectDay" data-day="02/01/2021" class="day new">1</td>
                                                <td data-action="selectDay" data-day="02/02/2021" class="day new">2</td>
                                                <td data-action="selectDay" data-day="02/03/2021" class="day new">3</td>
                                                <td data-action="selectDay" data-day="02/04/2021" class="day new">4</td>
                                                <td data-action="selectDay" data-day="02/05/2021" class="day new">5</td>
                                                <td data-action="selectDay" data-day="02/06/2021"
                                                    class="day new weekend">6
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="datepicker-months" style="display: none;">
                                        <table class="table-condensed">
                                            <thead>
                                            <tr>
                                                <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                                                                              title="Previous Year"></span>
                                                </th>
                                                <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                                    title="Select Year">2021
                                                </th>
                                                <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                                                                          title="Next Year"></span></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td colspan="7"><span data-action="selectMonth"
                                                                      class="month active">Jan</span><span
                                                        data-action="selectMonth" class="month">Feb</span><span
                                                        data-action="selectMonth" class="month">Mar</span><span
                                                        data-action="selectMonth" class="month">Apr</span><span
                                                        data-action="selectMonth" class="month">May</span><span
                                                        data-action="selectMonth" class="month">Jun</span><span
                                                        data-action="selectMonth" class="month">Jul</span><span
                                                        data-action="selectMonth" class="month">Aug</span><span
                                                        data-action="selectMonth" class="month">Sep</span><span
                                                        data-action="selectMonth" class="month">Oct</span><span
                                                        data-action="selectMonth" class="month">Nov</span><span
                                                        data-action="selectMonth" class="month">Dec</span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="datepicker-years" style="display: none;">
                                        <table class="table-condensed">
                                            <thead>
                                            <tr>
                                                <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                                                                              title="Previous Decade"></span>
                                                </th>
                                                <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                                    title="Select Decade">2020-2029
                                                </th>
                                                <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                                                                          title="Next Decade"></span>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td colspan="7"><span data-action="selectYear"
                                                                      class="year old">2019</span><span
                                                        data-action="selectYear" class="year">2020</span><span
                                                        data-action="selectYear" class="year active">2021</span><span
                                                        data-action="selectYear" class="year">2022</span><span
                                                        data-action="selectYear" class="year">2023</span><span
                                                        data-action="selectYear" class="year">2024</span><span
                                                        data-action="selectYear" class="year">2025</span><span
                                                        data-action="selectYear" class="year">2026</span><span
                                                        data-action="selectYear" class="year">2027</span><span
                                                        data-action="selectYear" class="year">2028</span><span
                                                        data-action="selectYear" class="year">2029</span><span
                                                        data-action="selectYear" class="year old">2030</span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="datepicker-decades" style="display: none;">
                                        <table class="table-condensed">
                                            <thead>
                                            <tr>
                                                <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                                                                              title="Previous Century"></span>
                                                </th>
                                                <th class="picker-switch" data-action="pickerSwitch" colspan="5">
                                                    2000-2090
                                                </th>
                                                <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                                                                          title="Next Century"></span>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td colspan="7"><span data-action="selectDecade" class="decade old"
                                                                      data-selection="2006">1990</span><span
                                                        data-action="selectDecade" class="decade" data-selection="2006">2000</span><span
                                                        data-action="selectDecade" class="decade active"
                                                        data-selection="2016">2010</span><span
                                                        data-action="selectDecade" class="decade active"
                                                        data-selection="2026">2020</span><span
                                                        data-action="selectDecade" class="decade" data-selection="2036">2030</span><span
                                                        data-action="selectDecade" class="decade" data-selection="2046">2040</span><span
                                                        data-action="selectDecade" class="decade" data-selection="2056">2050</span><span
                                                        data-action="selectDecade" class="decade" data-selection="2066">2060</span><span
                                                        data-action="selectDecade" class="decade" data-selection="2076">2070</span><span
                                                        data-action="selectDecade" class="decade" data-selection="2086">2080</span><span
                                                        data-action="selectDecade" class="decade" data-selection="2096">2090</span><span
                                                        data-action="selectDecade" class="decade old"
                                                        data-selection="2106">2100</span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>
                            <li class="picker-switch accordion-toggle"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <br><br>

@stop
