@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a href="{{ route('config.create',['producto' => $producto]) }}" class="btn btn-primary rounded-pill"><i class="fas fa-plus-circle mx-1"></i>Añadir</a>
        <a class="text-decoration-none text-right" href="{{ route('productos.index',['general' => 1]) }}"><p><< Volver</p></a>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Categoria</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Orden</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($configuraciones as $item)
                        <tr>
                            <td>{!! $item->text{'tipo_es'} !!}</td>
                            <td>{{ $item->text{'title_es'} }}</td>
                            <td>{{ $item->order }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('config.edit', $item->id) }}"><i class="fas fa-pen"></i></a>
                                <a class="btn btn-sm btn-danger" onclick="return confirm('¿Realmente desea eliminar este registro?')" href="{{ route('config.destroy', $item->id) }}"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No hay registros</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
