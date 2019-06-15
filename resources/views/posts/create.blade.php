@extends('layouts.app')

@section('content')
  <div class="form-create">
    <h1>Добавления новой статьи</h1>
     <form action="/posts" method="POST">
       @csrf
       <div class="form-group title">
          <input class="form-control" type="text" name="title" placeholder="Введите тему статьи" required>
       </div>
       <div class="form-group timestamps">
          <input type="date" name="created_at" class="form-control" value="{{date('Y-m-d')}}">
       </div>
       <div class="form-group tags">
          @if(count($tags)>0)
          <select name="tags[]" class="form-control"  multiple="multiple" required>
            @foreach($tags as $tag)
              <option name="tags" value="{{$tag->id}}" >{{$tag->name}}</option>
            @endforeach
          </select>
          @endif
       </div>
       <p>Задержите ctrl для выбора нескольких тегов</p>
       <div class="form-group body">
          <textarea id="txtarea" class="form-control" type="text" name="body" placeholder="Введите текст статьи" required></textarea>
       </div>
       <button class="btn btn-outline-success" type="submit">Добавить статью</button>
     </form>
  </div>
@endsection
