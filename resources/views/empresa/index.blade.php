@extends('Layout.plantilla')

@section('distribuidor')
    <header id="distribuidor-black" class="distribuidor_black">
        <div class="content-autorized">
            <img src="img/logotipo/logo-distribuidor-empresa.png" alt="distribuidor" class="logo_distribuidor">
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
    <!-- <div class="formulario_movil">
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
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="nombre">Nombre completo</label>
                      <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" placeholder="Nombre" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Tipo documento</label>
                      <select class="form-control form-control-sm select2" id="tipo_documento" name="tipo_documento">
                        <option selected="selected" value="DNI">DNI</option>
                        <option value="RUC">RUC</option>
                        <option value="CARNE">Carnet extranjería</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12" id="div_dni">
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
                  <div class="col-lg-6 col-md-12 col-sm-12" id="div_ruc">
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
                  <div class="col-lg-6 col-md-12 col-sm-12" id="div_carne">
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
                  <div class="col-lg-6">
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
                  <div class="col-lg-6">
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
                  <div class="col-lg-6">
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

                  <div class="col-lg-6">
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
    <div class="cards-planes">
      <div class="row p-4 g-4">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
          <div class="row">
          <div class="col-lg-4">
              <div class="card">
                <img src="img/cards/2play_inter_tel.png" class="card-img-top" alt="...">
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
                <img src="img/cards/2play_avanzado.png" class="card-img-top" alt="Claro 2 play">
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
                <img src="img/cards/2play_superior.png" class="card-img-top" alt="Claro 2 play">
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
            
        </div>
        
        <div class="col-lg-1"></div>
      </div>
      <div class="row p-4 g-4">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
          <div class="row">
            <div class="col-lg-4">
              <div class="card">
                <img src="img/cards/2play_inter_tel.png" class="card-img-top" alt="...">
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
                <img src="img/cards/2play_avanzado.png" class="card-img-top" alt="Claro 2 play">
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
                <img src="img/cards/2play_superior.png" class="card-img-top" alt="Claro 2 play">
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
        </div>
        <div class="col-lg-1"></div>
      </div>
    </div>
  </div>
@endsection