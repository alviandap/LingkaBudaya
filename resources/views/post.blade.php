@extends('partials/navbarU')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="../post/style.css">

<div class="content">
  <div class="back">
    <a href="/categories/{{ $post->category->slug }}"><i class="bi bi-arrow-left"></i></a>
  </div>
  
  <div class="title">
    <h1 class=mb-5>{{ $post->title }}</h1>
  </div>
<div class="video">
    <iframe width="860" height="515" src=" {{ $post->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

    <p>
      {!! $post->body !!}
    </p>
</div>

@endsection