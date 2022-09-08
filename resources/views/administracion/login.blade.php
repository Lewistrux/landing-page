@extends('Layout.plantilla')

@section('pre-script')
  <!--estilos propios-->
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('distribuidor')
@endsection

@section('contenido')
<div class="content">
    <div class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-success">
                <div class="card-header text-center">
                <a href="#" class="h1"><b>Rapinet</b> S.A.C</a>
                </div>
                <div class="card-body">
                <p class="login-box-msg">Ingresar usuario para iniciar sesión</p>
                <form method="POST" action="{{ route ('user.login') }}">
                @csrf 
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Usuario" id="name" name="name" value="{{old('name')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" id="password" name="password"  value="{{old('password')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success btn-block">Iniciar Sesión</button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection