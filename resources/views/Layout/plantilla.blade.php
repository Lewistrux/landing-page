<!DOCTYPE html>
<html>
<head>
<title>LEWIS</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="icon" href="img/injasicon.png">
  <!-- Theme style -->
  <link rel="stylesheet" href="Adminlte/dist/css/adminlte.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!--estilos propios-->
  <link rel="stylesheet" href="Adminlte/dist/css/estilos.css">
  @yield('pre-script')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
  @yield('distribuidor')
 <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-light navbar-white bg-dark text-white">
    <div class="container">
        <a href="{{route('inicio')}}" class="navbar-brand">
          <img src="img/logotipo/rapinet_blanco.png" alt="Claro Lewis" class="logo brand-image " style="opacity: .9">
        </a>

        <button class="navbar-toggler order-0 text-muted bg-light" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->    
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="{{route('inicio')}}" class="btn btn-lg btn-block btn-dark btn-flat nav-link text-muted">Inicio</a>
            </li>
            <li class="nav-item">
              <a href="{{route('trabaja_con_nosotros')}}" class="btn btn-lg btn-block btn-dark btn-flat nav-link text-muted">Trabaja con nosotros</a>
            </li>
            <li class="nav-item">
              <a href="{{route('nosotros')}}" class="btn btn-lg btn-block btn-dark btn-flat nav-link text-muted">Nosotros</a>
            </li>
            <li class="nav-item">
              <a href="{{route('login')}}" class="btn btn-lg btn-block btn-dark btn-flat nav-link text-muted">Acceso</a>
            </li>
          </ul>
        </div>
    </div>
  </nav>
  <!-- /.navbar -->

      @yield('contenido')

  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">Vera Villanueva</a>.</strong> All rights
    reserved.
  </footer> -->
  <footer class="container-fluid bg-dark py-5">
    <div class="container">
      <div class="row">
          <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 ">
                  <div class="logo-part">
                      <img src="img/logotipo/rapinet_blanco.png" class="w-50 logo-footer" >
                      <p></p>
                      <p>Distribuidor Autorizado</p>
                  </div>
                </div>
                <div class="col-md-6 px-4">
                  <h5><b>Acerca de la empresa</b> </h5>
                  <p>Distribuidor Autorizado de Claro</p>
                  <p>Más de 5 años brindando el mejor servicio</p>
                  <a href="#" class="btn-footer"> Más información </a><br>
                </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 px-4">
                  <h5><b> Contactanos</b></h5>
                  <div class="row ">
                      <div class="col-md-12">
                        <ul>
                            <li> <a href="https://www.facebook.com/Clarohogar3play" target="blank"> Facebook</a> </li>
                            <li> <a href="#"> Instagram</a> </li>
                            <li> <a href="#"> WhatsApp</a> </li>
                            <li> <a href="#"> Email</a> </li>
                        
                        </ul>
                      </div>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <h6> Newsletter</h6>
                  <div class="social">
                      <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </div>
                  
                  <p></p>
                </div>
            </div>
          </div>
      </div>
    </div>
    <!-- <div class="bg-black">
      @copy
    </div> -->
  </footer>
  <!-- <footer class="bg-black">
    <div class="container">
      
    </div>
      <div class="container ">
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            <img src="img/logo_lewis.png" class="logo-footer m-4" alt="Lewis Claro">
          </div>

          <div class="col-sm-4 invoice-col">
           
          </div>

          <div class="col-sm-4 invoice-col mt-3">
            <b>Contactanos</b><br>
            <br>
            <b>
              <i class="fa-brands fa-facebook"></i>
              <i class="bi bi-facebook"></i>
              <a href="https://www.facebook.com/Clarohogar3play" target="blank">Facebook</a>
            </b><br>
            <b>
              <i id="icon-ig" class="bi bi-instagram"></i>
              <a href="https://www.facebook.com/Clarohogar3play" target="blank" >Instagram</a>
            </b><br>
            <b>
              <i id="icon-wp" class="bi bi-whatsapp"></i>
              <a href="https://www.facebook.com/Clarohogar3play" target="blank" >WhatsApp</a>
            </b><br>
            <b>
              <i id="icon-wp" class="bi bi-whatsapp"></i>
              <a href="https://www.facebook.com/Clarohogar3play" target="blank" >WhatsApp</a>
            </b>
            <br>
            <b>
              <i id="icon-email" class="bi bi-envelope"></i>
              <a href="https://www.facebook.com/Clarohogar3play" target="blank" >Email</a>
            </b><br><br>
            <b>Ubicanos</b><br>
            <a href="https://www.google.com/maps/dir//Maquinegocios,+Av.+Espa%C3%B1a+136,+Trujillo+13001/@-8.1153854,-79.0315428,18.75z/data=!4m8!4m7!1m0!1m5!1m1!1s0x91ad3d9d444f36b1:0xcd0a00ecfb1bf1dc!2m2!1d-79.0315236!2d-8.1152006" target="blank" >Av. España 136 - Trujillo</a>
          </div>
        </div>
      </div>
    </footer> -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="Adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="Adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="Adminlte/dist/js/adminlte.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="Adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- AdminLTE App -->
<script src="Adminlte/dist/js/adminlte.js"></script>
@yield('post-script')
@stack('scripts')
</body>
</html>
