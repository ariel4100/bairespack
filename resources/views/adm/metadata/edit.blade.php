@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('metadatos.index') }}"><< Volver</a>
        <form action="{{ route('metadatos.update',$metadato->id) }}" class="mt-4" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form">
                        <input type="text" id="Seccion" name="section" class="form-control" readonly value="{{ $metadato->section }}">
                        <label for="Seccion">Seccion</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="md-form">
                        <input type="text" id="Keywords" name="keyword_es" value="{{ $metadato->text{'keyword_es'} }}" class="form-control">
                        <label for="Keywords">Keywords ES</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="md-form">
                        <input type="text" id="Keywords" name="keyword_en" value="{{ $metadato->text{'keyword_en'} }}" class="form-control">
                        <label for="Keywords">Keywords EN</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="md-form">
                        <textarea id="form7" class="md-textarea form-control"  name="description_es" rows="3">{!! $metadato->text{'description_es'} !!}</textarea>
                        <label for="form7">Descripción ES</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="md-form">
                        <textarea id="form7" class="md-textarea form-control" name="description_en" rows="3">{!! $metadato->text{'description_en'} !!}</textarea>
                        <label for="form7">Descripción EN</label>
                    </div>
                </div>

                <div class="col-md-12 text-right my-4">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
