@extends('admin.layout.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3 class="h2">Edit Category : {{ $category->name }}</h3>
</div>
<div class="col-lg-8">
<form action="/admin/categories/{{ $category->slug }}" method="post">
    @method('put')
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $category->name) }}">
    @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('title', $category->slug) }}">
    @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="gambar" class="form-label">Gambar</label>
    <input type="text" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" required value="{{ old('title', $category->gambar) }}">
    @error('gambar')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="quotes" class="form-label">quotes</label>
    <input type="text" class="form-control @error('quotes') is-invalid @enderror" id="quotes" name="quotes" required value="{{ old('title', $category->quotes) }}">
    @error('quotes')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="quiz" class="form-label">quiz</label>
    <input type="text" class="form-control @error('quiz') is-invalid @enderror" id="quiz" name="quiz"required value="{{ old('title', $category->quiz) }}">
    @error('quiz')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

<script>
const title = document.querySelector('#name');
const slug = document.querySelector('#slug');
  title.addEventListener('change', function(){
    fetch('/admin/categories/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });
</script>
@endsection