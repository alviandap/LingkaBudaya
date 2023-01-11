@extends('partials/navbarU')

@section('content')
<style>
    .card{
        margin-bottom:15px;
    }

    a{
        text-decoration: none;
        color: black;
    }
</style>
<link rel="stylesheet" href="../course/style.css">

<div class="main-container">
    <div class="kankir">
 <div class="row">
    @foreach($posts  as $post)
    <a href="/posts/{{ $post->slug }}" > 
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
            </div>
        </div>
    </a>
    @endforeach
    </div> 
    <div class="card" style="width: 35rem;">
        <img src="{{ $gambar }}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">{{ $quote}}</p>
    </div>

    </div>
   
</div>
    
</div>

@endsection

