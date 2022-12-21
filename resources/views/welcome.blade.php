@extends('layouts.app')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h2>{{config('app.name')}}</h2>
            <p>This is my first Laravel Project</p>
            <a href='/blog' class="btn btn-outline-primary">Blog</a>
        </div>
    </div>
    
</div>

@endsection