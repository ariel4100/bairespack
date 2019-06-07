@extends('page.layouts.app')

@section('content')
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13143.607446757835!2d-58.4701564!3d-34.5560401!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7bfdcdb7e4fb77c0!2sDistren+-+Envases!5e0!3m2!1ses!2sar!4v1557415800721!5m2!1ses!2sar" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="container my-5">
        @include('page.partials.message')
        <div class="row">
            <div class="col-md-4">
                @if($contacto)
                <h4 class="distren-color text-uppercase distren-bold ml-md-5">{!! $contacto->title !!}</h4>
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex align-items-center">
                        <i class="material-icons distren-color mr-3">location_on</i>
                        <a href="https://bit.ly/309sR9i" target="_blank" class="text-muted">{!! $contacto->direccion !!}</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center">
                        <i class="material-icons distren-color mr-3">phone_in_talk</i>
                        <a href="tel:{!! $contacto->telefono_1 !!}" class="text-muted">{!! $contacto->telefono_1 !!}</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center">
                        <i class="fab fa-whatsapp distren-color mr-3" style="padding: 2px; font-size: 24px"></i>
                        <a href="tel:{!! $contacto->telefono_1 !!}" class="text-muted" target="_blank">{!! $contacto->telefono_1 !!}</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center">
                        <i class="material-icons distren-color mr-3">mail_outline</i>
                        <div class="">
                            <a href="mailto:{!! $contacto->correo !!}" class="text-muted">{!! $contacto->correo !!}</a>
                            <a href="mailto:{!! $contacto->correo_2 !!}" class="text-muted">{!! $contacto->correo_2 !!}</a>
                        </div>
                    </li>
                </ul>
                    @endif
            </div>
            <div class="col-md-8">
                <form class="form-row" action="{{ route('contacto.mail') }}" method="post">
                    @csrf
                    <div class="md-form col-md-6">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" class="form-control" placeholder="Telefono" name="telefono">
                    </div>
                    <div class="md-form col-md-12">
                        <textarea id="form7" class="md-textarea form-control" placeholder="Mensaje" name="mensaje" rows="3"></textarea>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <div class="g-recaptcha" data-sitekey="6LfxBKAUAAAAALkxGpbMmbopqVeVZYR3Q64Hg-ts"></div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="condiciones" class="custom-control-input" id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked">Acepto los términos y condiciones de privacidad</label>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn text-white my-4 distren-fondo">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
