@extends('admin.layout.main')

@section('content')
<style>
  .btn{
    height:40px;
  }

  p{
    text-align:justify;
  }

  .video{
    display:flex;
    justify-content:center;

  }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="../post/style.css">

<div class="content mt-5">
  <div class="title mb-2">
    <h1 class=mb-3>{{ $post->title }}</h1>
    <a href="/admin/posts" class="btn btn-success"><i class="bi bi-arrow-left"> Back to Post</i></a>
    <a href="/admin/posts/{{ $post->slug }}/edit"  class="btn btn-warning"><i class="bi bi-pen"> Edit</i></a>

    <form action="/admin/posts/{{ $post->slug }}" method = "post" class="d-inline">
        @method('delete')
        @csrf
        <button class = "btn btn-danger " onclick="return confirm('Are you Sure?')"><i class="bi bi-trash3"></i>Delete</button>
      </form>
  </div>
  <div class="video">
      <iframe width="860" height="515" src=" {{ $post->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
    <p>
      {!! $post->body !!}
    </p>
</div>
@endsection