<!DOCTYPE html>
<html>
<head>
<title>RAPINET</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
  <link rel="icon" href="img/injasicon.png">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('Adminlte/dist/css/adminlte.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('Adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  @yield('pre-script')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
  @yield('distribuidor')
 <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-light navbar-white bg-dark text-white">
    <div class="container">
        <a href="{{route('inicio')}}" class="navbar-brand">
          <img src="{{ asset('img/logotipo/rapinet_blanco.png') }}" alt="Claro Lewis" class="logo brand-image " style="opacity: .9">
        </a>

        <button class="navbar-toggler order-0 text-muted bg-light" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3 justify-content-end" id="navbarCollapse">
          <!-- Left navbar links -->    
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a href="{{route('inicio')}}" class="btn-block navegacion">Inicio</a>
            </li>
            <li class="nav-item">
              <a href="{{route('trabaja_con_nosotros')}}" class=" btn-block navegacion">Trabaja con nosotros</a>
            </li>
            <li class="nav-item">
              <a href="{{route('nosotros')}}" class=" btn-block navegacion">Nosotros</a>
            </li>
            <li class="nav-item">
              <a href="{{route('login')}}" class=" btn-block navegacion">Acceso</a>
            </li>
          </ul>
        </div>
    </div>
  </nav>

      @yield('contenido')

  <section id="acceso_wspp">
    <a href="https://wa.me/961717474" class="whatsapp" target="_blank">
      <img src="{{ asset('img/icon/wsapp.png') }}" alt="" class="burbuja">
    </a>
  </section>
  <footer class="container-fluid bg-dark py-5">
    <div class="container">
      <div class="row">
          <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 ">
                  <div class="logo-part">
                      <img src="{{ asset('img/logotipo/rapinet_blanco.png') }}" class="w-50 logo-footer" >
                      <p></p>
                      <p>Distribuidor Autorizado</p>
                  </div>
                </div>
                <div class="col-md-6 px-4">
                  <h5><b>Acerca de la empresa</b> </h5>
                  <p>Distribuidor Autorizado de Claro</p>
                  <p>Más de 5 años brindando el mejor servicio</p>
                  <a href="{{route('nosotros')}}" class="btn-footer link"> Más información </a><br>
                </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 px-4">
                  <h5 class="pl-4"><b> Contactanos</b></h5>
                  <div class="row ">
                      <div class="col-md-12">
                        <ul>
                            <li class="nav"><a href="https://www.facebook.com/rapinet136" target="blank" class="link"> Facebook</a> </li>
                            <li class="nav"> <a href="https://www.instagram.com/call_claro/" target="blank" class="link"> Instagram</a> </li>
                            <li class="nav"> <a href="https://wa.me/961717474" target="blank" class="link"> WhatsApp</a> </li>
                            <!-- <li class="nav"> <a href="#" class="link"> Email</a> </li> -->
                        </ul>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <h5 class="pl-4"><b> Novedades</b></h5>
                  <div class="row text-right">
                      <div class="col-md-12 text-right">
                        <ul>
                            <li class="nav"><a href="{{ route('hogar') }}" class="link text-right"> Planes de hogar</a> </li>
                            <li class="nav"> <a href="{{ route('moviles') }}" class="link text-right"> Planes moviles</a> </li>
                            <li class="nav"> <a href="{{ route('empresas') }}" class="link text-right"> Planes empresariales</a> </li>
                        </ul>
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>
    <!-- <div class="bg-black">
      @copy
    </div> -->
  </footer>
  <footer class="footer foot-end">
    <div class="float-right d-none d-sm-block">
      <b>Área de sistemas.</b> 
    </div>
    <strong>Copyright &copy; 2022 <a href="#" class="link"> Diego Vera Villanueva</a>.</strong> Derechos Reservados.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('Adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('Adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('Adminlte/dist/js/adminlte.min.js') }}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('Adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- AdminLTE App -->
<script src="{{ asset('Adminlte/dist/js/adminlte.js') }}"></script>
@yield('post-script')
@stack('scripts')
</body>
</html>
