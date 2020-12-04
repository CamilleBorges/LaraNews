@extends('partials.layout')

@section('content')
@include('partials.menu')
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>LaraNews - Categorias</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
        @include('partials.errors')

            @if($category->id)
            <form action="{{ route('categories.update', ['id' => $category->id]) }}" method="POST">
            {{ method_field('PUT') }}
            @else
            <form action="{{ route('categories.store') }}" method="POST">
            @endif

                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nome da categoria" value="{{ $category->name }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="description">Descrição</label>
                        <textarea name="description" id="description" rows="5" class="form-control" placeholder="Descrição da categoria">{{ $category->description }}</textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="custom-control custom-switch">
                        @if($category->active == 1)
                            <input type="checkbox" name="active" id="active" class="custom-control-input" value="A" checked>
                        @else
                            <input type="checkbox" name="active" id="active" class="custom-control-input" value="A">
                        @endif
                            <label for="active" class="custom-control-label"> Ativa </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</div>
@endsection