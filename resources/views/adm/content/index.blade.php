@extends('adm.layouts.app')

@section('content')
    <div class="container my-5">
        <form class="row" method="POST" action="{{ route('contenido.update',$section) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="section" value="{{$section}}">
            <input type="hidden" name="type" value="{{$type}}">
            @if($section == 'home')

                <div class="custom-file">
                    <input value=""  accept="image/jpeg,application/pdf" name="image" id="ficha" class="form-control  custom-file-input invalid" type="file" placeholder="Imagen">
                    <label data-invalid="Seleccione ficha" data-valid="Ficha seleccionada" class="custom-file-label mb-0 text-truncate" data-browse="Buscar" for="ficha"></label>
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto Es</p>
                    <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3">{!! isset($data['text_es']) ? $data['text_es'] : null !!}</textarea>
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto En</p>
                    <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3">{!! isset($data['text_en']) ? $data['text_en'] : null !!}</textarea>
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="title_es" name="title_es" placeholder="Titulo - español" class="form-control" value="{!! isset($data['title_es']) ? $data['title_es'] : null !!}">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="title_en" name="title_en" placeholder="Titulo - ingles" class="form-control" value="{!! isset($data['title_en']) ? $data['title_en'] : null !!}">
                </div>


            @endif
            @if($section == 'empresa')
                <div class="custom-file">
                    <input value=""  accept="image/jpeg,application/pdf" name="ficha" id="ficha" class="form-control  custom-file-input invalid" type="file" placeholder="Imagen">
                    <label data-invalid="Seleccione ficha" data-valid="Ficha seleccionada" class="custom-file-label mb-0 text-truncate" data-browse="Buscar" for="ficha"></label>
                </div>
                <!-----------NOSOTROS-------------->
                <div class="md-form col-md-6">
                    <input type="text" id="title_es" name="title_es" placeholder="Titulo - español" class="form-control" value="{!! isset($data['title']) ? $data['title'] : null !!}">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="title_en" name="title_en" placeholder="Titulo - ingles" class="form-control" value="{!! isset($data['title']) ? $data['title'] : null !!}">
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto Es</p>
                    <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3">{!! isset($data['text_en']) ? $data['text_en'] : null !!}</textarea>
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto En</p>
                    <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3">{!! isset($data['text_en']) ? $data['text_en'] : null !!}</textarea>
                </div>
                <!-----------MISION-------------->
                <div class="md-form col-md-6">
                    <input type="text" id="mision_es" name="mision_es" placeholder="Titulo Mision - español" class="form-control" value="{!! isset($data['mision_es']) ? $data['mision_es'] : null !!}">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="mision_en" name="mision_en" placeholder="Titulo Mision - ingles" class="form-control" value="{!! isset($data['mision_en']) ? $data['mision_en'] : null !!}">
                </div>
                <div class="md-form col-md-6">
                    <p class="mb-0">Texto Es</p>
                    <textarea id="text_es" class="md-textarea form-control" name="misiontext_es" rows="3">{!! isset($data['misiontext_es']) ? $data['misiontext_es'] : null !!}</textarea>
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto En</p>
                    <textarea id="text_en" class="md-textarea form-control" name="misiontext_en" rows="3">{!! isset($data['misiontext_en']) ? $data['misiontext_en'] : null !!}</textarea>
                </div>

                <!-----------MISION-------------->
                <div class="md-form col-md-6">
                    <input type="text" id="valores_es" name="valores_es" placeholder="Titulo Valores - español" class="form-control" value="{!! isset($data['valores_es']) ? $data['valores_es'] : null !!}">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="valores_en" name="valores_en" placeholder="Titulo Valores - ingles" class="form-control" value="{!! isset($data['valores_en']) ? $data['valores_en'] : null !!}">
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto Es</p>
                    <textarea id="valorestext_es" class="md-textarea form-control" name="valorestext_es" rows="3">{!! isset($data['valorestext_es']) ? $data['valorestext_es'] : null !!}</textarea>
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto En</p>
                    <textarea id="valorestext_en" class="md-textarea form-control" name="valorestext_en" rows="3">{!! isset($data['valorestext_en']) ? $data['valorestext_en'] : null !!}</textarea>
                </div>
               
            @endif
            @if($section == 'logos')
                <div class="col-md-12 text-center">
                    <div class="col-md-12">

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="Favicon" name="image" lang="es">
                            <label class="custom-file-label" for="Favicon" data-browse="Buscar">Seleccionar Logo Favicon</label>
                        </div>
                        <img src="{!! isset($logos['image']) ? asset($logos['image']) : null !!}" alt="" class="img-fluid my-4">
                    </div>
                    <div class="col-md-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="Header" name="image_2" lang="es">
                            <label class="custom-file-label" for="Header" data-browse="Buscar">Seleccionar Logo Header</label>
                        </div>
                        <img src="{!! isset($logos['image_2']) ? asset($logos['image_2']) : null !!}" alt="" class="img-fluid my-4">
                    </div>
                    <div class="col-md-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="Footer" name="image_3" lang="es">
                            <label class="custom-file-label" for="Footer" data-browse="Buscar">Seleccionar Logo Footer</label>
                        </div>
                        <img src="{!! isset($logos['image_3']) ? asset($logos['image_3']) : null !!}" alt="" class="img-fluid my-4">
                    </div>
                </div>
            @endif
            @if($section == 'contacto')
                <div class="col-md-12">
                    <div class="md-form">
                        <input type="text" id="Titulo" name="title" placeholder="Titulo" class="form-control" value="{!! isset($datos['title']) ? $datos['title'] : null !!}">
                    </div>
                    <div class="md-form">
                        <input type="text" id="Dirección" name="direccion" placeholder="Dirección" class="form-control" value="{!! isset($datos['direccion']) ? $datos['direccion'] : null !!}">
                    </div>
                    <div class="row">
                        <div class="md-form col-md-6">
                            <input type="text" id="Telefono_1" name="telefono_1" placeholder="Telefono 1" class="form-control" value="{!!  isset($datos['telefono_1']) ? $datos['telefono_1'] : null !!}">
                        </div>
                        <div class="md-form col-md-6">
                            <input type="text" id="Telefono_2" name="telefono_2" placeholder="Telefono 2" class="form-control" value="{!!  isset($datos['telefono_2']) ? $datos['telefono_2'] : null !!}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="md-form col-md-6">
                            <input type="text" id="Correo" name="correo" placeholder="Correo 1" class="form-control" value="{!!  isset($datos['correo']) ? $datos['correo'] : null !!}">
                        </div>
                        <div class="md-form col-md-6">
                            <input type="text" id="Correo_2" name="correo_2" placeholder="Correo 2" class="form-control" value="{!!  isset($datos['correo_2']) ? $datos['correo_2'] : null !!}">
                        </div>
                    </div>
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
                <div class="col-md-12">
                    <div class="md-form">
                        <input type="text" id="Titulo" name="title" placeholder="Titulo" class="form-control" value="{!! isset($condiciones['title']) ? $condiciones['title'] : null !!}">
                    </div>
                    <div class="md-form">
                        <textarea id="text" class="md-textarea form-control" name="text" rows="3">{!! isset($condiciones['text']) ? $condiciones['text'] : null !!}</textarea>
                    </div>
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
