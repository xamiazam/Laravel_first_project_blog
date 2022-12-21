@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8 pt-5">
			<a href="/blog" class="btn btn-primary">Blog</a>
			<p>Edit and submit this form to update a post</p><br>
			<h2>Edit Blog Post {{$post->title}}</h2>

			<form method="POST">
				@csrf
				@method('PUT')
				<div class="row">
					<div class="form-group col-12 mt-2">
						<label for="title">Post Title</label>
						<input type="text" name="title" id="title" class="form-control " required value="{{$post->title}}">
					</div>
					<div class="form-group col-12">
						<label for="body">Post body</label>
						<textarea class="form-control col-12" id="body" name="body" required>{!! $post->body !!}}</textarea>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-12 mt-2">
						<button id="btn-submit" class="form-control btn btn-primary">Update Post</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-2"></div>
	</div>
</div>



@endsection