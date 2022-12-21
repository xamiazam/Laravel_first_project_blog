@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8 pt-5">
			<a href="/blog" class="btn btn-primary">Go Back</a>
			<h2>Create New Blog post</h2>

			<hr>

			<form id="creat-form" class="" method="POST">
				@csrf
				<div class="row">
					<div class="control-group col-12">
						<label for="title">Post Title</label>
						<input type="text" name="title" class="form-control" id="title" placeholder="Enter Post Title" required>
					</div>
					<div class="control-grou col-12 mt-2">
						<label for="body">Post Body</label>
						<textarea class="control-group col-12" id="body" name="body" required placeholder="Enter Post Body"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="control-group col-12 text-center">
						<button id="btn-submit" class="btn btn-primary">Create Post</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-2"></div>
	</div>
</div>
@endsection