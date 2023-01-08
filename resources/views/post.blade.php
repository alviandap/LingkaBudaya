@extends('partials/navbarU')

@section('content')
<style>
   .video{
        display :flex;
        justify-content: center;
        margin-bottom:30px;
        align-items : center;
    }

    .card-body{
        margin : 10px;
        text-align:justify;
    }
</style>
<a href="/categories/{{ $post->category->slug }}"><h1>{{ $post->category->name }}</h1></a>

<h1 class=mb-5>{{ $post->title }}</h1>
<div class="video">
    <iframe width="860" height="515" src=" {{ $post->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<div class="card" style="width: auto;">
  <div class="card-body">
    {!! $post->body !!}
  </div>
</div>
<a href="/posts"> Back to post</a>
@endsection