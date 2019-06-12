<!--<div class="sidebar-header">
    <h3 class="m-0">Menu</h3>
</div>
<div class="position-relative" >
    <div class="w-100 position-absolute">
        <ul class="list-unstyled components m-0 p-0">
            <li class="">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-home mr-2"></i>Home</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a  href=" ">Contenido</a>
                    </li>
                    <li>
                        <a href=" ">Slider</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#empresaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-building mr-2"></i>Empresa</a>
                <ul class="collapse list-unstyled" id="empresaSubmenu">
                    <li>
                        <a href=" ">Contenido</a>
                    </li>
                    <li>
                        <a href=" ">Slider</a>
                    </li>
                </ul>
            </li>

            <li><hr/></li>

        </ul>
    </div>
</div>
<div class="row m-0 position-absolute w-100" style="bottom: 0; left: 0;">
    <div class="col-12 col-md-6 px-0">
        <a href="https://osole.freshdesk.com/support/home" target="_blank" class="btn-gds py-2 btn-block text-uppercase text-center"><i class="fas fa-ticket-alt mr-2"></i>soporte</a>
    </div>
    <div class="col-12 col-md-6 px-0">
        <a href=" " class="btn-danger btn-block py-2 text-uppercase text-center"><i class="fas fa-power-off mr-2"></i>Salir</a>
    </div>
</div>-->
<nav id="sidebar" class="position-fixed h-100" style=" overflow-y:auto;">
    <ul class="list-unstyled">
        <div class="text-center">
            <img src="{{ asset('uploads/logos/logo_principal.png') }}" alt="" class="img-fluid p-4">
        </div>
        <!---HOME---->
        <li class="">
            <a href="#home" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">home</i>Home<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="home">
                <li><a href="{{ route('contenido.index', ['seccion' => 'home']) }}"><i class="fas fa-chevron-right px-4"></i>Contenido</a></li>
                <li><a href="{{ route('slider.list', ['seccion' => 'home']) }}"><i class="fas fa-chevron-right px-4"></i>Slider</a></li>
            </ul>
        </li>
        <!---EMPRESA---->
        <li class="">
            <a href="#empresa" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">business</i>Empresa<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="empresa">
                <li><a href="{{ route('contenido.index', ['seccion' => 'empresa']) }}"><i class="fas fa-chevron-right px-4"></i>Contenido</a></li>
                <!--<li><a href="{{ route('contenido.index', ['seccion' => 'empresa', 'tipo' => 'imagen']) }}"><i class="fas fa-chevron-right px-4"></i>Contenido</a></li>-->
                <li><a href="{{ route('slider.list', ['seccion' => 'empresa']) }}"><i class="fas fa-chevron-right px-4"></i>Slider</a></li>
            </ul>
        </li>
 
        <!---CONTACTO---->
        <li class="">
            <a href="#contacto" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">contact_mail</i>Contacto<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="contacto">
                <li><a href="{{ route('contenido.index', ['seccion' => 'contacto']) }}"><i class="fas fa-chevron-right px-4"></i>Datos de Contacto</a></li>
            </ul>
        </li>
        <hr>
        <!---DISTREN---->
        <li class="">
            <a href="#Logos" data-toggle="collapse" aria-expanded="false" class="d-flex">
                DISTREN<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Logos">
                <li><a href="{{ route('contenido.index', ['seccion' => 'logos', 'tipo' => 'texto']) }}"><i class="fas fa-chevron-right px-4"></i>Logos</a></li>
                <li><a href="{{ route('contenido.index', ['seccion' => 'redes', 'tipo' => 'texto']) }}"><i class="fas fa-chevron-right px-4"></i>Redes Sociales</a></li>
                <li><a href="{{ route('contenido.index', ['seccion' => 'condiciones', 'tipo' => 'texto']) }}"><i class="fas fa-chevron-right px-4"></i>Terminos y Condiciones</a></li>
                <li><a href="{{ route('metadatos.index') }}"><i class="fas fa-chevron-right px-4"></i>Metadatos</a></li>
                <li><a href="{{ route('usuario.index') }}"><i class="fas fa-chevron-right px-4"></i>Usuarios</a></li>
            </ul>
        </li>

        <!---LOGOS
        <li class="">
            <a href="#Logos" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">wallpaper</i>Logos<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Logos">
                <li><a href="{{ route('contenido.index', ['seccion' => 'logos', 'tipo' => 'texto']) }}"><i class="fas fa-chevron-right px-4"></i>Editar Logos</a></li>
            </ul>
        </li>---->
        <!---REDES SOCIALES
        <li class="">
            <a href="#Redes" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">thumb_up</i>Redes Sociales<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Redes">
                <li><a href=" "><i class="fas fa-chevron-right px-4"></i>Editar Redes Sociales</a></li>
            </ul>
        </li>---->
        <!---METADATOS
        <li class="">
            <a href="#Metadatos" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">data_usage</i>Metadatos<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Metadatos">
                <li><a href="{{ route('metadatos.index') }}"><i class="fas fa-chevron-right px-4"></i>Editar Metadatos</a></li>
            </ul>
        </li>---->
        <!---USUARIOS
        <li class="">
            <a href="#Usuario" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">account_circle</i>Usuario<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Usuario">
                <li><a href=" "><i class="fas fa-chevron-right px-4"></i>Editar Usuario</a></li>
            </ul>
        </li>---->
    </ul>
</nav>


