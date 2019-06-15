@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="posts col-md-7 order-md-1" style="width: 700px; line-height: 30px; margin-left: 50px;">

			<h1>{{$post->title}}</h1>
			<small>{{$post->created_at->format('d M Y')}}</small>
		    <small>/</small>
				<span id="this-tags">
					@foreach($post->tag as $tag)
						<small class="tags">{{$tag->name}}</small>
					@endforeach
				</span>
			<p>{{$post->body}}</p>

		</div>
		<div class="col-md-4 order-md-2 mb-4">
			<div class="changeStateButtons">
				<button class="backward btn btn-outline-success"><a href="/posts/{{$post->id}}/edit">изменить пост</a></button>
				<button class="backward btn btn-outline-primary"><a href="/posts">назад</a></button>
				<form action="/posts/{{$post->id}}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-outline-danger">Удалить пост</button>
				</form>
			</div>
			<div class="tags" id="tags-list_div">
				<h4>Теги</h4>
				<span id="tags-list">
					@foreach($tags as $tag)
						<a class="link" href="/posts/tags/{{$tag}}">{{$tag}}</a>
					@endforeach
				</span>
			</div>
		</div>
	</div>
@endsection
