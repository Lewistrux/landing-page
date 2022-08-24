@extends('Layout.plantilla')
@section('distribuidor')
    <header id="distribuidor_red" class="distribuidor_red">
      <div class="content-autorized">
          <img src="img/logotipo/logo-distribuidor-autorizado-persona.png" alt="distribuidor" class="logo_distribuidor">
      </div>
    </header>
@endsection
@section('contenido')
      <!-- <div class="card">
        <div class="card-body banner">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/banners/banner_3.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/banners/banner_2.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/banners/banners.png" alt="Third slide">
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
      </div> -->
      <section id="portada" class="portada">
        <img src="img/portadas/postula.png" class="portada">
      </section>
      <div class="content-page"> 
        <!-- <div class="row">
          <div class="col-lg-4">
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
          <div class="col-lg-4">
          </div>
        </div> -->
        <div class="row content-buttons">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#modal-postular">Postula Aquí</button>
          </div>
          <div class="col-lg-3"></div>
        </div>
      </div>
    @include('formulario.postular')
@endsection