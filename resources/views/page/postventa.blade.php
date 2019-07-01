@extends('page.layouts.app')

@section('content')
    @title
    @slot('title',$contenido->text{'title_'.App::getLocale()})
    @endtitle
    <div class="container my-4">
        <div class="row">
            <div class="col-md-6">
                {!! $contenido->text{'text_'.App::getLocale()} !!}
            </div>
            <div class="col-md-6">
                {!! $contenido->text{'subtext_'.App::getLocale()} !!}
            </div>
        </div>
    </div>
    <div class="container px-5 my-4">
        <div class="row">
            @foreach($contenido->image as $item)
            <div class="col-md-3 text-center">
                <img src="{{ asset($item{'image'}) }}" alt="" class="img-fluid">
                <h5 class=" p-4">{!! $item{'title_'.App::getLocale()} !!}</h5>
            </div>
            @endforeach
        </div>
    </div>
    <div class="py-5" style="background-color: #f2f2f2">
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
        <div class="container py-5">
            <h3 class="text-center">{{ __('Do you need advice?') }}</h3>
            <hr class="baires-fondo w-25 mb-5">
            <p class="text-center">{{ __('Complete the following form and we will contact you shortly') }}</p>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="{{ route('post.venta.mail') }}" method="post" class="row">
                        @csrf
                        <div class="md-form col-md-6">
                            <input type="text" class="form-control" required name="name" placeholder="{{ __('Name') }}">
                        </div>
                        <div class="md-form col-md-6">
                            <input type="text" class="form-control" required name="phone" placeholder="{{ __('Phone') }}">
                        </div>
                        <div class="md-form col-md-6">
                            <input type="email" class="form-control" required name="email" placeholder="{{ __('E-Mail Address') }}">
                        </div>
                        <div class="md-form col-md-6">
                            <input type="text" class="form-control" required name="empresa" placeholder="{{ __('Company') }}">
                        </div>
                        <div class="md-form col-md-12">
                            <textarea class="md-textarea form-control" name="message" placeholder="{{ __('Message') }}" rows="3"></textarea>
                        </div>
                        <!-- Default unchecked -->
                        <div class="col-md-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="terminos" id="defaultUnchecked">
                                <label class="custom-control-label" for="defaultUnchecked">{{ __('I accept the terms and conditions of privacy') }}</label>
                            </div>
                        </div>
                        <div class="col-md-12 text-center my-4">
                            <button type="submit" class="btn rounded-pill baires-fondo px-5">{{ __('Submit') }}</button>
                        </div>
                    </form>
                </div>
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

