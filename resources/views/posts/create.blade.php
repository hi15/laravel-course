@extends('layouts.layout')

@section('title')
<h2>Criar Post</h2>
@endsection
@section('content')
<form class="card-box" action="{{ route('post.store')}}" method="post">
    {{ csrf_field() }}
    <h1>Hello Ecompinguin!</h1>
    <label for="title">Titulo</label>
    <input type="text" class="form-control" name="title" value="">
    <label for="autor">Autor</label>
    <input type="text" class="form-control" name="autor" value="">
    <label for="content">Conteúdo</label>
    <input type="text" class="form-control" name="content" value="">
    <input type="submit" name="submit" value="Enviar">
</form>

@endsection
