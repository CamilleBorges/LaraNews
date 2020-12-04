@extends('partials.layout')

@section('content')
@include('partials.menu')
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>LaraNews - Posts</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
        @include('partials.errors')

            @if($post->id)
            <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST">
            {{ method_field('PUT') }}
            @else
            <form action="{{ route('posts.store') }}" method="POST">
            @endif

                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Título da notícia" value="{{ $post->title }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="summary">Resumo</label>
                        <textarea name="summary" id="summary" rows="5" class="form-control" placeholder="Resumo da notícia">{{ $post->summary }}</textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="text">Texto</label>
                        <textarea name="text" id="text" rows="5" class="form-control" placeholder="Texto da notícia">{{ $post->text }}</textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="category_id">Categoria</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="0">Selecione</option>
                            @foreach($categories as $category)
                                @if($category->id == $post->category_id)
                                    <option value="{{ $category->id }}" selected> {{ $category->name }}</option>
                                @else
                                    @if($category->active)
                                        <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                    @endif
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="custom-control custom-switch">
                        @if($post->active == 1)
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