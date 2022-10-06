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
  <section id="banner">
    <div class="row">
      <div class="col-12">
        <img src="{{ asset('img/portadas/empresa/fija.png') }}">
      </div>
    </div>
  </section>
    <div class="content-page"> 
      <div class="cards-planes">
        <div class="row p-4 g-4">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <div class="row">
              <div class="col-12">
                <hr>
                <h1 class="text-center">INTERNET</h1>
                <hr>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                  <img src="{{ asset('img/cards/negocios/fija/emp_fija_77.png') }}" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-hogar">Me interesa</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                  <img src="{{ asset('img/cards/negocios/fija/emp_fija_87.png') }}" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-hogar">Me interesa</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                  <img src="{{ asset('img/cards/negocios/fija/emp_fija_98.png') }}" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-hogar">Me interesa</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <hr>
                <h1 class="text-center">1 play</h1>
                <hr>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                  <img src="{{ asset('img/cards/negocios/fija/1play_49.png') }}" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-hogar">Me interesa</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                  <img src="{{ asset('img/cards/negocios/fija/1play_120.png') }}" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-hogar">Me interesa</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                  <img src="{{ asset('img/cards/negocios/fija/1play_170.png') }}" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-hogar">Me interesa</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 text-right">
                <hr>
                <a href="{{ route('empresas') }}" class="btn btn-warning btn-lg text-right">
                  Volver
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-1"></div>
        </div>
      </div>
    </div>
    @include('formulario.empresa.hogar')
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
      $('#formHogar').on('submit', submitFormCreate);
    })

    // SUBMITS
    function submitFormCreate(e){
      e.preventDefault();
      console.log($('#formHogar').serialize());
      $.ajax({
          type: "POST",
          url: "{{ route('form.registro','CORP-FIJA') }}",
          data: $('#formHogar').serialize(),
      }).done(function (response){
        console.log(response);
          if(!response.error){
              clearModalCreate();
              $('#modal-hogar').modal('hide');
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
      //sin datos
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