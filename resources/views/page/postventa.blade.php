@extends('page.layouts.app')

@section('content')
    @title
    @slot('title',$contenido->text{'title_es'})
    @endtitle
    <div class="container my-4">
        <div class="row">
            <div class="col-md-6">
                {!! $contenido->text{'text_es'} !!}
            </div>
            <div class="col-md-6">
                {!! $contenido->text{'subtext_es'} !!}
            </div>
        </div>
    </div>
    <div class="py-5" style="background-color: #f2f2f2">
        <div class="container py-5">
            <h3 class="text-center">¿Necesitás Asesoramiento?</h3>
            <hr class="baires-fondo w-25 mb-5">
            <p class="text-center">Completá el siguiente formulario y nos contactaremos a la brevedad</p>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="" class="row ">
                        <div class="md-form col-md-6">
                            <input type="text" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="md-form col-md-6">
                            <input type="text" class="form-control" placeholder="Telofono">
                        </div>
                        <div class="md-form col-md-6">
                            <input type="text" class="form-control" placeholder="Correo electrónico">
                        </div>
                        <div class="md-form col-md-6">
                            <input type="text" class="form-control" placeholder="Empresa">
                        </div>
                        <div class="md-form col-md-12">
                            <textarea class="md-textarea form-control" placeholder="Mensaje" rows="3"></textarea>
                        </div>
                        <!-- Default unchecked -->
                        <div class="col-md-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                <label class="custom-control-label" for="defaultUnchecked">Acepto los términos y condiciones de privacidad</label>
                            </div>
                        </div>
                        <div class="col-md-12 text-center my-4">
                            <button class="btn rounded-pill baires-fondo px-5">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
