@extends('partials/navbarU')

@section('content')

<div class="container">
    <div class="row">
    @foreach($posts  as $post)
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="https://www.w3schools.com/images/w3schools_green.jpg" class="card-img-top" >
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <!-- <p class="card-text">{{ $post->excerpt }}</p> -->
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div> 
</div>

    <!-- Looping -->
    <!-- @foreach($posts  as $post)
    <article class="mb-3">
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach -->

@endsection

