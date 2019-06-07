
<div class="col-md-3" id="sidebar">
    <ul class="list-unstyled">

        @forelse($categorias as $key=>$item)
            <li class="list-group-item border-0 px-0">
                <a href="{{ route('categoria',$item->id) }}" data-target="#categoria_{{$key}}" data-toggle="collapse" aria-expanded="false" class="d-flex align-items-center p-2 border-bottom {{ $item->id == $categoria->id ? 'distren-color' : null }}">
                    <span onclick="location.href='{{ route('categoria',$item->id) }}'">{!! $item->title !!}</span><i class="fas fa-chevron-right ml-auto"></i>
                </a>
                <ul class="list-unstyled collapse {{ $item->id ==  $categoria->id ? 'show' : null }}" id="categoria_{{$key}}">
                    @forelse($item->product as $data)
                        <li><a href="{{ route('producto',$data->id) }}" class="px-3 py-2  @if(isset($producto)) {{$data->id == $producto->id ? 'distren-color': null }}@endif">{{ $data->title  }}</a></li>
                    @empty
                        <li><a href="" class="p-2">No hay registros</a></li>
                    @endforelse
                </ul>
            </li>
        @empty
            <li><a href="" class="p-2">No hay registros</a></li>
        @endforelse
    </ul>
</div>