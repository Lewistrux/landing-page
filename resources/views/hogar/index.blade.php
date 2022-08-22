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
    <!-- <section id="banner">
        <img src="img/portadas/22.png">
    </section> -->
    <div class="content-page"> 

      <div class="formulario">
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
      </div>

      <div class="cards">
        <div class="content-buttons">
          <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-0"></div>
            <div class="col-lg-3 col-md-4 col-sm-12 text-right algin-center">
              <button type="button" id="btn-2play" onclick="Boton2Play()" class="btn btn-lg btn-block" style="background-color: red; color: white;">2 Play</button>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 text-left">
              <button type="button" id="btn-3play" onclick="Boton3Play()" class="btn btn-lg btn-block" style="background-color: red; color: white;">3 Play</button>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-0"></div>
          </div>
        </div>
      </div>
      <div class="cards-planes">
        <div class="row g-4" id="2play">
          <div class="col-lg-2"></div>
          <div class="col-lg-4">
            <div class="card h-100">
              <img src="img/botones/btn_inter_tel.png" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-8">
                    <h5> <b> Planes 3 play</b></h5>
                    <p class="card-text">Disfruta de los mejores planes 3 play para ti y tu familia.</p>
                  </div>
                  <div class="col-lg-4">
                    <img src="img/servicios/claro_video.png" class="img-into-card" alt="">
                  </div>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  <b>50 Mbps</b> de internet
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Hasta <b>75 Mbps</b>  de internet
                  <br><span class="text-muted pl-3">Contando con Full Claro</span>
                </li>
                <li class="list-group-item">
                <i class="fa fa-check" style="color: green;"></i>
                  Hasta 15 Mbps de <b>subida</b> 
                </li>
              </ul>
              <div class="card-footer">
                <div class="row">
                  <div class="col-lg-8">
                    Planes desde:
                    <h2>S/.40</h2>  
                    <span class="text-muted text-sm">por el 1er mes</span> 
                  </div>
                  <div class="col-lg-4">
                    <button type="button" class="btn btn-info">Me interesa</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card h-100">
              <img src="img/botones/btn_inter_tv.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5> <b> Planes 3 play</b></h5>
                <p class="card-text">Disfruta de los mejores planes 3 play para ti y tu familia.</p>
              </div>
              <ul class="list-group list-group-flush">
                
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  <b>50 Mbps</b> de internet
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Hasta <b>75 Mbps</b>  de internet
                  <br><span class="text-muted pl-3">Contando con Full Claro</span>
                </li>
                <li class="list-group-item">
                <i class="fa fa-check" style="color: green;"></i>
                  Hasta 15 Mbps de <b>subida</b> 
                </li>
              </ul>
              <div class="card-footer">
                <div class="row">
                  <div class="col-lg-8">
                    Planes desde:
                    <h2>S/.40</h2>  
                    <span class="text-muted text-sm">por el 1er mes</span> 
                  </div>
                  <div class="col-lg-4">
                    <button type="button" class="btn btn-info">Me interesa</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2"></div>
        </div>

        <div class="row g-4" id="3play">
          <div class="col-lg-4"></div>
          <div class="col-lg-4">
            <div class="card h-100">
              <img src="img/botones/btn_inter_tv_tel.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5> <b> Planes 3 play</b></h5>
                <p class="card-text">Disfruta de los mejores planes 3 play para ti y tu familia.</p>
              </div>
              <ul class="list-group list-group-flush">
                
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  <b>50 Mbps</b> de internet
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check" style="color: green;"></i>
                  Hasta <b>75 Mbps</b>  de internet
                  <br><span class="text-muted pl-3">Contando con Full Claro</span>
                </li>
                <li class="list-group-item">
                <i class="fa fa-check" style="color: green;"></i>
                  Hasta 15 Mbps de <b>subida</b> 
                </li>
              </ul>
              <div class="card-footer">
                <div class="row">
                  <div class="col-lg-8">
                    Planes desde:
                    <h2>S/.40</h2>  
                    <span class="text-muted text-sm">por el 1er mes</span> 
                  </div>
                  <div class="col-lg-4">
                    <button type="button" class="btn btn-info">Me interesa</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4"></div>
        </div>
      </div>
      
      
      <!-- <div class="portada">
        <img src="" alt="">
      </div> -->
      
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
      // $('#btn-3play').on('onclik',Boton3Play);
    })

    function Boton3Play(){
      $('#3play').show();
      $('#2play').hide();
    }

    function Boton2Play(){
      $('#2play').show();
      $('#3play').hide();
    }

    function IniciarCargado(){
      // $('#div_dni').hide();
      $('#div_ruc').hide();
      $('#div_carne').hide();
      $('#tipo_documento').trigger('change');
      $('#3play').hide();
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