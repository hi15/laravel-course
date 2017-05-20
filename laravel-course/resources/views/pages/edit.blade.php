@extends('layouts.layout')

@section('title')
Criar Post
@endsection

@section('content')

<div class="card-board">
    <form role="edit" method="post" action="{{ action('PostController@update',$post['id']) }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <label for="title" class="control-label">Titulo</label>
        <input type="text" class="form-control" name="title" value="{{ $post['title'] }}">
        <label for="subtitle" class="control-label">Sub Titulo</label>
        <input type="text" class="form-control" name="subtitle" value="{{ $post['subtitle'] }}">
        <label for="autor" class="control-label">Autor</label>
        <input type="text" class="form-control" name="autor" value="{{ $post['autor'] }}">
        <label for="content" class="control-label">Conteúdo</label>
        <textarea type="text" class="form-control" name="content">{{ $post['content'] }}</textarea>
        <input type="submit" value="Submit" class="btn-rounded "/>
    </form>
</div>


@endsection
