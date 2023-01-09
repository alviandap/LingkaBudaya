@extends('admin.layout.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3 class="h2">Welcome Back, {{ auth()->user()->name }}</h3>
      </div>
@endsection