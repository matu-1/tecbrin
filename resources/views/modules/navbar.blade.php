<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row {{ auth()->user()->color_navbar}}">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
      <a class="navbar-brand brand-logo" href="{{ asset('/home') }}"><img src="{{ asset('images/logo.svg') }}" alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href="{{ asset('/home') }}"><img src="{{ asset('images/logo-mini.svg') }}" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu"></span>
      </button>
      <ul class="navbar-nav navbar-nav-right">
        {{-- <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="icon-bell mx-0"></i>
            <span class="count"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <a class="dropdown-item">
              <p class="mb-0 font-weight-normal float-left">Tienes 4 notificaciones nuevas
              </p>
              <span class="badge badge-pill badge-warning float-right">Ver todo</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-success">
                  <i class="icon-info mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-medium">Error de la aplicacion</h6>
                <p class="font-weight-light small-text">
                  Justo ahora
                </p>
              </div>
            </a> 
          </div>
        </li> --}}
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
             <i class="icon-user"></i>
          </a>
          <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
            <a class="dropdown-item font-weight-medium" href="{{ route('logout') }}">
              <i class="icon-power text-primary"></i>
              Salir
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item font-weight-medium" href="#">
               <i class="icon-user text-success"></i>
              Perfil
            </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
      </button>
    </div>
  </nav>