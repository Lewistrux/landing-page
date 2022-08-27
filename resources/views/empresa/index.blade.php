@extends('Layout.plantilla')

@section('distribuidor')
    <header id="distribuidor-black" class="distribuidor_black">
        <div class="content-autorized">
            <img src="img/logotipo/logo-distribuidor-empresa.png" alt="distribuidor" class="logo_distribuidor">
        </div>
    </header>
@endsection
@section('contenido')
<div class="card">
    <div class="card-body banner">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/banners/movil/movil_1.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/banners/movil/movil_2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/banners/movil/movil_3.png" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/banners/movil/movil_4.png" alt="four slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-custom-icon" aria-hidden="true">
            <i class="fas fa-chevron-left"></i>
          </span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-custom-icon" aria-hidden="true">
            <i class="fas fa-chevron-right"></i>
          </span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <div class="content-page"> 
    <div class="targets text-center">
      <div class="row">
        <div class="col-lg-4">
          <a type="button" class="btn btn-outline-warning sin-borde" href="{{route('hogar')}}">
            <img src="img/servicios/hogar.png" class="tarjeta-btn" alt="">
          </a>
        </div>
        <div class="col-lg-4">
          <a type="button" class="btn btn-outline-warning" href="{{route('moviles')}}">
            <img src="img/servicios/movil.png" class="tarjeta-btn" alt="">
          </a>
        </div>
        <div class="col-lg-4">
          <a type="button" class="btn btn-outline-warning" href="{{route('empresas')}}">
            <img src="img/servicios/empresa.png" class="tarjeta-btn" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection