@extends('partials/navbarU')

@section('content')
<link rel="stylesheet" href="../styleTesti/style.css">
<div class="main-content">
@if(session()->has('success'))
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>swal("success", "{!! session('success') !!}", "success");</script>
@endif 


  <div class="list">
        @foreach($ratingStar as $rating)
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                  <h5>Rating : {{ $rating->ratingStar }}/5</h5>
                  <h4>"{{  $rating->comment  }}"</h4>
                  <p>By {{  $rating->name  }} at {{ $rating->created_at->diffForHumans() }}</p>
              </div>

            </div>
        </div>
      @endforeach
  </div>



  <!-- Button trigger modal -->
<button type="button" class="btn1 btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Berikan Rating
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Lingkar Budaya</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/testimonials" method="post">
          @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control " id="name" name="name"  value="{{ auth()->user()->name }}" readonly >
        </div>

        <div class="mb-3">
          <label for="ratingStar" class="form-label">Rating</label>
          <select class="form-select" name="ratingStar" >
                <option selected >Pilih Rating..</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
          </select>
          @error('ratingStar')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="comment" class="form-label">Tulis Komentar</label>
          <input type="text" class="form-control @error('comment') is-invalid @enderror" id="comment" name="comment" required autofocus>
          @error('comment')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
      </div>
    </div>
  </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection