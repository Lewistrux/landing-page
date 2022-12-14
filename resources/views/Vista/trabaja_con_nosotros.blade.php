@extends('Layout.plantilla')
@section('pre-script')
  <!-- Select2 -->
  <link rel="stylesheet" href="Adminlte/plugins/select2/css/select2.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('Adminlte/plugins/toastr/toastr.min.css') }}">
@endsection
@section('distribuidor')
  @include('Layout.header_red')
@endsection
@section('contenido')
      <section id="portada" class="portada">
        <img src="{{ asset('img/portadas/postula.png') }}" class="portada" alt="trabajo en claro">
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
              <ul class="nav nav-pills items-center espacio_entre">
                  <li class="nav-item m-2">
                    <a class="w-100" href="#asesor" data-toggle="tab">
                      <div class="info-box bg-warning">
                        <span class="info-box-icon">
                          <i class="fas fa-user" style="color: white;"></i>
                        </span>
                        <div class="info-box-content">
                          <span class="info-box-text">Quiero ser ... </span>
                          <span class="info-box-number"> Asesor comercial</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item m-2 espacio_entre">
                    <a class="w-100" href="#supervisor" data-toggle="tab">
                      <div class="info-box bg-secondary">
                        <span class="info-box-icon">
                          <i class="fas fa-user-shield"></i>
                        </span>
                        <div class="info-box-content">
                          <span class="info-box-text">Quiero ser ... </span>
                          <span class="info-box-number"> Supervisor comercial</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item m-2">
                    <a class="w-100" href="#control" data-toggle="tab">
                      <div class="info-box bg-info">
                        <span class="info-box-icon">
                          <i class="fas fa-user-clock"></i>
                        </span>
                        <div class="info-box-content">
                          <span class="info-box-text">Quiero ser ... </span>
                          <span class="info-box-number"> Mesa de control</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item m-2">
                    <a class="" href="#rrhh" data-toggle="tab">
                      <div class="info-box bg-danger">
                        <span class="info-box-icon">
                          <i class="fas fa-user-check"></i>
                        </span>
                        <div class="info-box-content">
                          <span class="info-box-text">Quiero ser ... </span>
                          <span class="info-box-number"> Recursos Humanos</span>
                        </div>
                      </div>
                    </a>
                  </li>
              </ul>
          </div>
          <div class="card-body">
              <div class="tab-content">
                  <div class="tab-pane" id="asesor">
                      <div class="row">
                        <!-- titulo -->
                        <div class="col-md-12 col-sm-12 col-12">
                          <div class="info-box bg-warning text-center algin-center text-white">
                              <span class="info-box-icon"><i class="fa fa-user" style="color: white;"></i></span>
                              <div class="info-box-content text-white">
                                  <span class="h5">Asesor comercial.</span>
                                  <span class="progress-description">
                                  </span>
                              </div>
                          </div>
                        </div>
                        <!-- descripcion acordeon -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card card-info">
                            <div class="card card-widget widget-user-2">
                            <div class="widget-user-header bg-info">
                              <div class="widget-user-image">
                                <img class="img-circle elevation-2" src="{{ asset('img/icon/descripcion.jpg') }}" alt="Descripcion de trabajo">
                              </div>
                              <h3 class="widget-user-username">Descripci??n</h3>
                              <h5 class="widget-user-desc">Resumen Breve del Puesto</h5>
                            </div>
                              
                            </div>
                            <div class="card-body text-justify pt-2">
                              Los encargados de ventas comunican los productos que ofrece la empresa, sabe escuchar y conoce las necesidades de los clientes. 
                              Asimismo, asesora a clientes potenciales para que estos tengan una experiencia ??nica de compra, a su vez, deben acercarlos m??s a los beneficios 
                              del producto o servicio para que terminen de tomar la decisi??n y adquirir el producto. 
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card card-widget widget-user-2">
                            <div class="widget-user-header bg-info">
                              <div class="widget-user-image">
                                <img class="img-circle elevation-2" src="{{ asset('img/icon/lista.png') }}" alt="Actividades de Asesor">
                              </div>
                              <h3 class="widget-user-username">Aptitudes</h3>
                              <h5 class="widget-user-desc">Valores y Caracter??sticas</h5>
                            </div>
                            <div class="card-footer p-0">
                              <ul class="nav flex-column">
                                <li class="nav-item">
                                  <span class="nav-link">
                                    Honestidad<span class="float-right badge bg-primary"></span>
                                  </span>
                                </li>
                                <li class="nav-item">
                                  <span class="nav-link">
                                    Puntualidad <span class="float-right badge bg-info"></span>
                                  </span>
                                </li>
                                <li class="nav-item">
                                  <span class="nav-link">
                                    Proactivo <span class="float-right badge bg-success"></span>
                                  </span>
                                </li>
                                <li class="nav-item">
                                  <span class="nav-link">
                                    Carism??tico <span class="float-right badge bg-success"></span>
                                  </span>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                      <div class="row">
                          <!-- <div class="col-md-6 col-sm-6 col-12">
                              <div class="info-box bg-warning">
                                  <span class="info-box-icon"><i class="fa fa-sync-alt" style="color: white;"></i></span>
                                  <div class="info-box-content text-white">
                                      <span class="h5">Asesor comercial.</span>
                                      <span class="progress-description">
                                      </span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-12">
                              <div class="info-box bg-warning">
                                  <span class="info-box-icon"><i class="fa fa-sync-alt" style="color: white;"></i></span>
                                  <div class="info-box-content text-white">
                                      <span class="h5">Asesor comercial.</span>
                                      <span class="progress-description">
                                      </span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-12">
                              <div class="info-box bg-warning">
                                  <span class="info-box-icon"><i class="fa fa-sync-alt" style="color: white;"></i></span>
                                  <div class="info-box-content text-white">
                                      <span class="h5">Asesor comercial.</span>
                                      <span class="progress-description">
                                      </span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-12">
                              <div class="info-box bg-warning">
                                  <span class="info-box-icon"><i class="fa fa-sync-alt" style="color: white;"></i></span>
                                  <div class="info-box-content text-white">
                                      <span class="h5">Asesor comercial.</span>
                                      <span class="progress-description">
                                      </span>
                                  </div>
                              </div>
                          </div> -->
                          <div class="col-12">
                            <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#modal-postular" data-puesto="ASESOR">Postula Aqu?? !</button>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane" id="supervisor">
                      <div class="row">
                          <div class="col-md-12 col-sm-12 col-12">
                              <div class="info-box bg-secondary text-center algin-center">
                                  <span class="info-box-icon">
                                    <i class="fa fa-user-clock"></i>
                                  </span>
                                  <div class="info-box-content ">
                                      <span class="h5">Supervisor comercial</span>
                                      <span class="progress-description">
                                      </span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-12">
                              <div class="info-box bg-secondary">
                                  <span class="info-box-icon"><i class="fa fa-sync-alt"></i></span>
                                  <div class="info-box-content">
                                      <span class="h5">Supervisor</span>
                                      <span class="progress-description">
                                      </span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-12">
                              <div class="info-box bg-secondary">
                                  <span class="info-box-icon"><i class="fa fa-sync-alt"></i></span>
                                  <div class="info-box-content">
                                      <span class="h5">comercial.</span>
                                      <span class="progress-description">
                                      </span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12">
                            <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#modal-postular" data-puesto="SUPERVISOR">Postula Aqu?? !</button>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane" id="control">
                      <div class="row">
                          <div class="col-md-12 col-sm-12 col-12">
                              <div class="info-box bg-info text-center algin-center">
                                  <span class="info-box-icon">
                                    <i class="fa fa-user-clock"></i>
                                  </span>
                                  <div class="info-box-content ">
                                      <span class="h5">Mesa de control</span>
                                      <span class="progress-description">
                                      </span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-12">
                              <div class="info-box bg-info">
                                  <span class="info-box-icon"><i class="fa fa-check"></i></span>
                                  <div class="info-box-content">
                                      <span class="h5">Generaci??n SEC</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-12">
                              <div class="info-box bg-info">
                                  <span class="info-box-icon"><i class="fa fa-check"></i></span>
                                  <div class="info-box-content">
                                      <span class="h5">Generaci??n SOT</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-12">
                              <div class="info-box bg-info">
                                  <span class="info-box-icon"><i class="fa fa-check"></i></span>
                                  <div class="info-box-content">
                                      <span class="h5">Seguimiento de instalaci??n (SGA)</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-12">
                              <div class="info-box bg-info">
                                  <span class="info-box-icon"><i class="fa fa-check"></i></span>
                                  <div class="info-box-content">
                                      <span class="h5">Loteo de venta (SIGEX)</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-12">
                              <div class="info-box bg-info">
                                  <span class="info-box-icon"><i class="fa fa-check"></i></span>
                                  <div class="info-box-content">
                                      <span class="h5">Seguimiento de conformidad (SIGEX)</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-12">
                              <div class="info-box bg-info">
                                  <span class="info-box-icon"><i class="fa fa-check"></i></span>
                                  <div class="info-box-content">
                                      <span class="h5">Regularizaciones de audios</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12">
                            <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#modal-postular" data-puesto="MESA DE CONTROL">Postula Aqu?? !</button>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane" id="rrhh">
                      <div class="row">
                          <div class="col-md-12 col-sm-12 col-12">
                              <div class="info-box bg-danger text-center algin-center">
                                  <span class="info-box-icon">
                                    <i class="fa fa-user-clock"></i>
                                  </span>
                                  <div class="info-box-content ">
                                      <span class="h5">Recursos Humanos</span>
                                      <span class="progress-description">
                                      </span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-12">
                              <div class="info-box bg-danger">
                                  <span class="info-box-icon"><i class="fa fa-sync-alt"></i></span>
                                  <div class="info-box-content">
                                      <span class="h5">Recursos Humanos</span>
                                      <span class="progress-description">
                                      </span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-12">
                              <div class="info-box bg-danger">
                                  <span class="info-box-icon"><i class="fa fa-sync-alt"></i></span>
                                  <div class="info-box-content">
                                      <span class="h5">Recursos Humanos</span>
                                      <span class="progress-description">
                                      </span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-12">
                              <div class="info-box bg-danger">
                                  <span class="info-box-icon"><i class="fa fa-sync-alt"></i></span>
                                  <div class="info-box-content">
                                      <span class="h5">Recursos Humanos</span>
                                      <span class="progress-description">
                                      </span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-12">
                              <div class="info-box bg-danger">
                                  <span class="info-box-icon"><i class="fa fa-sync-alt"></i></span>
                                  <div class="info-box-content">
                                      <span class="h5">Recursos Humanos</span>
                                      <span class="progress-description">
                                      </span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12">
                            <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#modal-postular" data-puesto="RECURSOS HUMANOS">Postula Aqu?? !</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- <div class="card-footer">
            <div class="row">
              <div class="col-12">
                <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#modal-postular">Postula Aqu?? !</button>
              </div>
            </div>
          </div> -->
        </div> 
      </div>
    @include('formulario.postular')
@endsection

@section('post-script')
  <!-- bs-custom-file-input -->
  <script src="{{ asset('Adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
  <!-- Select2 -->
  <script src="{{ asset('Adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
  <!-- InputMask -->
  <script src="{{ asset('Adminlte/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('Adminlte/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
  <script src="{{ asset('js/modulos/locacion.js') }}"></script>
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
      bsCustomFileInput.init();
      IniciarCargado();
      $('#tipo_documento').on('change', CambioTipoDocumento);
      $('#region').on('change', cargarProvincias);
      $('#provincia').on('change', cargarDistritos);

      // MODALS
      $('#modal-postular').on('show.bs.modal', showModalPostular)

      //FORMULARIOS
      $('#formPostular').on('submit', submitFormCreate);
    })

    function showModalPostular(event){
      let button = $(event.relatedTarget) // Button that triggered the modal
      
      let puesto = button.data('puesto');
      // cargamos el modal
      let modal = $(this);
      $('#puesto').val(puesto).trigger('change');
      console.log(puesto);
      if (puesto == "RECURSOS HUMANOS") {
        $('#div_practicante').show();
        $('#practicante').attr('disabled',false);
      }
      else{
        $('#div_practicante').hide();
        $('#practicante').attr('disabled',true); 
      }
      //modal.find('#A_mensaje').text(nombre);
    }

    // SUBMITS
    function submitFormCreate(e){
      e.preventDefault();
      var formData = new FormData(document.getElementById("formPostular"));
      $.ajax({
          type: "POST",
          url: "{{ route('form.postular') }}",
          data: formData,
          cache: false,
          contentType: false,
          processData: false
          //data: $('#formPostular').serialize(),
      }).done(function (response){
        console.log(response);
          if(!response.error){
              //clearModalCreate();
              $('#modal-postular').modal('hide');
              toastr.success(response.message);
          }else{
            toastr.danger(response.message);
          }
      });
    }

    function clearModalCreate(event){
      $('#numero').val('');
      $('#region').val('');
      $('#distrito').val('');
      $('#provincia').val('');
      $('#nombre').val('');
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
                      // Mostramos la informaci??n
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
                      // Mostramos la informaci??n
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