@extends('layouts.app')
@section('content')
	<div class="grating jumbotron text-center">
	<h1>{{$title}}</h1>
	<button class="btn btn-outline-success"><a href="/posts">Читать статьи</a></button>
	<button class="btn btn-outline-primary"><a href="/posts/create">Добавить статьют</a></button>
	</div>
@endsection