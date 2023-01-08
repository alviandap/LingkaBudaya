@extends('partials/navbarU')

@section('content')
<link rel="stylesheet" href="../profile/style.css">
<div class="container-xl ">
    <!-- Account page navigation-->
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form action ="/editprofile" method ="post">
                        @csrf
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="username" >Username</label>
                            <input class="form-control" type="text" id = "username" name="username" placeholder="Username" value="{{ auth()->user()->username }}">
                        </div>
                        <!-- @if($errors->any('username'))
                            <span class="text-danger">{{ $errors->any('username') }}</span>
                        @endif -->
                        <div class="mb-3">
                        <label class="small mb-1" for="name">name</label>
                                <input class="form-control" type="text" id = "name" name="name" placeholder="FullName" value="{{ auth()->user()->name }}">
                        </div>
                        
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="email">Email address</label>
                            <input class="form-control"  type="email" id = "email" name="email" placeholder="Email" value="{{ auth()->user()->email }}">
                        </div>

                        <!-- Save changes button-->
                        <button type='submit' class = "btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection