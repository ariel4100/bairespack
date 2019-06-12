@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a href="{{ route('contenido.create',['seccion' => $section, 'tipo' => $type]) }}" class="btn btn-primary rounded-pill"><i class="fas fa-plus-circle mx-1"></i>Añadir</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Imagen</th>
                <th scope="col">Texto</th>
                <th scope="col">Orden</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @forelse($contenido as $c)
            <tr>
                <th style="width: 150px"><img src="{!! asset($c->image) !!}" class="img-fluid" alt=""></th>
                <td>{!! str_limit($c->text,150) !!}</td>
                <td>{!! $c->order !!}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('contenido.edit', [$section, $c->id]) }}"><i class="fas fa-pen"></i></a>
                    <a class="btn btn-sm btn-danger" onclick="return confirm('¿Realmente desea eliminar este registro?')" href="{{ route('contenido.delete', [$section, $c->id]) }}"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="2">No hay registros</td>
            </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('text');

        CKEDITOR.config.width = '100%';
    </script>
@stop
