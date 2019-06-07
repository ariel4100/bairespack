@extends('page.layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="text-uppercase distren-color distren-bold">Carrito</h2>
    </div>
    @php($data = \App\Content::seccionTipo('carrito', 'texto')->first())
    @php($info = json_decode($data->text))

    <carrito-component :info="{{ json_encode($info) }}"></carrito-component>
@endsection
