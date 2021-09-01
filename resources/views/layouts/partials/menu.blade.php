<!-- Dropdown Structure -->
<div class="row content-mar-pad">
    <ul id="dropdown1" class="dropdown-content drop-text">
        <li><a href="{{route('admin.adminhome')}}">Dashboard</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li>
            <a  href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Salir
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
      </ul>
      <nav class="nav-bar">
        <div class="nav-wrapper">
          <a class="txt-logo" href="{{route('frontend.welcome')}}" class="brand-logo">IONTV</a>
          <ul class="right hide-on-med-and-down valign-wrapper">
            <li><a class="btn" href="sass.html"> <span class="icon-cart"></span> Tienda</a></li>
            <li><a href="sass.html">planes</a></li>
            <li><a href="sass.html">Servicios</a></li>
            @guest
                @if (Route::has('login'))
                    <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                @endif
                @if (Route::has('register'))
                    <li><a class="btn btn-menu" href="{{ route('register') }}">¡Registrate Gratis!</a></li>
                @endif
            @else
            <li><div class="avarar"></div></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
            @endguest
        </ul>
        </div>
    </nav>
</div>