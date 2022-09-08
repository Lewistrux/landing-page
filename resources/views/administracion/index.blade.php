@extends('Layout.admin')
@section('pre-script')
  <!--estilos propios-->
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('titulo-vista') 
    Bienvenido 
@endsection

@section('contenido-admin')
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ total_clientes() }}</h3>
                    <p>Total de Clientes</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Más info <i class="fas fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ aviso_clientes_nuevos() }}<sup style="font-size: 20px">%</sup></h3>
                    <p>Total de Clientes</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Más info <i class="fas fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ aviso_clientes_nuevos() }}</h3>
                    <p>Clientes Nuevos</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Más info <i class="fas fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>
                    <p>Unique Visitors</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Más info <i class="fas fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
        </div>
    </div>
@endsection