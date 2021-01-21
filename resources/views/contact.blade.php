@extends('app-layout')
@section('content')
    <header class="page-header">
        <div class="container">
            <h1>Biz bilan aloqa</h1>
            <ul>
                <li><a href="/">BOSH SAHIFA</a></li>
                <li>Biz bilan aloqa</li>
            </ul>
        </div>
    </header>
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact-box">
                        <figure><img src="/images/icon-global.png" alt="Image"></figure>
                        <h6>Bosh ofis</h6>
                        <p>Xorazm viloyati, Xiva tumani, Sayot</p>

                    </div>
                    <!-- end contact-box -->
                </div>
                <!-- end col-4 -->
                <div class="col-lg-6 col-md-6">
                    <div class="contact-box">
                        <figure><img src="/images/icon-phone.png" alt="Image"></figure>
                        <h6>Telefon</h6>
                        <p>+99862 225 62 63</p>
                    </div>
                    <!-- end contact-box -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title text-left">
                        <h6>BIZNING TARIX</h6>
                        <h2>Sifat va tezkorlik <br>
                            bizning xizmatlarimizda</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6">
                    <form class="contact-form" method="POST" action="{{route('home.contacts.form')}}"
                          style="margin-bottom: 0">
                        @csrf
                        @if($errors->count() > 0)
                            <div class="alert alert-danger">{{$errors->first()}}</div>
                        @endif
                        @if(isset($message))
                            <div class="alert alert-success">{{$message}}</div>
                        @endif
                        <div class="form-group">
                            <span>Ism va familya</span>
                            <input type="text" name="full_name">
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <span>Telefon raqam</span>
                            <input type="text" name="phone">
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <span>Mavzu</span>
                            <input type="text" name="subject">
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <span>Xabar</span>
                            <textarea name="message"></textarea>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <input type="submit" value="Yuborish">
                        </div>
                        <!-- end form-group -->
                    </form>
                    <!-- end contact-form -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
@endsection
