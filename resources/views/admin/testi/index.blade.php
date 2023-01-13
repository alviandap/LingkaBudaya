@extends('admin.layout.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3 class="h2">Category Lingkar Budaya</h3>
</div>

@if(session()->has('success'))
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>swal("success", "{!! session('success') !!}", "success");</script>
@endif 

<div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Comment</th>
              <th scope="col">Rating</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ratingStar as $testi)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $testi->name }}</td>
                  <td>{{ $testi->comment }}</td> 
                  <td>{{ $testi->ratingStar }}</td>
                  <td>
                    <form action= "{{ url('/admin/testi/'.$testi->id) }}" method = "post" class="d-inline">
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