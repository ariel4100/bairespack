@extends('adm.layouts.app')

@section('content')
    <div class="container my-5">
        <form class="row" method="POST" action="{{ route('contenido.update',$section) }}" enctype="multipart/form-data">
            @csrf
            @method('POST')
          
            @if($section == 'empresa')


                <div class="custom-file">
                    <input value=""  accept="image/jpeg,application/pdf" name="ficha" id="ficha" class="form-control  custom-file-input invalid" type="file" placeholder="FICHA">
                    <label data-invalid="Seleccione ficha" data-valid="Ficha seleccionada" class="custom-file-label mb-0 text-truncate" data-browse="Buscar" for="ficha"></label>
                </div>


                <div class="md-form col-md-6">
                    <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3">{!! isset($data['text_mision']) ? $data['text_mision'] : null !!}</textarea>
                </div>

                <div class="md-form col-md-6">
                    <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3">{!! isset($data['text_vision']) ? $data['text_vision'] : null !!}</textarea>
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="title_es" name="title_es" placeholder="Titulo - español" class="form-control" value="{!! isset($data['title']) ? $data['title'] : null !!}">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="title_en" name="title_en" placeholder="Titulo - ingles" class="form-control" value="{!! isset($data['title']) ? $data['title'] : null !!}">
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">Titulo español</th>
                        <th scope="col">Titulo ingles</th>
                        <th scope="col">Orden</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=0; $i <= 4; $i++)
                        <tr>
                            <td>
                                <div class="custom-file">
                                    <input value=""   accept="image/jpeg,application/pdf" name="list[{{ $i }}][image]" id="ficha" class="form-control  custom-file-input invalid" type="file" placeholder="FICHA">
                                    <label data-invalid="Seleccione ficha" data-valid="Ficha seleccionada" class="custom-file-label mb-0 text-truncate" data-browse="Buscar" for="ficha"></label>
                                </div>
                            </td>
                            <td>
                                <div class="md-form">
                                    <input type="text" id="title_en" name="list[{{ $i }}][title_es]" placeholder="Titulo - ingles" class="form-control" value="{{ $data['data']['es']['lista'][$i]['title'] }}">
                                </div>
                            </td>
                            <td>
                                <div class="md-form">
                                    <input type="text" id="title_en" name="list[{{ $i }}][title_en]" placeholder="Titulo - ingles" class="form-control" value="{{ $data['data']['en']['lista'][$i]['title'] }}">
                                </div>
                            </td>
                            <td>
                                <div class="md-form">
                                    <input type="text" id="order" name="list[{{ $i }}][order]" placeholder="Orden" class="form-control" value="{{ $data['data']['en']['lista'][$i]['order'] }}">
                                </div>
                            </td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
               
            @endif
            @if($section == 'logos')
                <div class="col-md-12 text-center">
                    <div class="col-md-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="Favicon" name="image" lang="es">
                            <label class="custom-file-label" for="Favicon">Seleccionar Logo Favicon</label>
                        </div>
                        <img src="{!! isset($logos['image']) ? asset($logos['image']) : null !!}" alt="" class="img-fluid my-4">
                    </div>
                    <div class="col-md-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="Header" name="image_2" lang="es">
                            <label class="custom-file-label" for="Header">Seleccionar Logo Header</label>
                        </div>
                        <img src="{!! isset($logos['image_2']) ? asset($logos['image_2']) : null !!}" alt="" class="img-fluid my-4">
                    </div>
                    <div class="col-md-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="Footer" name="image_3" lang="es">
                            <label class="custom-file-label" for="Footer">Seleccionar Logo Footer</label>
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
@section('script')
    <script>
        CKEDITOR.replace('text_es');
        CKEDITOR.replace('text_en');
 
        CKEDITOR.config.width = '100%';
    </script>
@stop
