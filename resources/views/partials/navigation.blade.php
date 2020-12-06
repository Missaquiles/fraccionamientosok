<nav class="navbar navbar-expand-md navbar-light bg-navbar mb-2">
    <a class="navbar-brand font-weight-bold" href="/dashboard">
    <img class = "img-responsive w-50" src="../icons/logo_sicom_header.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarText">
        <h4><a class="nav-link font-weight-bold active" style = "color: #63D2B4;" href="/dashboard" id="navbarDropdown"> <img class = "img-responsive w-25" src="../icons/INICIO_USUARIO_OVER.png" alt="" style = "max-width: 40px; height: auto;">
          Inicio
        </a></h4>

        <h4 style = "color: #244D71;"><a class="nav-link font-weight-bold" href="#" id="navbarDropdown"> <img class = "img-responsive w-25" src="../icons/PAGOS_REPOSO.png" alt="" style = "max-width: 40px; height: auto;">
          Pagos
        </a></h4>

        <h4 style = "color: #244D71;"><a class="nav-link font-weight-bold" href="#" id="navbarDropdown"> <img class = "img-responsive w-25" src="../icons/QUEJAS Y SUGERENCIAS REPOSO.png" style = "max-width: 40px; height: auto;" alt="">
          Quejas/Sugerencias
        </a></h4>
          <form method="POST" action="{{ route('logout') }}">
              @csrf
              <h4 style = "color: #244D71;"><a class="nav-link font-weight-bold" style = "justify-content: flex-end !important;" id="navbarDropdown" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
              <img class = "img-responsive w-25" src="../icons/CERRAR SESION REPOSO.png" alt="" style = "max-width: 40px; height: auto;">
                Cerrar sesión</a></h4>
          </form>
        </div>
      </div>
    </div>
</nav>