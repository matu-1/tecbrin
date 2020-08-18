<div class="theme-setting-wrapper">
  <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
  <div id="theme-settings" class="settings-panel">
    <i class="settings-close mdi mdi-close"></i>
    <p class="settings-heading">COLORES SIDEBAR</p>
    <div class="sidebar-bg-options selected" value="hola" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Claro</div>
    <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Oscuro</div>
    <p class="settings-heading mt-2">COLORES HEADER</p>
    <div class="color-tiles mx-0 px-4">
      <div class="tiles primary"></div>
      <div class="tiles success"></div>
      <div class="tiles warning"></div>
      <div class="tiles danger"></div>
      <div class="tiles pink"></div>
      <div class="tiles info"></div>
      <div class="tiles dark"></div>
      <div class="tiles default"></div>
    </div>

    <div class="d-none">
      {{-- Sidebar backgrounds --}}
      <input id="sidebar1" type="radio" name="colorSidebar" value="sidebar-light" checked>sidebar-light<br>
      <input id="sidebar2" type="radio" name="colorSidebar" value="sidebar-dark">sidebar-dark<br> 
      {{-- Navbar Backgrounds --}}
      <input id="navbar1" type="radio" name="colorNavbar" value="navbar-primary" >navbar-primary<br>
      <input id="navbar2" type="radio" name="colorNavbar" value="navbar-success" >navbar-success<br>
      <input id="navbar3" type="radio" name="colorNavbar" value="navbar-warning">navbar-warning<br>
      <input id="navbar4" type="radio" name="colorNavbar" value="navbar-danger" >navbar-danger<br>
      <input id="navbar5" type="radio" name="colorNavbar" value="navbar-pink">navbar-pink<br>
      <input id="navbar6" type="radio" name="colorNavbar" value="navbar-info" >navbar-info<br>
      <input id="navbar7" type="radio" name="colorNavbar" value="navbar-dark">navbar-dark<br>
      <input id="navbar8" type="radio" name="colorNavbar" value="vacio" checked>vacio<br>   
    </div>
    <button class="btn btn-primary ml-3" type="button"><span class="fas fa-save"></span></button>

    <p class="settings-heading mt-2">TIPO LETRA</p> 
      <div class="form-group px-4 mt-2 d-flex justify-content-between" >
        <select name="letra"  class="form-control" >
          <option value="Courier"> Courier</option>
          <option value="Verdana"> Verdana </option>
          <option value="Georgia"> Georgia </option>
          <option value="Helvetica"> Helvetica </option>
          <option value="Times"> Times</option>
          <option value="cursive">Cursiva</option>
          <option value="serif">Serif</option>
          <option value="monospace">Monospace</option>
          <option value="fantasy">Fantasy</option>
          <option value="italic">Italic</option>
          <option value="arial">Arial</option>
        </select>
        <button type="button" class="btn btn-primary btn-sm ml-2"><span class="fas fa-sync-alt"></span></button>
      </div>


  </div>
</div>
