@extends('layouts.posts')

@section('title')
<h2>Posts</h2>
@endsection
@section('autor')
Ecompinguin
@endsection
@section('planet')
Ecomplanet
@endsection
@section('content')
			<!-- Post -->
            @foreach ($posts as $post)
			<div class="post">
				<!-- Heading -->
				<a href="#"><h1>{{ $post->title }}</h1>
				<hr>
				<div class="in-content">
					<p>
						{{ $post->content }}
					</p>
				</div>
				<div class="foot-post">
                    <form id="delete{{$post->id}}" role="form" method="POST" action="{{ route('post.destroy',$post->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

    					<input class="read-more" type="submit" value="Delete"></input>
                    </form>
					<div class="units-row">
					    <div class="unit-100">
					    	<strong>Tags:</strong>
					    	<a href="#">Galaxy</a>,
					    	<a href="#">Human</a>,
					    	<a href="#">World</a>,
					    </div>
					    <div class="unit-100">
					    	<strong>Autor</strong>
					    	<a href="#">{{ $post->autor }}</a>
					    </div>
					</div>
				</div>
			</div>
			<!-- /post -->
            @endforeach

@endsection
