@extends('Layout.plantilla')

@section('pre-script')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('Adminlte/plugins/select2/css/select2.min.css') }}">
@endsection

@section('distribuidor')
    @include('Layout.header_black')
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
              <img class="d-block w-100" src="{{ asset('img/banners/movil/movil_1.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('img/banners/movil/movil_2.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('img/banners/movil/movil_3.png') }}" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('img/banners/movil/movil_4.png') }}" alt="four slide">
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
    </div>
    <div class="content-page"> 
      <div class="cards-planes">
        <div class="row p-4 g-4">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <div class="row">
              <div class="col-lg-4">
                <div class="card">
                  <img src="{{ asset('img/cards/negocios/maxneg_69.png') }}" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-movil">Me interesa</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <img src="{{ asset('img/cards/negocios/maxneg_79.png') }}" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-movil">Me interesa</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <img src="{{ asset('img/cards/negocios/maxneg_95.png') }}" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-movil">Me interesa</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-1"></div>
        </div>
        <div class="row p-4 g-4">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <div class="row">
              <div class="col-lg-4">
                <div class="card">
                  <img src="{{ asset('img/cards/negocios/maxneg_109.png') }}" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-movil">Me interesa</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <img src="{{ asset('img/cards/negocios/maxneg_125.png') }}" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-movil">Me interesa</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <img src="{{ asset('img/cards/negocios/maxneg_159.png') }}" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-movil">Me interesa</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-1"></div>
        </div>
        <div class="row p-4 g-4">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <div class="row">
              <div class="col-lg-4">
                <div class="card">
                  <img src="{{ asset('img/cards/negocios/maxneg_189.png') }}" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-movil">Me interesa</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <img src="{{ asset('img/cards/negocios/maxneg_289.png') }}" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-movil">Me interesa</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-lg-1"></div>
        </div>
      </div>
    </div>
    @include('formulario.movil')
@endsection

@section('post-script')
  <!-- Select2 -->
  <script src="{{ asset('Adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
  <!-- InputMask -->
  <script src="{{ asset('Adminlte/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('Adminlte/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
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
      $('#formMovil').on('submit', submitFormCreate);
    })

    // SUBMITS
    function submitFormCreate(e){
      e.preventDefault();
      console.log($('#formMovil').serialize());
      $.ajax({
          type: "POST",
          url: "{{ route('form.registro','CORP-MOVIL') }}",
          data: $('#formMovil').serialize(),
      }).done(function (response){
        console.log(response);
          if(!response.error){
              clearModalCreate();
              $('#modal-movil').modal('hide');
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
      $('#div_ruc').hide();
      $('#div_carne').hide();
      $('#tipo_documento').trigger('change');
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