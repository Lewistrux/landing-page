@extends('Layout.plantilla')

@section('pre-script')
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('Adminlte/plugins/select2/css/select2.min.css') }}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('Adminlte/plugins/toastr/toastr.min.css') }}">
@endsection

@section('distribuidor')
  @include('Layout.header_red')
@endsection

@section('contenido')
    <div class="card">
      <div class="card-body banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('img/banners/banner_1.png') }}" alt="Costo de instalación gratis">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('img/banners/banner_2.png') }}" alt="Claro tv">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('img/banners/banner_3.png') }}" alt="Fibra óptica">
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
    </div>

    <div class="content-page"> 
      <div class="cards">
        <div class="content-buttons">
          <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-0"></div>
            <div class="col-lg-6 col-md-8 col-sm-12 text-center">
              <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <button type="button" id="btn-2play" onclick="Boton2Play()" class="btn btn-lg" style="background-color: red; color: white;">Planes 2 Play</button>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <button type="button" id="btn-3play" onclick="Boton3Play()" class="btn btn-lg" style="background-color: red; color: white;">Planes 3 Play</button>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <button type="button" id="btn-2play" onclick="BotonNetflix()" class="btn btn-lg" style="background-color: red; color: white;">Planes Netflix</button>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-0"></div>
          </div>
        </div>
      </div>
      <div class="cards-planes content-buttons-card">
        <div class="row p-4 g-4" id="2play">
          <div class="col-lg-4">
            <div class="card">
              <img src="{{ asset('img/cards/hogar/2play_inter_tel.png') }}" class="card-img-top" alt="Internet y telefono">
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-center">
                  <div class="row">
                    <div class="col-lg-6">
                      <b>Todos los planes</b><br><b>incluyen</b>
                    </div>
                    <div class="col-lg-6">
                      <img src="img/cards/paramount.png" class="img-into-card" alt="">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  <b>50 Mbps</b> de internet.
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Hasta <b>75 Mbps</b>  de internet
                  <br><span class="text-muted pl-3">Contando con Full Claro.</span>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Hasta 15 Mbps de <b>subida.</b> 
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Telefonía fija <b>100</b> minutos.
                </li>
              </ul>
              <div class="card-footer">
                <div class="row">
                  <div class="col-lg-8">
                    Planes desde:
                    <h2>S/40
                      <span class="text-muted text-sm">por el 1er mes.</span> 
                    </h2>  
                  </div>
                  <div class="col-lg-4">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">Me interesa</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <img src="{{ asset('img/cards/hogar/2play_avanzado.png') }}" class="card-img-top" alt="Internet y cable">
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-center">
                  <div class="row">
                    <div class="col-lg-6">
                      <b>Todos los planes</b><br><b>incluyen</b>
                    </div>
                    <div class="col-lg-6">
                      <img src="img/cards/paramount.png" class="img-into-card" alt="">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  <b>50 Mbps</b> de internet.
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Hasta <b>75 Mbps</b> de internet
                  <br><span class="text-muted pl-3">Contando con Full Claro.</span>
                </li>
                <li class="list-group-item">
                <i class="fa fa-check" style="color: green;"></i>
                  Hasta 15 Mbps de <b>subida.</b> 
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Más de <b>110</b> canales y más de <b>60</b> canales <b>HD.</b> 
                </li>
              </ul>
              <div class="card-footer">
                <div class="row">
                  <div class="col-lg-8">
                    Planes desde:
                    <h2>S/72<span class="text-lg">.50</span>
                      <span class="text-muted text-sm">por 3 meses.</span>
                    </h2> 
                  </div>
                  <div class="col-lg-4">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">Me interesa</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <img src="{{ asset('img/cards/hogar/2play_superior.png') }}" class="card-img-top" alt="Internet y tv">
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-center">
                  <div class="row">
                    <div class="col-lg-6">
                      <b>Todos los planes</b><br><b>incluyen</b>
                    </div>
                    <div class="col-lg-6">
                      <img src="img/cards/paramount.png" class="img-into-card" alt="">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  <b>300 Mbps</b> de internet.
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Hasta <b>400 Mbps</b> de internet
                  <br><span class="text-muted pl-3">Contando con Full Claro.</span>
                </li>
                <li class="list-group-item">
                <i class="fa fa-check" style="color: green;"></i>
                  Hasta 50 Mbps de <b>subida.</b> 
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Más de <b>140</b> canales y más de <b>80</b> canales <b>HD.</b> 
                </li>
              </ul>
              <div class="card-footer">
                <div class="row">
                  <div class="col-lg-8">
                    Planes desde:
                    <h2>S/162<span class="text-lg">.50</span>
                      <span class="text-muted text-sm">por 3 meses.</span>
                    </h2> 
                  </div>
                  <div class="col-lg-4">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">Me interesa</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row p-4 g-4" id="3play">
          <div class="col-lg-2"></div>
          <div class="col-lg-4">
            <div class="card">
              <img src="{{ asset('img/cards/hogar/3play_avanzado.png') }}" class="card-img-top" alt="Internet, telefono y cable">
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-center">
                  <div class="row">
                    <div class="col-lg-6">
                      <b>Todos los planes</b><br><b>incluyen</b>
                    </div>
                    <div class="col-lg-6">
                      <img src="img/cards/paramount.png" class="img-into-card" alt="">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  <b>80 Mbps</b> de internet.
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Hasta <b>120 Mbps</b>  de internet
                  <br><span class="text-muted pl-3">Contando con Full Claro.</span>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Hasta 20 Mbps de <b>subida.</b> 
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Telefonía fija <b>100</b> minutos.
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Más de <b>110</b> canales y más de <b>60</b> canales <b>HD.</b> 
                  <br><span class="text-muted pl-3">Incluye 1 deco.</span>
                </li>
              </ul>
              <div class="card-footer">
                <div class="row">
                  <div class="col-lg-8">
                    Planes desde:
                    <h2>S/82<span class="text-lg">.50</span>
                      <span class="text-muted text-sm">por 3 meses.</span> 
                    </h2>  
                  </div>
                  <div class="col-lg-4">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">Me interesa</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <img src="{{ asset('img/cards/hogar/3play_superior.png') }}" class="card-img-top" alt="Internet, telefono y tv">
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-center">
                  <div class="row">
                    <div class="col-lg-6">
                      <b>Todos los planes</b><br><b>incluyen</b>
                    </div>
                    <div class="col-lg-6">
                      <img src="img/cards/paramount.png" class="img-into-card" alt="">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  <b>300 Mbps</b> de internet.
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Hasta <b>400 Mbps</b>  de internet
                  <br><span class="text-muted pl-3">Contando con Full Claro.</span>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Hasta 50 Mbps de <b>subida.</b> 
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Telefonía fija <b>100</b> minutos.
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Más de <b>140</b> canales y más de <b>80</b> canales <b>HD.</b> 
                  <br><span class="text-muted pl-3">Incluye 1 deco.</span>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Incluye paquete <b>HBO.</b>
                </li>
              </ul>
              <div class="card-footer">
                <div class="row">
                  <div class="col-lg-8">
                    Planes desde:
                    <h2>S/165
                      <span class="text-muted text-sm">por 3 meses.</span> 
                    </h2>  
                  </div>
                  <div class="col-lg-4">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">Me interesa</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2"></div>
        </div>

        <div class="row p-4 g-4" id="netflix">
          <div class="col-lg-2"></div>
          <div class="col-lg-4">
            <div class="card">
              <img src="{{ asset('img/cards/hogar/2play_netflix.png') }}" class="card-img-top" alt="Internet, telefono y netflix">
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-center">
                  <div class="row">
                    <div class="col-lg-6">
                      <b>Todos los planes</b><br><b>incluyen</b>
                    </div>
                    <div class="col-lg-6">
                      <img src="img/cards/paramount.png" class="img-into-card" alt="">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  <b>60 Mbps</b> de internet.
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Hasta <b>75 Mbps</b>  de internet
                  <br><span class="text-muted pl-3">Contando con Full Claro.</span>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Hasta 6 Mbps de <b>subida.</b> 
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Telefonía fija <b>100</b> minutos.
                </li>
              </ul>
              <div class="card-footer">
                <div class="row">
                  <div class="col-lg-8">
                    Planes desde:
                    <h2>S/110 
                      <span class="text-muted text-sm">por mes.</span> 
                    </h2>  
                  </div>
                  <div class="col-lg-4">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">Me interesa</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <img src="{{ asset('img/cards/hogar/3play_netflix.png') }}" class="card-img-top" alt="Internet, cable, telefono y netflix">
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-center">
                  <div class="row">
                    <div class="col-lg-6">
                      <b>Todos los planes</b><br><b>incluyen</b>
                    </div>
                    <div class="col-lg-6">
                      <img src="img/cards/paramount.png" class="img-into-card" alt="">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  <b>120 Mbps</b> de internet.
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Hasta <b>150 Mbps</b> de internet
                  <br><span class="text-muted pl-3">Contando con Full Claro.</span>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Hasta 12 Mbps de <b>subida.</b> 
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Telefonía fija <b>100</b> minutos.
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Más de <b>110</b> canales y más de <b>60</b> canales <b>HD.</b> 
                  <br><span class="text-muted pl-3">Incluye 1 deco.</span>
                </li>
              </ul>
              <div class="card-footer">
                <div class="row">
                  <div class="col-lg-8">
                    Planes desde:
                    <h2>S/210<span class="text-lg">.50</span>
                      <span class="text-muted text-sm">al mes.</span> 
                    </h2>  
                  </div>
                  <div class="col-lg-4">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">Me interesa</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2"></div>
        </div>

        <div class="col-12 text-right">
          <hr>
          <a href="{{ route('inicio') }}" class="btn btn-warning btn-lg text-right">
            Volver
          </a>
        </div>
      </div>      
    </div>
    @include('formulario.hogar')
@endsection

@section('post-script')
  <!-- Select2 -->
  <script src="{{ asset('Adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
  <!-- InputMask -->
  <script src="{{ asset('Adminlte/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('Adminlte/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
  <!-- Toastr -->
  <script src="{{ asset('Adminlte/plugins/toastr/toastr.min.js') }}"></script>
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2({
        placeholder: "Seleccionar",
        allowClear: false,
        width: '100%',
      });
      //Money Euro
      $('[data-mask]').inputmask()

      IniciarCargado();
      //FORMULARIOS
      $('#formHogar').on('submit', submitFormCreate);
    })

    // SUBMITS
    function submitFormCreate(e){
      e.preventDefault();
      console.log($('#formHogar').serialize());
      $.ajax({
          type: "POST",
          url: "{{ route('form.registro','FIJA') }}",
          data: $('#formHogar').serialize(),
      }).done(function (response){
        console.log(response);
          if(!response.error){
              clearModalCreate();
              $('#modal-default').modal('hide');
              toastr.success(response.message);
          }else{
            toastr.danger(response.message);
          }
      });
    }

    function clearModalCreate(event){
      $('#dni').val('');
      $('#numero').val('');
      $('#localidad').val('');
      $('#nombre').val('');
    }

    function Boton3Play(){
      $('#3play').show();
      $('#2play').hide();
      $('#netflix').hide();
    }

    function Boton2Play(){
      $('#2play').show();
      $('#3play').hide();
      $('#netflix').hide();
    }

    function BotonNetflix(){
      $('#2play').hide();
      $('#3play').hide();
      $('#netflix').show();
    }

    function IniciarCargado(){
      $('#3play').hide();
      $('#netflix').hide();
    }
  </script>
@endsection