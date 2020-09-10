@extends('layout')

@section('content')

@forelse ($posts as $post)

<div class="card container">
    <div class="card-header">
    {{$post->title}} <span class = 'icons'>
    <form metho = 'POST' action = "{{route('posts.edit', ['post' => $post->id])}}">
      <input style="font-family: FontAwesome" value="&#xf044;" type="submit"></span>
    </form>
    <form method = 'POST' action = "{{route('posts.destroy', ['post' => $post->id])}}">
      @csrf
      @method('DELETE')
      <input style="font-family: FontAwesome" value="&#xf1f8;" type="submit"></span>
    </form>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
      <p>{{$post->content}}</p>
      <footer class="blockquote-footer"><cite title="Source Title">{{$post->name}} {{$post->created_at}}</cite></footer>
      </blockquote>
    </div>
</div>
    
@empty

    @include('empty')
    
@endforelse
    
@endsection