@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 pt-2">
			<div class="row">
				<div class="col-8">
					<h1><a href="/blog">Our Blog</a></h1>
					<p>Click on blog post to read more</p>
				</div>
				<div class="col-4">
					@if(Auth::user())
					<p> Create New Blog Post</p>
					
					<a href="/blog/create/post" class="btn btn-primary">Create New Post</a>
					<a href="/logout" class="btn btn-primary">Logout</a>
					@else
					<a href="/login" class="btn btn-primary">Login</a>
					@endif
				</div>
			</div>
			@forelse($posts as $post)
			<ul>
				<li><a href="/blog/{{ $post->id}}">{{ucfirst($post->title)}}</a></li>
			</ul>
			@empty
			<p>No Blog post found</p>
			@endforelse
		</div>
	</div>
</div>