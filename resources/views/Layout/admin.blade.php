<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RAPINET | ADMIN</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
  <link rel="icon" href="{{ asset('img/navegador/log_navegacion.png') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('Adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('Adminlte/dist/css/adminlte.min.css') }}">
  @yield('pre-script')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-secondary navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class=" link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('administracion') }}" class=" link">Inicio</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('administracion') }}" class="brand-link">
      <!-- <img src="img/logotipo/rapinet_blanco.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8"> -->
      <span class="brand-text font-weight pl-5 pr-5 ml-3 link"> RAPINET SAC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/avatar/avatar2.png') }}" class="img-circle" alt="User Image">
          <!-- <img src="img/logotipo/rapinet_blanco.png" class="brand-image" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block link text-sm">{{ getNombresYApellidosUser() }}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Clientes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('clientes.nuevos') }}" class="nav-link">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Nuevos</p>
                  <span class="right badge badge-warning">{{ aviso_clientes_nuevos() }}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('clientes.asignados') }}" class="nav-link">
                  <i class="fas fa-user-check nav-icon"></i>
                  <p>Asignados</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('postulantes') }}" class="nav-link">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Postulantes
                <span class="right badge badge-warning">{{ aviso_postulantes_nuevos() }}</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('login')}}" class="nav-link">
              <i class="nav-icon fas fa-door-open"></i>
              <p>
                Cerrar Sesi??n
                <span class="right badge badge-danger">X</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
              @yield('titulo-vista')
            </h1>
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div> -->
        </div>
      </div>
    </section>

    <section class="content">
      @yield('contenido-admin')
    </section>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer bg-dark">
    <div class="float-right d-none d-sm-block">
      <b>??rea de sistemas.</b> 
    </div>
    <strong>Copyright &copy; 2022 <a href="#" class="link"> Diego Vera Villanueva</a>.</strong> Todos los derechos reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('Adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('Adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('Adminlte/dist/js/adminlte.min.js') }}"></script>
@yield('post-script')
</body>
</html>
