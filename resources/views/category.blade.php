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

        <div class="card" style="height:25rem; width: 35rem;">
        <img src="{{ asset('storage/' . $gambar) }}" alt="" style="height:300px; width: 400px;">
            <div class="card-body">
                <p class="card-text">{{ $quote}}</p>
                <div class="btn btn-primary">
                    <a href="{{ $kuis }}">QUIZ</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

