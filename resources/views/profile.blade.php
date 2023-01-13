@extends('partials/navbarU')

@section('content')
<link rel="stylesheet" href="../editprofile/style.css">

<div class="container-xl" >

@if(session()->has('success'))
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>swal("success", "{!! session('success') !!}", "success");</script>
@endif 

  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="changePass-tab" data-bs-toggle="tab" data-bs-target="#changePass" type="button" role="tab" aria-controls="changePass" aria-selected="false">changePass</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <div class="card">
      <form action ="/editprofile" method ="post" enctype="multipart/form-data">
        @csrf
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <label for="fotoProfile" class="form-label">Profile Picture</label>
                        <input type="hidden" name="oldImage" value = "{{ auth()->user()->fotoProfile }}">
                        @if(auth()->user()->fotoProfile)
                        <img src="{{ asset('storage/'.auth()->user()->fotoProfile) }}" class = "img-preview mx-auto mb-3 d-block" style="object-fit:containt; object-position: center; width: 200px; height: 200px; border-radius:50%; ">
                        @else
                        <img src="{{ asset('storage/default/blank.jpeg') }}" class = "img-preview mx-auto mb-3 d-block" style="object-fit:containt; object-position: center; width: 200px; height: 200px; border-radius:50%; ">
                        @endif
                        <input class="form-control @error('fotoProfile') is-invalid @enderror" type="file" id="fotoProfile" name="fotoProfile" onchange="previewImage()">
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card">
                    <div class="card-header" style="backgorund-color:white">Account Details</div>
                    <div class="card-body">
                      <div class="mb-3">
                          <label class="small mb-1" for="username" >Username</label>
                          <input class="form-control" type="text" id = "username" name="username" placeholder="username" value="{{ auth()->user()->username }}">
                      </div>
                      <div class="mb-3">
                      <label class="small mb-1" for="name">name</label>
                              <input class="form-control" type="text" id = "name" name="name" placeholder="FullName" value="{{ auth()->user()->name }}">
                      </div>
                      
                      <div class="mb-3">
                          <label class="small mb-1" for="email">Email address</label>
                          <input class="form-control"  type="email" id = "email" name="email" placeholder="Email" value="{{ auth()->user()->email }}">
                      </div>
                      
                      <button type='submit' class = "btn btn-primary mb-1" style="margin-right:5px;">Update Profile</button>
                    </div>
                </div>
            </div>
        </div>
      </form>
      </div>
    </div>

    <div class="tab-pane fade" id="changePass" role="tabpanel" aria-labelledby="changePass-tab">
      <div class="card">
        <form action="/updatepassword" method = "post">
          @method('put')
          @csrf
          <div class="card mb-3">
              <div class="card-header">Change Password</div>
              
              <div class="card-body">

                  <div class="mb-2">
                      <label class="small mb-1" for="current_password" >Current Password</label>
                      <input class="form-control" type="password" id = "current_password" name="current_password" placeholder="current password">
                      @error('current_password')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="mb-2">
                      <label class="small mb-1" for="password" >New Password</label>
                      <input class="form-control" type="password" id = "password" name="password" placeholder=" New Password" >
                      @error('password')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="mb-2">
                      <label class="small mb-1" for="password_confirmation" >New Password</label>
                      <input class="form-control" type="password" id = "password_confirmation" name="password_confirmation" placeholder=" New Password" >
                      @error('password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                      @enderror
                  </div>

                  <button type='submit' class = "btn btn-primary">Change Password</button>
              </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>


@include('sweetalert::alert')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

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