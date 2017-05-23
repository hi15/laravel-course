@extends('layouts.layout')

@section('title')
<h2>Criar Post</h2>
@endsection
@section('content')
<form class="card-box" action="{{ route('post.update',$post->id)}}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <h1>Hello Ecompinguin!</h1>
    <label for="title">Titulo</label>
    <input type="text" class="form-control" name="title" value="{{ $post->title }}">
    <label for="autor">Autor</label>
    <input type="text" class="form-control" name="autor" value="{{ $post->autor }}">
    <label for="content">Conteúdo</label>
    <input type="text" class="form-control" name="content" value="{{ $post->content }}">
    <input type="submit" name="submit" value="Enviar">
</form>

@endsection
