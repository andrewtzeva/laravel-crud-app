@extends('layout')

@section('content')

<div class = 'jumbotron container post-cont col-6'>
    <h1 style = 'margin-bottom: 50px'>Submit your post</h1>
    <form method= "POST" action = "{{route('posts.store')}}">
         @csrf
        <div class="form-group">
          <label for="formGroupExampleInput">Name</label>
        <input name = 'name' type="text" value = "{{old('name')}}" class="form-control" id="formGroupExampleInput" placeholder="Your name">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Title</label>
          <input name = 'title' type="text" value = "{{old('title')}}" class="form-control" id="formGroupExampleInput2" placeholder="Post title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Comment</label>
            <textarea name = 'content' value = "{{old('content')}}" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    
        <button class = 'btn btn-warning my-2 my-sm-0' type = 'submit'>Post</button>
    </form>
</div>


@endsection