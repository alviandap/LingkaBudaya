@extends('partials/navbarU')

@section('content')

<link rel="stylesheet" href="../courses/style.css">
<div class="main-container">
    <div class="row">

    @foreach($categories  as $category)
        <div class="col-md-3">
        <a href="/categories/{{ $category->slug }}">
            <div class="card mb-2">
                <div class="foto">
                     <img src="https://muhammadiyah.or.id/wp-content/uploads/2021/06/IMG-20210624-WA0014.jpg" class="card-img">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $category->name }}</h5>
                    <!-- <p class="card-text">{{ $category->excerpt }}</p> -->
                </div>
            </div>
            </a>
        </div>
        @endforeach
    </div> 
</div>

@endsection

