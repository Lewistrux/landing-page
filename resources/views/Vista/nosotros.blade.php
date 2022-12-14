@extends('Layout.plantilla')
@section('pre-script')
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="{{ asset('Adminlte/plugins/ekko-lightbox/ekko-lightbox.css') }}">
@endsection
@section('distribuidor')
    <header id="distribuidor_red" class="distribuidor_red">
      <div class="content-autorized">
          <img src="img/logotipo/logo-distribuidor-autorizado-persona.png" alt="distribuidor" class="logo_distribuidor">
      </div>
    </header>
@endsection
@section('contenido')
    <section id="banner">
        <img src="img/galeria/local/portada2.jpeg">
    </section>
    <section class="content m-3">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-warning card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class=" img-fluid" src="{{ asset('img/logotipo/rapinet_negro.png') }}" alt="User profile picture">  <!-- profile-user-img -->
                        </div>
                        <h3 class="profile-username text-center">RAPINET S.A.C</h3>
                        <p class="text-muted text-center">Distribuidor Autorizado de Claro</p>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Facebook</b> <a class="float-right link" href="https://www.facebook.com/rapinet136" target="blank" style="color: rgb(255, 81, 0)">Call Claro</a>
                            </li>
                            <li class="list-group-item">
                                <b>Instagram</b> <a class="float-right link" href="https://www.instagram.com/call_claro/" target="blank" style="color: rgb(255, 81, 0)">call_claro</a>
                            </li>
                            <li class="list-group-item">
                                <b>WhatsApp</b> <a class="float-right link" href="https://wa.me/961717474" target="blank" style="color: rgb(255, 81, 0)">Encargada Marketing</a>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-warning btn-block text-white"><b>Siguenos</b></a>
                    </div>
                </div>
                
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title text-white">Acerca de nosotros</h3>
                    </div>
                    <div class="card-body">
                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicaci??n</strong>
                        <p class="text-muted">Av. Espa??a 136 - Trujillo - Per??</p>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item pr-2"><a class="nav-link active bg-warning" href="#settings" data-toggle="tab">Ubicaci??n</a></li>
                            <li class="nav-item pr-2"><a class="nav-link bg-warning" href="#servicios" data-toggle="tab">Servicios</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="settings">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7899.746588945557!2d-79.03578811999816!3d-8.114381594962968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad3d9d441352ed%3A0x8a2684783358cb0b!2sAv.%20Espa%C3%B1a%20146%2C%20Trujillo%2013001!5e0!3m2!1ses-419!2spe!4v1661355646776!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="tab-pane" id="servicios">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="info-box bg-success">
                                            <span class="info-box-icon"><i class="fas fa-shopping-cart"></i></span>
                                            <div class="info-box-content">
                                                <span class="h5">Venta de equipos al contado.</span>
                                                <span class="progress-description">
                                                    Cuotas desde 0 inicial.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="info-box bg-success">
                                            <span class="info-box-icon"><i class="far fa-copy"></i></span>
                                            <div class="info-box-content">
                                                <span class="h5">Pagos de recibos Claro.</span>
                                                <span class="progress-description">
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="info-box bg-success">
                                            <span class="info-box-icon"><i class="fa fa-mobile"></i></span>
                                            <div class="info-box-content">
                                                <span class="h5">Recargas de celulares.</span>
                                                <span class="progress-description">
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="info-box bg-success">
                                            <span class="info-box-icon"><i class="fa fa-sim-card"></i></span>
                                            <div class="info-box-content">
                                                <span class="h5">Reposici??n de chip Postpago - Prepago.</span>
                                                <span class="progress-description">
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="info-box bg-success">
                                            <span class="info-box-icon"><i class="fa fa-sync-alt"></i></span>
                                            <div class="info-box-content">
                                                <span class="h5">Migraci??n de Prepago a Postpago.</span>
                                                <span class="progress-description">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-warning">
                                    <div class="card-header">
                                        <h4 class="card-title text-white">Galer??a</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <a href="{{ asset('img/galeria/equipo/1.jpg') }}" data-toggle="lightbox" data-title="Primer equipo de trabajo" data-gallery="gallery">
                                                    <img src="{{ asset('img/galeria/equipo/1.jpg') }}" class="img-fluid mb-2" alt="equipo de trabajo"/>
                                                </a>
                                            </div>
                                            <div class="col-sm-2">
                                                <a href="{{ asset('img/galeria/equipo/2.jpg') }}" data-toggle="lightbox" data-title="Asesores brindando informaci??n de calidad" data-gallery="gallery">
                                                    <img src="{{ asset('img/galeria/equipo/2.jpg') }}" class="img-fluid mb-2" alt="asesores"/>
                                                </a>
                                                <a href="{{ asset('img/galeria/equipo/3.jpg') }}" data-toggle="lightbox" data-title="Premiando su esfuerzo" data-gallery="gallery">
                                                    <img src="{{ asset('img/galeria/equipo/3.jpg') }}" class="img-fluid mb-2" alt="premiaci??n"/>
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="{{ asset('img/galeria/equipo/7.jpg') }}" data-toggle="lightbox" data-title="Capacitaciones constantes" data-gallery="gallery">
                                                    <img src="{{ asset('img/galeria/equipo/7.jpg') }}" class="img-fluid mb-2" alt="capacitaciones"/>
                                                </a>
                                            </div>
                                            <div class="col-sm-2">
                                                <a href="{{ asset('img/galeria/equipo/6.jpg') }}" data-toggle="lightbox" data-title="L??deres en ventas" data-gallery="gallery">
                                                    <img src="{{ asset('img/galeria/equipo/6.jpg') }}" class="img-fluid mb-2" alt="l??deres"/>
                                                </a>
                                            </div>
                                            <div class="col-sm-2">
                                                <a href="{{ asset('img/galeria/equipo/5.jpg') }}" data-toggle="lightbox" data-title="Reconociendo el talento" data-gallery="gallery">
                                                    <img src="{{ asset('img/galeria/equipo/5.jpg') }}" class="img-fluid mb-2" alt="reconocimiento"/>
                                                </a>
                                            </div>
                                            <div class="col-sm-2">
                                                <a href="{{ asset('img/galeria/equipo/8.jpg') }}" data-toggle="lightbox" data-title="Apoyo de compa??eros" data-gallery="gallery">
                                                    <img src="{{ asset('img/galeria/equipo/8.jpg') }}" class="img-fluid mb-2" alt="asesores"/>
                                                </a>
                                            </div>
                                            <div class="col-sm-2">
                                                <a href="{{ asset('img/galeria/equipo/9.jpg') }}" data-toggle="lightbox" data-title="Servicios y productos" data-gallery="gallery">
                                                    <img src="{{ asset('img/galeria/equipo/9.jpg') }}" class="img-fluid mb-2" alt="servicios y productos"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>    
      </div>
    </section>
@endsection


@section('post-script')
<!-- Ekko Lightbox -->
<script src="{{ asset('Adminlte/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>

<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });
  })
</script>
@endsection
