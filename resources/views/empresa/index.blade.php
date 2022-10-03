@extends('Layout.plantilla')

@section('distribuidor')
    @include('Layout.header_black')
@endsection

@section('contenido')
  <!-- <div class="card">
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
  </div> -->
  <section id="banner">
    <div class="row">
      <div class="col-12">
        <img src="{{ asset('img/portadas/portada_corporativa.png') }}">
      </div>
    </div>
  </section>
  <div class="content-page"> 
    <div class="targets text-center">
      <div class="row">
        <div class="col-1"></div>
        <div class="col-lg-10">
          <div class="row">
            <div class="col-lg-4 p-2">
              <a type="button" class="btn" href="{{route('empresas.fijas')}}">
                <img src="{{ asset('img/servicios/fija_empresa.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
              </a>
            </div>
            <div class="col-lg-4 p-2">
              <a type="button" class="btn" href="{{route('empresas.moviles')}}">
                <img src="{{ asset('img/servicios/movil_empresa.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
              </a>
            </div>
            <div class="col-lg-4 p-2">
              <a type="button" class="btn" href="{{route('empresas.soluciones')}}">
                <img src="{{ asset('img/servicios/soluciones_empresa.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
              </a>
            </div>
            <div class="col-12 text-right">
              <hr>
              <a href="{{ route('inicio') }}" class="btn btn-warning btn-lg text-right">
                Volver
              </a>
            </div>
          </div>
            
        </div>
            
        <div class="col-1"></div>
      </div>
    </div>
  </div>
@endsection