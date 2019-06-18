@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a href="{{ route('productos.create',['general' => $general]) }}" class="btn btn-primary rounded-pill"><i class="fas fa-plus-circle mx-1"></i>Añadir</a>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Orden</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($productos as $item)
                        <tr>
                            <td><img src="" style="width: 150px"></td>
                            <td>{{ $item->text{'title_es'} }}</td>
                            <td>{{ $item->order }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('productos.edit',['id' => $item->id,'general' => $general]) }}"><i class="fas fa-pen"></i></a>
                                <a class="btn btn-sm btn-danger" onclick="return confirm('¿Realmente desea eliminar este registro?')" href="{{ route('productos.destroy',$item->id) }}"><i class="fas fa-trash-alt"></i></a>
                                <a class="btn btn-sm btn-info" href="{{ route('galeria.index',$item->id) }}"><i class="far fa-images"></i></a>
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
