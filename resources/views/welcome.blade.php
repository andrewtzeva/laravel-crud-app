@extends('layout')

@section('content')

<div class="promo-box-container">
    <a href="#" target="_blank" rel="noopener">
       <span class="linkspanner"></span>
     </a>
   <p class="title"><a href="#" target="_blank" rel="noopener">Want to create a post? <br/> <span class="lighter">Do it now.</span></a></p>
    <p><a class="cta-button" href="{{route('posts.create')}}" rel="noopener">Get Started</a></p>
   <div class="right-triangle"> </div>
</div>

@endsection