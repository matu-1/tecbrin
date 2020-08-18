<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image">
          <img src="{{ asset('images/faces/face12.jpg') }}" alt="image"/>
          <span class="online-status online"></span> <!--change class online to offline or busy as needed-->
        </div>
        <div class="profile-name">
          <p class="name">
           {{auth()->user()->nombre}}
          </p>
          <p class="designation">
            {{auth()->user()->tipo}}
          </p>
        </div>
      </div>
    </li>

    @if (auth()->user()->tipo == "administrativo")
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#administracion" aria-expanded="false" aria-controls="administracion">
          <i class=" icon-home menu-icon"></i>
          <span class="menu-title">Administracion</span>
          <span class="badge badge-primary">1</span>
        </a>
        <div class="collapse" id="administracion">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('usuario.index') }}">Usuario</a></li>
          </ul>
        </div>
      </li>    
    @endif
    
   
  </ul>
</nav>
