@extends('adminlte::auth.auth-page')

@section('adminlte_css_pre')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@stop

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )

@section('auth_header', 'Yangilash')

@section('auth_body')
    <form action="{{route('admin.update')}}" method="post">
        {{ csrf_field() }}

        {{-- Email field --}}
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control"
                   value="{{ old('name', $admin->name)  }}" placeholder="Ism familya" required>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
            @if($errors->has('name'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </div>
            @endif
        </div>
        <div class="input-group mb-3">
            <input type="text" name="login" class="form-control {{ $errors->has('login') ? 'is-invalid' : '' }}"
                   value="{{ old('login', $admin->login)  }}" placeholder="Login kamida 3" required>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user-cog"></span>
                </div>
            </div>
            @if($errors->has('login'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('login') }}</strong>
                </div>
            @endif
        </div>

        <div class="input-group mb-3">
            <input  name="password"
                   class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                   placeholder="Parol [kamida 5]" required>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user-cog"></span>
                </div>
            </div>
            @if($errors->has('password'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </div>
            @endif
        </div>
        <div class="input-group mb-3">
        <input  name="password_conf"
               class="form-control {{ $errors->has('password_conf') ? 'is-invalid' : '' }}"
               placeholder="Parolni takrorlang [kamida 5]" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
            </div>
        </div>
        @if($errors->has('password_conf'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('password_conf') }}</strong>
            </div>
            @endif
            </div>
        <button type=submit
                class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
            <span class="fas fa-sign-in-alt"></span>
        </button>
    </form>
@stop
