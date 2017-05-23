@extends('layouts.posts')

@section('title')
<h2>Posts</h2>
@endsection
@section('content')
			<!-- Post -->
			<div class="post">
				<!-- Heading -->
				<a href="#"><h1>{{ $post->title }}</h1></a>
				<hr>
				<div class="in-content">
					<p>
						{{ $post->content }}
					</p>
					<a class="read-more" href="#">Read more</a>
				</div>
				<div class="foot-post">
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

@endsection
