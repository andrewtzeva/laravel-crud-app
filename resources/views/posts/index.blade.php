@extends('layout')

@section('content')

@forelse ($posts as $post)

<div class="card container">
    <div class="card-header">
      {{$post->title}}
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