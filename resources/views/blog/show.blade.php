@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 pt-5">
			<a href="/blog" class="btn btn-outline-primary">Go Back</a><br>
			<h2>{{ucfirst($post->title)}}</h2><br>
			<p>{!! $post->body !!}</p><br>
			@if(Auth::user())
			<a href="/blog/{{$post->id}}/edit" class="btn btn-primary">Edit Post</a><br><br>
			<br>
			<form id="delete-form" class="" action="" method="POST">
				@method('DELETE')
				@csrf
				<button class="btn btn-danger">Delete Post</button>
			</form>
			@endif
		</div>
	</div>
</div>
@endsection