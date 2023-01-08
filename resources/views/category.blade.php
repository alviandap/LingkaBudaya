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
    
</div>

@endsection

