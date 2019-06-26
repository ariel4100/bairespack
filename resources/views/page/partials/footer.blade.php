<!-- Footer -->
<footer class="page-footer" style="background-color: #444444">
    <div class="container text-md-left py-5">
        <div class="row">
            <div class="col-sm-12 col-md-3 d-flex justify-content-start align-items-center">

                <img src="{{ asset($logos->text{'footer'}) }}" alt="" class="img-fluid">
                <!--<div class="d-flex my-5">
                    <p style="font-size: 13px">SEGUINOS EN</p>
                    <a href="" class="tpn-blue mx-2"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="" class="tpn-blue"><i class="fab fa-youtube fa-lg"></i></a>
                </div>-->
            </div>
            <div class="col-sm-12 col-md-3 d-flex justify-content-between align-items-start">
                <div class="">
                    <h6 class="text-uppercase baires-color">Secciones</h6>
                    <a href="" class="nav-link m-0 p-0">Inicio</a>
                    <a href="" class="nav-link m-0 p-0">Nosotros</a>
                    <a href="" class="nav-link m-0 p-0">Envasadoras</a>
                    <a href="" class="nav-link m-0 p-0">Dosificadoras</a>
                    <a href="" class="nav-link m-0 p-0">Accesorios</a>
                </div>
                <div class="">
                    <a href="" class="nav-link m-0 p-0">Inicio</a>
                    <a href="" class="nav-link m-0 p-0">Nosotros</a>
                    <a href="" class="nav-link m-0 p-0">Envasadoras</a>
                    <a href="" class="nav-link m-0 p-0">Dosificadoras</a>
                    <a href="" class="nav-link m-0 p-0">Accesorios</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-2">
                <h6 class="text-uppercase baires-color">ENVASADORAS</h6>
                <a href="" class="nav-link m-0 p-0">Verticales</a>
                <a href="" class="nav-link m-0 p-0">Flow Pack</a>
                <a href="" class="nav-link m-0 p-0">Doy Pack</a>
                <a href="" class="nav-link m-0 p-0">Termocontraibles</a>
                <a href="" class="nav-link m-0 p-0">Dosificadoras</a>
            </div>


            <div class="col-sm-12 col-md-4">
                <h6 class="text-uppercase baires-color">BAIRES PACK</h6>
                <ul class="list-group" style="font-size: 13px">
                    <li class="list-group-item border-0 d-flex align-items-center px-0 py-1" style="background-color: unset">
                        <i class="material-icons baires-color mr-3">location_on</i>
                        <a href="https://bit.ly/309sR9i" target="_blank">{!! $contacto->text{'direccion'} ?? '' !!}</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0 py-1" style="background-color: unset">
                        <i class="material-icons baires-color mr-3">phone_in_talk</i>
                        <div class="">
                            <a href="tel:{!! $contacto->text{'telefono_1'} ?? '' !!}">{!! $contacto->text{'telefono_1'} !!}</a>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0 py-1" style="background-color: unset">
                        <i class="material-icons baires-color mr-3">mail_outline</i>
                        <div class="">
                            <a href="mailto:{!! $contacto->text{'correo'} ?? '' !!}">{!! $contacto->text{'correo'} ?? '' !!}</a>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class=" ">
        <div class="container py-1 d-flex justify-content-between" style="border-top: 1px solid #888888; ">
            <p>© 2019</p>
            <a class="text-lighten-4" href="#!">BY OSOLE</a>
        </div>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->