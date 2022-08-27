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
      <!-- /.card-body -->
    </div>
    <div class="content-page"> 
      <div class="cards-planes">
        <div class="row p-4 g-4">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <div class="row">
              <div class="col-lg-4">
                <div class="card">
                  <img src="img/cards/max_29.png" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-default">Me interesa</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <img src="img/cards/max_39.png" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-default">Me interesa</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <img src="img/cards/max_49.png" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-default">Me interesa</button>
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
                  <img src="img/cards/max_55.png" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-default">Me interesa</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <img src="img/cards/max_69.png" class="card-img-top" alt="..."> 
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#modal-default">Me interesa</button>
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
@endsection

@section('post-script')
  <!-- Select2 -->
  <script src="Adminlte/plugins/select2/js/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="Adminlte/plugins/moment/moment.min.js"></script>
  <script src="Adminlte/plugins/inputmask/jquery.inputmask.min.js"></script>
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
      //Money Euro
      $('[data-mask]').inputmask()

      IniciarCargado();
      $('#tipo_documento').on('change', CambioTipoDocumento);
    })

    function IniciarCargado(){
      // $('#div_dni').hide();
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
  </script>
@endsection