<div class="row align-items-start">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header text-center mb-4">
            <h5>Bienvenido {{ Auth::user()->tipo }} </h5>
            @if(Auth::user()->fotografia === "" ||  Auth::user()->tipo === 'residente')
            <img src="../icons/usuario.png" width="100" height="100" class="rounded-circle" alt="Fotografia Generica">
            @else
            <img src="../img-pic/{{Auth::user()->fotografia}}" alt="Fotografia" width="100" height="100" class="rounded-circle">
            @endif
            <h4>{{ Auth::user()->nombre }} {{ Auth::user()->apPaterno }} {{ Auth::user()->apMaterno }}</h4>
        </div>
        
        <strong>HOME</strong>

        <ul class="list-unstyled components text-dark">
            <li class="active">
                <a href="/dashboard" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    Home
                </a>
            </li>
        </ul>
        @if(Auth::user()->tipo === 'jefe')
        <strong>USUARIOS</strong>
        <ul class="list-unstyled components text-dark">
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-copy"></i>
                Usuarios
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="/usuario/create">Nuevo usuario</a>
                </li>
                <li>
                    <a href="/usuario">Ver usuarios</a>
                </li>
            </ul>
        </ul>
        @endif
        <strong>BUZÓN</strong>
        <ul class="list-unstyled components text-dark">
            <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-copy"></i>
                Buzon
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li>
                    <a href="/buzon/create">Nueva queja</a>
                </li>
                <li>
                    <a href="/buzon">Ver quejas</a>
                </li>
            </ul>
        </ul>
    </nav>
</div>