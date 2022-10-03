@extends('Layout.plantilla')

@section('pre-script')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('Adminlte/plugins/select2/css/select2.min.css') }}">
 <!-- Toastr -->
 <link rel="stylesheet" href="{{ asset('Adminlte/plugins/toastr/toastr.min.css') }}">
@endsection

@section('distribuidor')
    @include('Layout.header_black')
@endsection

@section('contenido')
  <section id="banner">
    <div class="row">
      <div class="col-12">
        <img src="{{ asset('img/portadas/empresa/soluciones.png') }}">
      </div>
    </div>
  </section>
    <div class="content-page"> 
    <!-- <div class="targets text-center">
      <div class="row">
        <div class="col-1"></div>
        <div class="col-lg-10">
          <div class="row">
            <div class="col-lg-3 p-2">
              <a type="button" class="btn btn-sm" href="{{route('empresas.fijas')}}">
                <img src="{{ asset('img/cards/negocios/soluciones/e_activity.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
              </a>
            </div>
            <div class="col-lg-3 p-2">
              <a type="button" class="btn" href="{{route('empresas.moviles')}}">
                <img src="{{ asset('img/cards/negocios/soluciones/e_sales.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
              </a>
            </div>
            <div class="col-lg-3 p-2">
              <a type="button" class="btn" href="{{route('empresas.soluciones')}}">
                <img src="{{ asset('img/cards/negocios/soluciones/e_security.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
              </a>
            </div>
            <div class="col-lg-3 p-2">
              <a type="button" class="btn" href="{{route('empresas.soluciones')}}">
                <img src="{{ asset('img/cards/negocios/soluciones/e_track.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
              </a>
            </div>
            <div class="col-12 text-right">
              <hr>
              <a href="{{ route('empresas') }}" class="btn btn-warning btn-lg text-right">
                Volver
              </a>
            </div>
          </div>
            
        </div>
            
        <div class="col-1"></div>
      </div>
    </div> -->
      <div class="card">
        <div class="card-body">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row centrado">
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/administracion.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/e_activity.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/e_contact.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row centrado">
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/e_content.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/e_delivery.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/e_message.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row centrado">
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/e_mobility.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/e_presence.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/e_sales.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row centrado">
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/e_security.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/e_track.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/e_visit.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row centrado">
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/form_dinamico.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/g_financiera.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/localizacion.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row centrado">
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/mensajeria.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/monitoreo.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                  <div class="col-lg-3 p-2">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-soluciones">
                      <img src="{{ asset('img/cards/negocios/soluciones/smart.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="">
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-custom-icon" aria-hidden="true">
                <i class="fas fa-chevron-left" style="color: black;"></i>
              </span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-custom-icon" aria-hidden="true">
                <i class="fas fa-chevron-right" style="color: black;"></i>
              </span>
              <span class="sr-only">Siguiente</span>
            </a>
          </div>
        </div>
       
      </div>
      <div class="cards-planes">
        <div class="row p-4 g-4">
          <div class="col-12 text-right">
            <a href="{{ route('empresas') }}" class="btn btn-warning btn-lg text-right">
              Volver
            </a>
          </div>
        </div>
      </div>
      
    </div>
    @include('formulario.empresa.soluciones')
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
      
      $('[data-mask]').inputmask()

      IniciarCargado();
      $('#tipo_documento').on('change', CambioTipoDocumento);
      $('#region').on('change', cargarProvincias);
      $('#provincia').on('change', cargarDistritos);

      //FORMULARIOS
      $('#formSoluciones').on('submit', submitFormCreate);
    })

    // SUBMITS
    function submitFormCreate(e){
      e.preventDefault();
      console.log($('#formSoluciones').serialize());
      $.ajax({
          type: "POST",
          url: "{{ route('form.registro','CORP-SOLUCIONES') }}",
          data: $('#formSoluciones').serialize(),
      }).done(function (response){
        console.log(response);
          if(!response.error){
              clearModalCreate();
              $('#modal-soluciones').modal('hide');
              toastr.success(response.message);
          }else{
            toastr.danger(response.message);
          }
      });
    }

    function clearModalCreate(event){
      $('#ruc').val('');
      $('#numero').val('');
      $('#region').val('');
      $('#distrito').val('');
      $('#provincia').val('');
      $('#nombre').val('');
    }

    function IniciarCargado(){

    }

    function CambioTipoDocumento(){
      let tipo = $('#tipo_documento').val();
      if(tipo == 'DNI'){
        $('#div_dni').show();
        $('#div_ruc').hide();
        $('#div_carne').hide();
      }
      if(tipo == 'RUC'){
        $('#div_dni').hide();
        $('#div_ruc').show();
        $('#div_carne').hide();
      }
      if(tipo == 'CARNE'){
        $('#div_dni').hide();
        $('#div_ruc').hide();
        $('#div_carne').show();
      }
    }

    function cargarProvincias() {
      let departamento_id = this.value;
      console.log(departamento_id);
      if (departamento_id !== "" || departamento_id.length > 0) {
          $.ajax({
              type: 'post',
              dataType: 'json',
              data: {
                  _token: $('input[name=_token]').val(),
                  departamento_id: departamento_id
              },
              url: "{{ route('locacion.provincias') }}",
              success: function (response) {
                  // Limpiamos data
                  $("#provincia").empty();
                  $("#distrito").empty();
                  if (!response.error) {
                      // Mostramos la información
                      if (response.provincias != null) {
                        $("#provincia").select2({
                            data: response.provincias
                        }).val($('#provincia').find(':selected').val()).trigger('change');
                      }
                  } else {
                      Dashmix.helpers('notify', {type: 'danger', icon: 'fa fa-times mr-1', message: response.message });
                  }
              }
          });
      }
    }

    function cargarDistritos() {
      let provincia_id = this.value;
      if (provincia_id !== "" || provincia_id.length > 0) {
          $.ajax({
              type: 'post',
              dataType: 'json',
              data: {
                  _token: $('input[name=_token]').val(),
                  provincia_id: provincia_id
              },
              url: "{{ route('locacion.distritos') }}",
              success: function (response) {
                  // Limpiamos data
                  $("#distrito").empty();
                  if (!response.error) {
                      // Mostramos la información
                      if (response.distritos != null) {
                        $("#distrito").select2({
                            data: response.distritos
                        }).val($('#distrito').find(':selected').val()).trigger('change');
                      }
                  } else {
                      Dashmix.helpers('notify', {type: 'danger', icon: 'fa fa-times mr-1', message: response.message });
                  }
              }
          });
      }
    }
  </script>
@endsection