@extends('Layout.plantilla')

@section('distribuidor')
    @include('Layout.header_black')
@endsection

@section('contenido')
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