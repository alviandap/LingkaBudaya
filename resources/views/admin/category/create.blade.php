@extends('admin.layout.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3 class="h2">Create Category</h3>
</div>
<div class="col-lg-8">
<form action="/admin/categories" method="post" enctype="multipart/form-data">
    @csrf

  <div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
    @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required>
    @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="gambar" class="form-label">Gambar</label>
    <img class = "img-preview img-fluid mb-3 col-sm-5">
    <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar" onchange="previewImage()">
    @error('gambar')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="quotes" class="form-label">quotes</label>
    <input type="text" class="form-control @error('quotes') is-invalid @enderror" id="quotes" name="quotes" required>
    @error('quotes')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="quiz" class="form-label">quiz</label>
    <input type="text" class="form-control @error('quiz') is-invalid @enderror" id="quiz" name="quiz" required>
    @error('quiz')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>

<script>
  const title = document.querySelector('#name');
  const slug = document.querySelector('#slug');
    title.addEventListener('change', function(){
      fetch('/admin/posts/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
    });


  function previewImage(){
    const gambar = document.querySelector("#gambar");
    const imgPreview = document.querySelector(".img-preview");

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]); 

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  };

</script>
@endsection