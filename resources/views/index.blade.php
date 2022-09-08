@extends('Layout.plantilla')

@section('distribuidor')
  @include('Layout.header_red')
@endsection

@section('contenido')
    
    <div class="wrapper">
      <section id="banner">
        <div class="row">
          <div class="col-12">
          <img src="{{ asset('img/portadas/portada_principal.png') }}">
          </div>
        </div>
        
      </section>
      <!-- ./wrapper -->
      <!-- <div class="card">
        <div class="card-body banner">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/banners/banner_1.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/banners/banner_2.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/banners/banner_3.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-custom-icon" aria-hidden="true">
                <i class="fas fa-chevron-left"></i>
              </span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-custom-icon" aria-hidden="true">
                <i class="fas fa-chevron-right"></i>
              </span>
              <span class="sr-only">Siguiente</span>
            </a>
          </div>
        </div>
      </div> -->
      <!-- <div class="row p-4">
        <div class="col-lg-3">
          <img src="img/publicidad/p1.png" class="publicidad" alt="">
        </div>
        <div class="col-lg-3">
          <img src="img/publicidad/p2.png" class="publicidad" alt="">
        </div>
        <div class="col-lg-3">
          <img src="img/publicidad/p3.png" class="publicidad" alt="">
        </div>
        <div class="col-lg-3">
          <img src="img/publicidad/p4.png" class="publicidad" alt="">
        </div>
      </div> -->
      <div class="content-page"> 
        <div class="targets text-center">
          <div class="row">
            <div class="col-1"></div>
            <div class="col-lg-10">
              <div class="row">
              <div class="col-lg-4 p-2">
                  <a type="button" class="btn" href="{{route('hogar')}}">
                    <img src="{{ asset('img/servicios/hogar.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                  </a>
                </div>
                <div class="col-lg-4 p-2">
                  <a type="button" class="btn" href="{{route('moviles')}}">
                    <img src="{{ asset('img/servicios/movil.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                  </a>
                </div>
                <div class="col-lg-4 p-2">
                  <a type="button" class="btn" href="{{route('empresas')}}">
                    <img src="{{ asset('img/servicios/empresa.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                  </a>
                </div>
              </div>
                
            </div>
                
            <div class="col-1"></div>
          </div>
        </div>
      </div>
    </div>


@endsection