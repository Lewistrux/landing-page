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
              <img class="d-block w-100" src="{{ asset('img/banners/banner_1.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('img/banners/banner_2.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('img/banners/banner_3.png') }}" alt="Third slide">
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
      <!-- <div class="formulario">
        <div class="row">
          <div class="col-lg-8">
          </div>
          <div class="col-lg-4">
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Dejanos tus datos</h3>
              </div>
              <form>
                <div class="card-body">
                  <div class="row">

                    <div class="col-12">
                      <div class="form-group">
                        <label for="nombre">Nombre completo</label>
                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" placeholder="Nombre" required>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Tipo documento</label>
                        <select class="form-control form-control-sm select2" id="tipo_documento" name="tipo_documento">
                          <option selected="selected" value="DNI">DNI</option>
                          <option value="RUC">RUC</option>
                          <option value="CARNE">Carnet extranjería</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12" id="div_dni">
                      <div class="form-group">
                        <label>DNI</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input type="text" class="form-control form-control-sm" data-inputmask="'mask': ['99999999']" data-mask>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12" id="div_ruc">
                      <div class="form-group">
                        <label>RUC</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input type="text" class="form-control form-control-sm" data-inputmask="'mask': ['99999999999']" data-mask>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12" id="div_carne">
                      <div class="form-group">
                        <label>Carnet extranjería</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input type="text" class="form-control form-control-sm" data-inputmask="'mask': ['999999999999']" data-mask>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Número</label>

                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                          <input type="text" class="form-control form-control-sm" data-inputmask="'mask': ['999-999-999']" data-mask>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Departamento</label>
                        <select class="form-control form-control-sm select2 ">
                          <option selected="selected">La Libertad</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Provincia</label>
                        <select class="form-control form-control-sm select2 ">
                          <option selected="selected">Trujillo</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Distrito</label>
                        <select class="form-control form-control-sm select2 ">
                          <option selected="selected">La esperanza</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                    </div>

                  </div>                  
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary w-100">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div> -->
      <div class="cards">
        <div class="content-buttons">
          <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-0"></div>
            <div class="col-lg-6 col-md-8 col-sm-12 text-center">
              <button type="button" id="btn-2play" onclick="Boton2Play()" class="btn btn-lg" style="background-color: red; color: white;">Planes 2 Play</button>
              <button type="button" id="btn-3play" onclick="Boton3Play()" class="btn btn-lg" style="background-color: red; color: white;">Planes 3 Play</button>
              <button type="button" id="btn-2play" onclick="BotonNetflix()" class="btn btn-lg" style="background-color: red; color: white;">Planes Netflix</button>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-0"></div>
          </div>
        </div>
      </div>
      <div class="cards-planes content-buttons-card">
        <div class="row p-4 g-4" id="2play">
          <!-- <div class="col-lg-2"></div> -->
          <div class="col-lg-4">
            <div class="card">
              <img src="{{ asset('img/cards/hogar/2play_inter_tel.png') }}" class="card-img-top" alt="...">
              <!-- <div class="card-body text-center  p-0"> -->
                <!-- <h5> <b> Planes 2 play</b></h5>
                <p class="card-text">Disfruta de los mejores planes 2 play para ti y tu familia.</p> -->
              <!-- </div> -->
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
              <img src="{{ asset('img/cards/hogar/2play_avanzado.png') }}" class="card-img-top" alt="Claro 2 play">
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
              <img src="{{ asset('img/cards/hogar/2play_superior.png') }}" class="card-img-top" alt="Claro 2 play">
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
          <!-- <div class="col-lg-2"></div> -->
        </div>

        <div class="row p-4 g-4" id="3play">
          <div class="col-lg-2"></div>
          <div class="col-lg-4">
            <div class="card">
              <img src="{{ asset('img/cards/hogar/3play_avanzado.png') }}" class="card-img-top" alt="...">
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
              <img src="{{ asset('img/cards/hogar/3play_superior.png') }}" class="card-img-top" alt="...">
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
              <img src="{{ asset('img/cards/hogar/2play_netflix.png') }}" class="card-img-top" alt="...">
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
              <img src="{{ asset('img/cards/hogar/3play_netflix.png') }}" class="card-img-top" alt="...">
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
      $('#tipo_documento').on('change', CambioTipoDocumento);
      // $('#btn-3play').on('onclik',Boton3Play);
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
      $('#tipo_documento').val('');
      $('#dni').val('');
      $('#ruc').val('');
      $('#carnet').val('');
      $('#numero').val('');
      $('#region').val('');
      $('#distrito').val('');
      $('#provincia').val('');
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
      // $('#div_dni').hide();
      $('#div_ruc').hide();
      $('#div_carne').hide();
      $('#tipo_documento').trigger('change');
      $('#3play').hide();
      $('#netflix').hide();
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