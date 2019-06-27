@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('noticia.index') }}"><< Volver</a>
        <form class="row" method="POST" action="{{ route('noticia.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="md-form col-md-6">
                <input type="text" id="title_es" name="title_es" placeholder="Titulo - español" class="form-control">
            </div>
            <div class="md-form col-md-6">
                <input type="text" id="title_en" name="title_en" placeholder="Titulo - ingles" class="form-control">
            </div>
            <div class="md-form col-md-6">
                <p class="mb-0">Texto Es</p>
                <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3"> </textarea>
            </div>

            <div class="md-form col-md-6">
                <p class="mb-0">Texto En</p>
                <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3"> </textarea>
            </div>

            <div class="col-md-6 mb-5">
                <select name="categories_id" id="" class="form-control">
                    <option value="" selected disabled>Seleccionar categoria</option>
                    @forelse($categories as $c)
                        <option value="{{ $c->id }}">{!! $c->text{'title_es'} !!}</option>
                    @empty
                        <option value="" disabled >No hay categorias</option>
                    @endforelse
                </select>
            </div>
            <div class="col-md-6 mb-5">
                <div class="md-form m-0">
                    <input type="text" id="order" name="order" class="form-control">
                    <label for="order" class="">Orden</label>
                </div>
            </div>

            <gallery-component></gallery-component>
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

        CKEDITOR.config.width = '100%';
    </script>
@endpush
