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
                        @if($general->id == 1 || $general->id == 2)
                            <th scope="col">Categoria</th>
                        @endif
                        @if($general->id == 1 || $general->id == 2)
                            <th scope="col">Subcategoria</th>
                        @endif
                        <th scope="col">Orden</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($productos as $item)
                        <tr>
                            <td><img src="{{ asset($item->image[0]['image'] ?? '') }}" style="width: 150px"></td>
                            <td>{{ $item->text{'title_es'} }}</td>
                            @if($general->id == 1 || $general->id == 2 )
                                <td>{!! $item->family->text{'title_es'} ?? 'Ninguna' !!}</td>
                            @endif
                            @if($general->id == 1 || $general->id == 2 )
                                <td>{!! $item->subfamily->text{'title_es'} ?? 'Ninguna' !!}</td>
                            @endif
                            <td>{{ $item->order }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('productos.edit',['id' => $item->id,'general' => $general]) }}"><i class="fas fa-pen"></i></a>
                                <a class="btn btn-sm btn-danger" onclick="return confirm('¿Realmente desea eliminar este registro?')" href="{{ route('productos.destroy',$item->id) }}"><i class="fas fa-trash-alt"></i></a>
                                @if($general->id == 1)
                                    <a class="btn btn-sm btn-info" href="{{ route('config.index',$item->id) }}">Configuraciones</a>
                                @endif
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
