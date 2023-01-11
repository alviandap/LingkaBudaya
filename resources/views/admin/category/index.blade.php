@extends('admin.layout.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3 class="h2">Category Lingkar Budaya</h3>
</div>

@if(session()->has('succses'))
  <div class="alert alert-success col-lg-8"" role="alert">
    {{ session('succses') }}
  </div>
@endif

<div class="table-responsive col-lg-8">
  <a href="/admin/categories/create" class="btn btn-primary mb-3">Create New Category</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $category->name }}</td>
                  <td>
                    <a href="/admin/categories/{{ $category->slug }}/edit" class = "badge bg-warning" >
                      <i class="bi bi-pen"></i>
                    </a>
                    <form action="/admin/categories/{{ $category->slug }}" method = "post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class = "badge bg-danger border-0" onclick="return confirm('Are you Sure?')"><i class="bi bi-trash3"></i></button>
                    </form>
                </td>
            </tr> 
            @endforeach
          </tbody>
        </table>
@endsection