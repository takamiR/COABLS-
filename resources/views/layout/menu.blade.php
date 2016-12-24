@section('menu')
<ul class="sidebar-menu">

  <li class="menu-title">Navegación</li>
  <li>
    <a href="/home" class="waves-effect  waves-light">
      <span class="s-icon"><i class="ti-home"></i></span>
      <span class="s-text">Clientes</span>
    </a>
  </li>
  <li>
    <a href="/home" class="waves-effect  waves-light">
      <span class="s-icon"><i class="ti-home"></i></span>
      <span class="s-text">Proveedores</span>
    </a>
  </li>
  <li>
    <a href="/home" class="waves-effect  waves-light">
      <span class="s-icon"><i class="ti-home"></i></span>
      <span class="s-text">Orden de servicio</span>
    </a>
  </li>
  <li>
    <a href="/home" class="waves-effect  waves-light">
      <span class="s-icon"><i class="ti-home"></i></span>
      <span class="s-text">Facturación</span>
    </a>
  </li>
  <li>
    <a href="/home" class="waves-effect  waves-light">
      <span class="s-icon"><i class="ti-home"></i></span>
      <span class="s-text">Invoice</span>
    </a>
  </li>
  <li class="menu-title">Administración</li>
  <li class="with-sub">
    <a href="#" class="waves-effect  waves-light">
      <span class="s-caret"><i class="fa fa-angle-down"></i></span>
      <span class="s-icon"><i class="ti-dashboard"></i></span>
      <span class="s-text">Accesos</span>
    </a>
    <ul style="display: none;">
      <li><a href="#">Usuarios</a></li>
      <li><a href="#">Perfiles</a></li>
    </ul>
  </li>
  <li class="with-sub">
    <a href="#" class="waves-effect  waves-light">
      <span class="s-caret"><i class="fa fa-angle-down"></i></span>
      <span class="s-icon"><i class="ti-dashboard"></i></span>
      <span class="s-text">Localidades</span>
    </a>
    <ul style="display: none;">
      <li><a href="#">Paises</a></li>
      <li><a href="#">Departamento</a></li>
      <li><a href="#">Ciudades</a></li>
    </ul>
  </li>
</ul>
@endsection
