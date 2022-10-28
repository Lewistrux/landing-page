@extends('Layout.plantilla')
@section('pre-script')
  <!-- Ekko Lightbox -->
  <!-- <link rel="stylesheet" href="css/estilos.css"> -->
@endsection
@section('distribuidor')
  @include('Layout.header_red')
@endsection

@section('contenido')
    <div class="wrapper">
      <section id="banner">
        <div class="row">
          <div class="col-12">
            <img src="{{ asset('img/portadas/portada_principal.png') }}" alt="Claro Distribuidor rapinet">
          </div>
        </div>
      </section>
      <!-- ./wrapper -->
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
                <img class="d-block w-100" src="img/banners/banner_1.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/banners/banner_2.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/banners/banner_3.png" alt="Third slide">
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
      </div> -->
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
        <div class="targets text-center">
          <div class="row">
            <div class="col-1"></div>
            <div class="col-lg-10">
              <div class="row">
                <div class="col-lg-4 p-2">
                  <a type="button" class="btn" href="{{route('hogar')}}">
                    <img src="{{ asset('img/servicios/hogar.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="Hogar y familia">
                  </a>
                </div>
                <div class="col-lg-4 p-2">
                  <a type="button" class="btn" href="{{route('moviles')}}">
                    <img src="{{ asset('img/servicios/movil.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="plan movil">
                  </a>
                </div>
                <div class="col-lg-4 p-2">
                  <a type="button" class="btn" href="{{route('empresas')}}">
                    <img src="{{ asset('img/servicios/empresa.png') }}" class="tarjeta-btn elevation-2 p-2 link-tarjeta" alt="Empresas y negocios">
                  </a>
                </div>
              </div>
            </div>   
            <div class="col-1"></div>
          </div>
        </div> 
        <div class="row">

        </div>
      </div>
      <!-- <header class="hero">
          <div class="textos-hero">
              <h1>Bienvenido a Rapinet</h1>
              <p>Distribuidor Autorizado de Claro creando el mejor sitio web para ti</p>
              <a class="btn btn-info btn-lg" href="#contacto">Contactame</a>
          </div>
          <div class="svg-hero" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                  style="height: 100%; width: 100%;">
                  <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                      style="stroke: none; fill: #fff;"></path>
              </svg></div>
      </header>
      <section class="wave-contenedor website">
          <img src="img/landing/ilustracion1.svg" alt="">
          <div class="contenedor-textos-main">
              <h2 class="titulo left">Internet para tu hogar</h2>
              <p class="parrafo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt enim reiciendis
                  molestias nam tempore. Ullam hic accusantium eligendi ipsam corrupti!</p>
              <a href="" class="cta">Learn more</a>
          </div>
      </section>
      <section class="info">
          <div class="contenedor">
              <h2 class="titulo left">Juntos podemos apoyar</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
      </section>
      <section class="cards contenedor">
          <h2 class="titulo">Our services</h2>
          <div class="content-cards">
              <article class="card">
                  <i class="far fa-clone"></i>
                  <h3>Title Card</h3>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                  <a href="" class="cta">Learn more</a>
              </article>
              <article class="card">
                  <i class="fas fa-database"></i>
                  <h3>Title Card</h3>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                  <a href="" class="cta">Learn more</a>
              </article>
              <article class="card">
                  <i class="far fa-object-group"></i>
                  <h3>Title Card</h3>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                  <a href="" class="cta">Learn more</a>
              </article>
          </div>
      </section>
      <section class="galeria">
          <div class="contenedor">
              <h2 class="titulo">Our work</h2>
              <article class="galeria-cont">
                  <img src="img/landing/uno.jpg" alt="">
                  <img src="img/landing/dos.jpg" alt="">
                  <img src="img/landing/tres.jpg" alt="">
                  <img src="img/landing/cuatro.jpg" alt="">
                  <img src="img/landing/cinco.jpg" alt="">
                  <img src="img/landing/seis.jpg" alt="">
              </article>
          </div>
      </section>
      <section class="info-last">

          <div class="contenedor last-section">
              <div class="contenedor-textos-main">
                  <h2 class="titulo left">Title of section</h2>
                  <p class="parrafo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum reprehenderit nostrum expedita quasi odio architecto laudantium sunt nemo dicta atque?</p>
                  <a href="" class="cta">Learn more</a>
              </div>
              <img src="img/ilustracion.svg" alt="">
          </div>
          
          <div class="svg-wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
              style="height: 100%; width: 100%;">
              <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                  style="stroke: none; fill: #fca402da;"></path>
          </svg></div>
      </section>
      <footer id="contacto">
          <div class=" formulario">
            <div class="row">
              
              <div class="col-lg-12 col-md-12 col-sm-12">
              <h2 class="titulo">Contactanos</h2>
              <form id="formGeneral" action="" method="POST">
                  @csrf 
                      <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="form-group">
                                  <label for="nombre">Nombres y Apellidos</label>
                                  <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" placeholder="Nombre" required>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group">
                                  <label>Número</label>
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                      </div>
                                      <input id="numero" name="numero" type="text" class="form-control form-control-sm" data-inputmask="'mask': ['999 999 999']" data-mask>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group">
                                  <label>Localidad <span class="font-italic ">(Depto - Prov - Dist)</span> </label>
                                  <select class="form-control form-control-sm select2" id="localidad" name="localidad" required>
                                      <option></option>
                                      @foreach(cargarCiudades() as $ciudad)
                                          <option value="{{ $ciudad->dist_ID }}">{{ $ciudad->regi_nombre }} - {{ $ciudad->prov_nombre }} - {{ $ciudad->dist_nombre }}</option>
                                      @endforeach
                                  </select>
                              </div>
                          </div>
                      </div>  
                      <div class="modal-footer justify-content-between">
                          <button type="submit" class="btn btn-danger text-white w-100">Enviar</button>
                      </div>                
                  </form>
              </div>
            </div>
              
          </div>
      </footer> -->
    </div>
@endsection