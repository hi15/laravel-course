@extends('layouts.layout')

@section('title')
Criar Post
@endsection

@section('content')

<div class="card-board">
    <form role="create" method="post" action="{{ action('PostController@store') }}">
        {{ csrf_field() }}
        <label for="title" class="control-label">Titulo</label>
        <input type="text" class="form-control" name="title" value="">
        <label for="subtitle" class="control-label">Sub Titulo</label>
        <input type="text" class="form-control" name="subtitle" value="">
        <label for="autor" class="control-label">Sub Titulo</label>
        <input type="text" class="form-control" name="autor" value="">
        <label for="text" class="control-label">Conteúdo</label>
        <textarea type="text" class="form-control" name="content" value=""></textarea>
        <input type="submit" value="Submit" class="btn-rounded "/>
    </form>
</div>


@endsection
