@extends('admin.layout.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3 class="h2">Post Lingkar Budaya</h3>
</div>

<div class="table-responsive col-lg-8">
  <a href="/admin/posts/create" class="btn btn-primary mb-3">Create New Post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach($posts as $post)
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->Category->name }}</td>
                  <td>
                    <a href="/admin/posts/{{ $post->slug }}" class = "badge bg-info" >
                      <i class="bi bi-eye"></i>
                    </a>
                    <a href="/admin/posts/{{ $post->slug }}" class = "badge bg-warning" >
                      <i class="bi bi-pen"></i>
                    </a>
                    <a href="/admin/posts/{{ $post->slug }}" class = "badge bg-danger" >
                      <i class="bi bi-trash3"></i>
                    </a>
                </td>
              @endforeach
            </tr>
          </tbody>
        </table>
@endsection