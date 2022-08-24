@extends('Layout.plantilla')

@section('distribuidor')
    <header id="distribuidor_red" class="distribuidor_red">
      <div class="content-autorized">
          <img src="img/logotipo/logo-distribuidor-autorizado-persona.png" alt="distribuidor" class="logo_distribuidor">
      </div>
    </header>
@endsection
@section('contenido')
    <section id="banner">
        <img src="img/banners/portada_mepresa.jpg">
    </section>

    <section class="content m-3">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-warning card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class=" img-fluid" src="img/logotipo/rapinet_negro.png" alt="User profile picture">  <!-- profile-user-img -->
                        </div>
                        <h3 class="profile-username text-center">RAPINET S.A.C</h3>
                        <p class="text-muted text-center">Distribuidor Autorizado de Claro</p>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Facebook</b> <a class="float-right" href="https://www.facebook.com/Clarohogar3play" target="blank">Claro hogar 3play</a>
                            </li>
                            <li class="list-group-item">
                                <b>Instagram</b> <a class="float-right" href="https://www.facebook.com/Clarohogar3play" target="blank">clarohome3play</a>
                            </li>
                            <li class="list-group-item">
                                <b>WhatsApp</b> <a class="float-right" href="https://wa.me/961717474" target="blank">Encargada Marketing</a>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-warning btn-block"><b>Siguenos</b></a>
                    </div>
                </div>
                
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Acerca de nosotros</h3>
                    </div>
                    <div class="card-body">
                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicación</strong>
                        <p class="text-muted">Av. España 136 - Trujillo - Perú</p>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Equipos</h3>
                            <p>Móviles para tí</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            Más info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>
                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            Más info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>
                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            Más info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            Más info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Información</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="settings">
                                <form class="form-horizontal">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Somos</label>
                                    <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                    <div class="col-sm-10">
                                    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                        </label>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>    
      </div>
    </section>
@endsection
