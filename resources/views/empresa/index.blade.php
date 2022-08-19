@extends('Layout.plantilla')

@section('distribuidor')
    <header id="distribuidor-black" class="distribuidor_black">
        <div class="content-autorized">
            <img src="img/logotipo/logo-distribuidor-empresa.png" alt="distribuidor" class="logo_distribuidor">
        </div>
    </header>
@endsection
@section('contenido')
    <!-- Main content -->
    <section class="content m-5">
      <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Profile Image -->
                            <div class="card card-danger card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid" src="img/logo_lewis.png" alt="User profile picture">
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
                                            <b>WhatsApp</b> <a class="float-right">Encargada Marketing</a>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- About Me Box -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Acerca de nosotros</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i> Education</strong>
                                    <p class="text-muted">B.S. in Computer Science from the University of Tennessee at Knoxville</p>
                                    <hr>
                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicación</strong>
                                    <p class="text-muted">Av. España 136 - Trujillo - Perú</p>
                                    <hr>
                                    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                                    <p class="text-muted">
                                        <span class="tag tag-danger">UI Design</span>
                                        <span class="tag tag-success">Coding</span>
                                        <span class="tag tag-info">Javascript</span>
                                        <span class="tag tag-warning">PHP</span>
                                        <span class="tag tag-primary">Node.js</span>
                                    </p>
                                    <hr>
                                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">

                                        <div class="tab-pane active" id="settings">
                                            <form class="form-horizontal">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
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
                                    <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                        <!-- /.row -->
              
      </div><!-- /.container-fluid -->
    </section>
@endsection