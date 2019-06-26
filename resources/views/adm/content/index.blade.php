@extends('adm.layouts.app')

@section('content')
    <div class="container my-5">
        <form class="row" method="POST" action="{{ route('contenido.update',$section) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="section" value="{{$section}}">
            <input type="hidden" name="type" value="{{$type}}">
            @if($section == 'home')
                {{--@dd($contenido)--}}
                <div class="custom-file">
                    <input name="image" value="" class="form-control  custom-file-input" type="file" placeholder="Imagen">
                    <label class="custom-file-label mb-0 text-truncate" data-browse="Buscar" for="ficha"></label>
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto Es</p>
                    <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3">{!! $contenido->text{'text_es'} !!}</textarea>
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto En</p>
                    <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3">{!! $contenido->text{'text_en'} !!}</textarea>
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="title_es" name="title_es" placeholder="Titulo - español" class="form-control" value="{!! $contenido->text{'title_es'} !!}">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="title_en" name="title_en" placeholder="Titulo - ingles" class="form-control" value="{!! $contenido->text{'title_en'} !!}">
                </div>


            @endif
            @if($section == 'nosotros')
                <div class="custom-file">
                    <input value=""  accept="image/jpeg,image/png,application/pdf" name="image" id="ficha" class="form-control  custom-file-input invalid" type="file" placeholder="Imagen">
                    <label data-invalid="Seleccione ficha" data-valid="Ficha seleccionada" class="custom-file-label mb-0 text-truncate" data-browse="Buscar" for="ficha"></label>
                </div>
                <!-----------NOSOTROS-------------->
                <div class="md-form col-md-6">
                    <input type="text" id="title_es" name="title_es" placeholder="Titulo - español" class="form-control" value="{!! $contenido->text{'title_es'} !!}">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="title_en" name="title_en" placeholder="Titulo - ingles" class="form-control" value="{!! $contenido->text{'title_en'} !!}">
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto Es</p>
                    <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3">{!! $contenido->text{'text_es'} !!}</textarea>
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto En</p>
                    <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3">{!! $contenido->text{'text_en'} !!}</textarea>
                </div>
                <!-----------MISION-------------->
                <div class="md-form col-md-6">
                    <input type="text" id="mision_es" name="mision_es" placeholder="Titulo Mision - español" class="form-control" value="{!! $contenido->text{'mision_es'} !!}">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="mision_en" name="mision_en" placeholder="Titulo Mision - ingles" class="form-control" value="{!! $contenido->text{'mision_en'} !!}">
                </div>
                <div class="md-form col-md-6">
                    <p class="mb-0">Texto Es</p>
                    <textarea id="text_es" class="md-textarea form-control" name="misiontext_es" rows="3">{!! $contenido->text{'misiontext_es'} !!}</textarea>
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto En</p>
                    <textarea id="text_en" class="md-textarea form-control" name="misiontext_en" rows="3">{!! $contenido->text{'misiontext_en'} !!}</textarea>
                </div>

                <!-----------MISION-------------->
                <div class="md-form col-md-6">
                    <input type="text" id="valores_es" name="valores_es" placeholder="Titulo Valores - español" class="form-control" value="{!! $contenido->text{'valores_es'} !!}">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="valores_en" name="valores_en" placeholder="Titulo Valores - ingles" class="form-control" value="{!! $contenido->text{'valores_en'} !!}">
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto Es</p>
                    <textarea id="valorestext_es" class="md-textarea form-control" name="valorestext_es" rows="3">{!! $contenido->text{'valorestext_es'} !!}</textarea>
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto En</p>
                    <textarea id="valorestext_en" class="md-textarea form-control" name="valorestext_en" rows="3">{!! $contenido->text{'valorestext_en'} !!}</textarea>
                </div>
               
            @endif
            @if($section == 'venta')
                <!-----------VENTA-------------->
                <div class="md-form col-md-6">
                    <input type="text" id="title_es" name="title_es" placeholder="Titulo - español" class="form-control" value="{!! $contenido->text{'title_es'} !!}">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="title_en" name="title_en" placeholder="Titulo - ingles" class="form-control" value="{!! $contenido->text{'title_en'} !!}">
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto Es</p>
                    <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3">{!! $contenido->text{'text_es'} !!}</textarea>
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto En</p>
                    <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3">{!! $contenido->text{'text_en'} !!}</textarea>
                </div>
                <div class="md-form col-md-6">
                    <p class="mb-0">Texto Es</p>
                    <textarea id="valorestext_es" class="md-textarea form-control" name="subtext_es" rows="3">{!! $contenido->text{'subtext_es'} !!}</textarea>
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto En</p>
                    <textarea id="valorestext_en" class="md-textarea form-control" name="subtext_en" rows="3">{!! $contenido->text{'subtext_en'} !!}</textarea>
                </div>
                    <div class="col-md-6 my-4">
                        <!-- Default unchecked -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="featured" {{ isset($contenido->text{'featured'}) ? 'checked' : '' }} id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked">Destacado?</label>
                        </div>
                    </div>
                <gallery-component :galeria="{{ json_encode($contenido->image) }}"></gallery-component>
            @endif
            @if($section == 'logos')
                <div class="col-md-12 text-center">
                    <div class="col-md-12">

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="Favicon" name="favicon" lang="es">
                            <label class="custom-file-label" for="Favicon" data-browse="Buscar">Seleccionar Logo Favicon</label>
                        </div>
                        <img src="{{ asset($contenido->text{'favicon'}) }}" alt="" class="img-fluid my-4">
                    </div>
                    <div class="col-md-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="Header" name="header" lang="es">
                            <label class="custom-file-label" for="Header" data-browse="Buscar">Seleccionar Logo Header</label>
                        </div>
                        <img src="{{ asset($contenido->text{'header'}) }}" alt="" class="img-fluid my-4">
                    </div>
                    <div class="col-md-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="Footer" name="footer" lang="es">
                            <label class="custom-file-label" for="Footer" data-browse="Buscar">Seleccionar Logo Footer</label>
                        </div>
                        <img src="{{ asset($contenido->text{'footer'}) }}" alt="" class="img-fluid my-4">
                    </div>
                </div>
            @endif
            @if($section == 'contacto')
                <div class="md-form col-md-6">
                    <input type="text" id="Titulo" name="title_es" placeholder="Titulo - español" class="form-control" value="{!! $contenido->text{'title_es'} !!}">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="Titulo" name="title_en" placeholder="Titulo - ingles" class="form-control" value="{!! $contenido->text{'title_en'} !!}">
                </div>
                <div class="col-md-12">
                    <div class="md-form">
                        <input type="text" id="Dirección" name="direccion" placeholder="Dirección" class="form-control" value="{!! $contenido->text{'direccion'} !!}">
                    </div>
                    <div class="row">
                        <div class="md-form col-md-6">
                            <input type="text" id="Telefono_1" name="telefono_1" placeholder="Telefono" class="form-control" value="{!! $contenido->text{'telefono_1'} !!}">
                        </div>
                        <div class="md-form col-md-6">
                            <input type="text" id="Correo" name="correo" placeholder="Correo" class="form-control" value="{!! $contenido->text{'correo'} !!}">
                        </div>
                        {{--<div class="md-form col-md-6">--}}
                            {{--<input type="text" id="Telefono_2" name="telefono_2" placeholder="Telefono 2" class="form-control" value=" ">--}}
                        {{--</div>--}}
                    </div>
                    {{--<div class="row">--}}
                        {{--<div class="md-form col-md-6">--}}
                            {{--<input type="text" id="Correo" name="correo" placeholder="Correo 1" class="form-control" value="{!!  isset($datos['correo']) ? $datos['correo'] : null !!}">--}}
                        {{--</div>--}}
                        {{--<div class="md-form col-md-6">--}}
                            {{--<input type="text" id="Correo_2" name="correo_2" placeholder="Correo 2" class="form-control" value="{!!  isset($datos['correo_2']) ? $datos['correo_2'] : null !!}">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            @endif
            @if($section == 'redes')
                <div class="col-md-12">
                    <div class="md-form">
                        <input type="text" id="Titulo" name="facebook" placeholder="URL Facebook" class="form-control" value="{!! isset($data['facebook']) ? $data['facebook'] : null !!}">
                    </div>
                    <div class="md-form">
                        <input type="text" id="Titulo" name="youtube" placeholder="URL Youtube" class="form-control" value="{!! isset($data['youtube']) ? $data['youtube'] : null !!}">
                    </div>
                </div>
            @endif
            @if($section == 'condiciones')
                <div class="md-form col-md-6">
                    <input type="text" id="Titulo" name="title_es" placeholder="Titulo - español" class="form-control" value="{!!  $contenido->text{'title_es'} ?? '' !!}">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="Titulo" name="title_en" placeholder="Titulo - ingles" class="form-control" value="{!!  $contenido->text{'title_en'} ?? '' !!}">
                </div>
                <div class="md-form col-md-6">
                    <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3">{!! $contenido->text{'text_es'} ?? '' !!}</textarea>
                </div>

                <div class="md-form col-md-6">
                    <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3">{!! $contenido->text{'text_en'} ?? '' !!}</textarea>
                </div>


            @endif
 
            <div class="col-md-12 my-4 text-right">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
@endsection
@push('script')
    <script>

        CKEDITOR.replace('text_es');
        CKEDITOR.replace('text_en');
        CKEDITOR.replace('valorestext_en');
        CKEDITOR.replace('valorestext_es');
        CKEDITOR.replace('misiontext_es');
        CKEDITOR.replace('misiontext_en');

        CKEDITOR.config.width = '100%';
    </script>
@endpush
