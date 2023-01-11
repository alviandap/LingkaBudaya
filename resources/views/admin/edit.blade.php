@extends('admin.layout.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3 class="h2">Edit Post : {{ $post->title }}</h3>
</div>
<div class="col-lg-8">
<form action="/admin/posts/{{ $post->slug }}" method="post">
    @method('put')
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
    @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('title', $post->slug) }}">
    @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="link" class="form-label">Link Video YouTube</label>
    <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" required autofocus value="{{ old('title', $post->link) }}">
    @error('link')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-select" name="category_id" >
      @foreach ($categories as $category)
        @if(old('category_id', $post->category_id) == $category->id)
          <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
      @endforeach
    </select>
  </div>

  <div class="mb-3">
    <label for="body" class="form-label">Body</label>
    @error('body')
        <p class="text-danger">{{ $message }}</p>
    @enderror
    <input id="body" type="hidden" name="body"  value="{{ old('title', $post->body) }}">
    <trix-editor input="body"></trix-editor>
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

<script>
const title = document.querySelector('#title');
const slug = document.querySelector('#slug');
  title.addEventListener('change', function(){
    fetch('/admin/posts/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });
</script>
@endsection