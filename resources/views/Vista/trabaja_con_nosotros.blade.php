@extends('Layout.plantilla')
@section('pre-script')
  <!-- Select2 -->
  <link rel="stylesheet" href="Adminlte/plugins/select2/css/select2.min.css">
@endsection
@section('distribuidor')
    <header id="distribuidor_red" class="distribuidor_red">
      <div class="content-autorized">
          <img src="img/logotipo/logo-distribuidor-autorizado-persona.png" alt="distribuidor" class="logo_distribuidor">
      </div>
    </header>
@endsection
@section('contenido')
      <section id="portada" class="portada">
        <img src="img/portadas/postula.png" class="portada">
      </section>
        <!-- <section class="content m-5">
          <div class="container-fluid contenido">
            <div class="row">
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box shadow">
                  <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Asesor</span>
                    <span class="info-box-number">Regular</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box shadow">
                  <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Supervisor</span>
                    <span class="info-box-number">Regular</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box shadow">
                  <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Mesa de control</span>
                    <span class="info-box-number">Regular</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box shadow">
                  <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Reclutado</span>
                    <span class="info-box-number">Regular</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->
      <div class="content m-5"> 
        <div class="card">
          <div class="card-header p-2">
              <ul class="nav nav-pills items-center">
                
                  <li class="nav-item m-2">
                    <a class="active w-100 " href="#settings" data-toggle="tab">
                      <div class="info-box ">
                        <span class="info-box-icon bg-info">
                          <i class="fas fa-user"></i>
                          <!-- <img src="{{ asset('img/botones/btn_inter_tel.png')}}" alt=""> -->
                        </span>
                        <div class="info-box-content">
                          <span class="info-box-text">Quiero ser ... </span>
                          <span class="info-box-number">Asesor</span>
                        </div>
                      </div>
                    </a>
                  </li>
                 
                  <li class="nav-item m-2">
                    <a class="w-100" href="#servicios" data-toggle="tab">
                      <div class="info-box">
                        <span class="info-box-icon bg-info">
                          <i class="fas fa-user-shield"></i>
                        </span>
                        <div class="info-box-content">
                          <span class="info-box-text">Quiero ser ... </span>
                          <span class="info-box-number">Supervisor</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item m-2">
                    <a class="w-100" href="#servicios" data-toggle="tab">
                      <div class="info-box ">
                        <span class="info-box-icon bg-info">
                          <i class="fas fa-user-clock"></i>
                        </span>
                        <div class="info-box-content">
                          <span class="info-box-text">Quiero ser ... </span>
                          <span class="info-box-number">Mesa de control</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item m-2">
                    <a class="" href="#servicios" data-toggle="tab">
                      <div class="info-box ">
                        <span class="info-box-icon bg-info">
                          <i class="fas fa-user-check"></i>
                        </span>
                        <div class="info-box-content">
                          <span class="info-box-text">Quiero ser ... </span>
                          <span class="info-box-number">Reclutador</span>
                        </div>
                      </div>
                    </a>
                  </li>
                    
              </ul>
          </div>
          <div class="card-body">
              <div class="tab-content">
                  <div class="tab-pane active" id="settings">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7899.746588945557!2d-79.03578811999816!3d-8.114381594962968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad3d9d441352ed%3A0x8a2684783358cb0b!2sAv.%20Espa%C3%B1a%20146%2C%20Trujillo%2013001!5e0!3m2!1ses-419!2spe!4v1661355646776!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  <div class="tab-pane" id="servicios">
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-12">
                              <div class="info-box bg-success">
                                  <span class="info-box-icon"><i class="fa fa-sync-alt"></i></span>
                                  <div class="info-box-content">
                                      <span class="h5">Migración de Prepago a Postpago.</span>
                                      <span class="progress-description">
                                      </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card-footer">

          </div>
        </div>
        <!-- <div class="row content-buttons">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#modal-postular">Postula Aquí</button>
          </div>
          <div class="col-lg-3"></div>
        </div> -->
       
      </div>
    @include('formulario.postular')
@endsection

@section('post-script')
  <!-- Select2 -->
  <script src="Adminlte/plugins/select2/js/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="Adminlte/plugins/moment/moment.min.js"></script>
  <script src="Adminlte/plugins/inputmask/jquery.inputmask.min.js"></script>
  <script src="{{ asset('js/modulos/locacion.js') }}"></script>
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
      $('#tipo_documento').on('change', CambioTipoDocumento);
      $('#region').on('change', cargarProvincias);
      $('#provincia').on('change', cargarDistritos);
    })

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

    function IniciarCargado(){
      $('#div_ruc').hide();
      $('#div_carne').hide();
      $('#tipo_documento').trigger('change');
    }

    function CambioTipoDocumento(){
      let tipo = $('#tipo_documento').val();
      if(tipo == 'DNI'){
        $('#div_dni').show();
        $('#div_carne').hide();
      }
      if(tipo == 'CARNE'){
        $('#div_dni').hide();
        $('#div_carne').show();
      }
    }
  </script>
@endsection