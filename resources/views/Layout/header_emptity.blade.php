<nav class="navbar navbar-expand-md navbar-light navbar-white bg-dark text-white">
  <div class="container">
    <a href="{{route('inicio')}}" class="navbar-brand">
      <img src="{{ asset('img/logotipo/rapinet_blanco.png') }}" alt="Rapinet" class="logo brand-image " style="opacity: .9">
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