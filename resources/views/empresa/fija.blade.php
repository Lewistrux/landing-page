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
        <img src="{{ asset('img/portadas/empresa/fija.png') }}" alt="Internet corporativo">
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
                  <img src="{{ asset('img/cards/negocios/fija/emp_fija_77.png') }}" class="card-img-top" alt="Internet empresas"> 
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
                  <img src="{{ asset('img/cards/negocios/fija/emp_fija_87.png') }}" class="card-img-top" alt="Internet empresas"> 
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
                  <img src="{{ asset('img/cards/negocios/fija/emp_fija_98.png') }}" class="card-img-top" alt="Internet empresas"> 
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
                  <img src="{{ asset('img/cards/negocios/fija/1play_49.png') }}" class="card-img-top" alt="Telefonía para empresas"> 
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
                  <img src="{{ asset('img/cards/negocios/fija/1play_120.png') }}" class="card-img-top" alt="Canales para empresas"> 
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
                  <img src="{{ asset('img/cards/negocios/fija/1play_170.png') }}" class="card-img-top" alt="canales para empresas"> 
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
      $('#localidad').val('');
      $('#nombre').val('');
    }

    function IniciarCargado(){
      //sin datos
    }

  </script>
@endsection