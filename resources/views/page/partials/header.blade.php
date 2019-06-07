<div class="container-fluid" style="background-color: #333333">
    <div class="row">
        <div class="container">
            <div class="d-flex justify-content-end">
                <i class="fab fa-whatsapp mr-2" style="color: #25d366;"></i>
                <p>54 9 11 6050-7809</p>
                <div class="form-group">
                    <select class="custom-select-sm" name="" id="">
                        <option value="">ES</option>
                    </select>
                </div>

            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light py-0" style="box-shadow: unset; background-color: #333333">
<div class="container">
    <a class="navbar-brand" href="{{ route('home') }}"><img src=" " alt="" class="img-fluid"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('nosotros') ? 'activo' : '' }}" href=" ">Nosotros</a></li>
            <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('envasadoras*') ? 'activo' : '' }}" href=" ">Envasadoras</a></li>
            <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('dosificadoras') ? 'activo' : '' }}" href=" ">Dosificadoras</a></li>
            <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('accesorios') ? 'activo' : '' }}" href=" ">Accesorios</a></li>
            <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('accesorios') ? 'activo' : '' }}" href=" ">Noticias</a></li>
            <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('accesorios') ? 'activo' : '' }}" href=" ">Post-Venta</a></li>
            <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('accesorios') ? 'activo' : '' }}" href=" ">Videos</a></li>
            <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('accesorios') ? 'activo' : '' }}" href=" ">Contacto</a></li>
            <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('accesorios') ? 'activo' : '' }}" href=" "><i class="fas fa-search prefix"></i></a></li>
        </ul>
    </div>
</div>
</nav>