<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../styleLogreg/style.css" />
    <title>Lingkar Budaya | {{ $title }}</title>
  </head>
  <body>

@if(session()->has('success'))
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>swal("success", "{!! session('success') !!}", "success");</script>
@endif 

    <div class="container">
      
      <div class="forms-container">
        <div class="signin-signup">

          <form class="sign-in-form"action = "/login" method="post">
            @csrf
            <h2 class="title">Login</h2>
            <a href="/home">Lingkar Budaya</a>
            <div class="input-field"><i class="fas fa-user"></i><input type="text"  name="username" id = "username"  placeholder="Username" /></div>
            <div class="input-field"><i class="fas fa-lock"></i><input type="password" name="password" id = "password" placeholder="Password" /></div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>


           
          <form class="sign-up-form" action = "/register" method="post">
                @csrf>
            <h2 class="title">Register</h2>
            <a href="/home">Lingkar Budaya</a>
            <div class="input-field"><i class="fas fa-user"></i><input type="text" id = "name" name="name" placeholder="FullName" /></div>
            <div class="input-field"><i class="fas fa-user"></i><input type="text" id = "username" name="username" placeholder="Username" /></div>
            <div class="input-field"><i class="fas fa-envelope"></i><input type="email" id = "email" name="email" placeholder="Email" /></div>
            <div class="input-field"><i class="fas fa-lock"></i><input type="password" id = "password" name="password" placeholder="Password" /></div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Belum Punya Akun?</h3>
            <p>
            Segera daftarkan dirimu  di Lingkar Budaya
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="../styleLogreg/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Sudah Punya Akun?</h3>
            <p>
            Ayo Masuk sekarang juga ke Lingkar Budaya
            </p>
            <button class="btn transparent" id="sign-in-btn">
            Login
            </button>
          </div>
          <img src="../styleLogreg/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="../styleLogreg/app.js"></script>
  </body>
</html>
