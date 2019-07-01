@extends('page.layouts.app')
@push('style')
    <style>
        .list-group-item {

            background-color: #F2F2F2;
        }
        a:hover{
            text-decoration: none;
        }
    </style>
@endpush
@section('content')
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4021.533875044546!2d-58.52584875327054!3d-34.56815698207985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb70fdc166627%3A0x3d0b4a5268eb0274!2sG%C3%BCiraldes+1838%2C+Villa+Maip%C3%BA%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1561137650922!5m2!1ses!2sar" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="container my-5">
        {{--@include('page.partials.message')--}}
        <div class="container">
            @if (session('status'))
                <div class="alert alert-success my-4" role="alert">
                    {!! session('status') !!}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger  my-4" role="alert">
                    {{--<span class="card-title">Se encontraron los siguientes errores:</span>--}}
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-4 py-4" style="background-color: #F2F2F2">
                @if(isset($contacto))
                <h3 class="ml-4 font-weight-bold" style="color: #939393">Baires Pack</h3>
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex align-items-center">
                        <i class="material-icons baires-color mr-3">location_on</i>
                        <div class="">
                            <p class="m-0 text-uppercase font-weight-bold">{{ __('Address') }}</p>
                            <a href="https://goo.gl/maps/NHZ9knxQyEwdwrPD7" target="_blank" class="text-muted">{!! $contacto->text{'direccion'} !!}</a>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center">
                        <i class="material-icons baires-color mr-3">phone_in_talk</i>
                        <div class="">
                            <p class="m-0 text-uppercase font-weight-bold">{{ __('Phone') }}</p>
                            <a href="tel:{!! $contacto->text{'telefono_1'} !!}" class="text-muted">{!! $contacto->text{'telefono_1'} !!}</a>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center">
                        <i class="material-icons baires-color mr-3">mail_outline</i>
                        <div class="">
                            <p class="m-0 text-uppercase font-weight-bold">{{ __('E-Mail Address') }}</p>
                            <a href="mailto:{!! $contacto->text{'correo'} !!}" class="text-muted">{!! $contacto->text{'correo'} !!}</a>
                        </div>
                    </li>
                </ul>
                    @endif
            </div>
            <div class="col-md-8">
                <h3 class="text-uppercase py-2" style="border-bottom: 2px solid #FEB80B; width: 20%">{!! $contacto->text{'title_'.App::getLocale()} !!}</h3>
                {{--<hr class="baires-fondo" style="width: 20%">--}}
                <form class="form-row" action="{{ route('contacto.mail') }}" method="post">
                    @csrf
                    <div class="md-form my-2 col-md-6">
                        <input type="text" class="form-control" required placeholder="{{ __('Name') }}" name="nombre">
                    </div>
                    <div class="md-form my-2 col-md-6">
                        <input type="text" class="form-control" required placeholder="{{ __('Surname') }}" name="apellido">
                    </div>
                    <div class="md-form my-2 col-md-6">
                        <input type="email" class="form-control" required placeholder="{{ __('E-Mail Address') }}" name="email">
                    </div>
                    <div class="md-form my-2 col-md-6">
                        <input type="text" class="form-control" required placeholder="{{ __('Phone') }}" name="telefono">
                    </div>
                    <div class="md-form my-2 col-md-12">
                        <textarea id="form7" class="md-textarea form-control" placeholder="{{ __('Message') }}" name="mensaje" rows="3"></textarea>
                    </div>
                    <div class="col-md-12 ">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="terminos" class="custom-control-input" id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked">{{ __('I accept the terms and conditions of privacy') }}</label>
                        </div>
                    </div>
                    <div class="col-md-12  ">
                        <button type="submit" class="btn text-dark px-5 my-4 baires-fondo rounded-pill">{{ __('Submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="https://www.google.com/recaptcha/api.js?render=6LcvKasUAAAAAL3WaPvUIWwxucS_KbbCZ4IsBQUV"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LcvKasUAAAAAL3WaPvUIWwxucS_KbbCZ4IsBQUV', {action: 'homepage'}).then(function(token) {
            ...
            });
        });
    </script>

@endpush
