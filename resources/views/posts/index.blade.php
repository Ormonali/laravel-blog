@extends('layouts.app')
@section('content')
<div class="container cnter">
			<div class="row">
				<div class="posts col-md-7 order-md-1" >
					<br>
				 	<h1>БЛОГ</h1>
					@if(count($posts)>0)
						@foreach($posts as $post)
							<div class="card-unstyled" >
							  <div class="card-body">
							    <h2 class="card-title">{{$post->title}}</h2>
							    <small>{{$post->created_at->format('d M Y')}}</small>
							    <small>/</small>
									<span id="this-tags">
										@foreach($post->tag as $tag)
								    	<small class="tags">{{$tag->name}}</small>
										@endforeach
									</span>
							    <p class="card-text">{{str_limit($post->body,400)}}</p>
							    <a href="/posts/{{$post->id}}" class="underlined"><u>читать польностью...</u></a>
									<small>|</small>
							    <a href="/posts/{{$post->id}}/edit">изменить пост</a>
							  </div>
							  <hr>
							</div>
						@endforeach
				</div>
				<div class="col-md-4 order-md-2 mb-4">
				<div class="create-post">
					<div class="btnCreate">
						<button type="button" name="button" class="link btn btn-outline-default">
							<a class="link" href="/posts">Все статьи</a>
						</button>
						<button type="button" name="button" class="link btn btn-outline-default">
							<a class="link"  href="/posts/create">Добавить статью</a>
						</button>
					</div>
					<h4>Теги</h4>
					<span id="tags-list">
						@foreach($tags as $tag)
							<a class="link" href="/posts/tags/{{$tag}}">{{$tag}}</a>
						@endforeach
					</span>
				</div>
			</div>
	  </div>
</div>
	@else
		<p>nothing have found</p>
	@endif
@endsection
