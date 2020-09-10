@extends('layout')

@section('content')

<div class = 'jumbotron container col-6'>
    <form method= "POST" action = "{{route('posts.store')}}">
         @csrf
        <div class="form-group">
          <label for="formGroupExampleInput">Name</label>
          <input name = 'name' type="text" class="form-control" id="formGroupExampleInput" placeholder="Your name">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Title</label>
          <input name = 'title' type="text" class="form-control" id="formGroupExampleInput2" placeholder="Post title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Comment</label>
            <textarea name = 'content' class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    
        <button class = 'btn btn-primary' type = 'submit'>Post</button>
    </form>
</div>


@endsection