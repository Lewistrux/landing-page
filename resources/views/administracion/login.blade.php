@extends('Layout.plantilla')
@section('pre-script')
  <!--estilos propios-->
  <link rel="stylesheet" href="css/login.css">
@endsection
@section('distribuidor')
@endsection
@section('contenido')
<div class="content">
    <!-- <div class="logo">
            <img src="" alt="">
            <p></p>
        </div>
        <div class="content">                         
      
        <form method="POST" action="{{ route ('user.login') }}">                         
              @csrf  
                <h4 class="form-title">SISTEMA MAKRO</h4>
                <div class="form-group">
                     <label class="control-label">Usuario:</label>
                    <div class="input-icon">
                        <i class="fas fa-user"></i>
                        <input class="form-control @error('name') is-invalid @enderror"  type="text"  placeholder="Ingrese usuario" id="name" name="name" value="{{old('name')}}"/>                        
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                     </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Contraseña:</label>
                    <div class="input-icon">
                           <i class="fas fa-lock"></i>
                        <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Ingrese contraseña"  id="password" name="password"  value="{{old('password')}}"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                </div>               
            
                <hr />
                <div class="form-actions">
                    <button class="btn btn-info btn-block">
                        Ingresar </button>
                </div>
                <hr />
            </form>            
    </div> -->
    <div class="hold-transition login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-success">
                <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>Rapinet</b> S.A.C</a>
                </div>
                <div class="card-body">
                <p class="login-box-msg">Ingresar usuario para iniciar sesión</p>

                <form method="POST" action="{{ route ('user.login') }}">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success btn-block">Iniciar Sesión</button>
                    </div>
                    <!-- /.col -->
                    </div>
                </form>

                <!-- <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div> -->
                <!-- /.social-auth-links -->

                <!-- <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p> -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->
    </div>

</div>
   @endsection