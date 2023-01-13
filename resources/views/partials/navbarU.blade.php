<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lingkar Budaya | {{ $title }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../navbarU/style.css" />
    
  </head>
  <body>

    <div class="navigasi">
        <div class="navbar">
            <div class="menu">
                <div class="logo">
                    <div>
                        <img src="../navbarU/logo.png">
                    </div>
                    <div class="tulisan">Lingkar Budaya</div>
                </div>
                <div class="kanan">
                  <h3><?= auth()->user()->name?></h3>
                  <div class="hamburger-menu">
                    <div class="bar"></div>
                  </div>
                </div>
                
            </div>
        </div>
        <div class="links">
          <ul>
            <div class="profile">
            @if(auth()->user()->fotoProfile)
            <img src="{{ asset('storage/'.auth()->user()->fotoProfile) }}" class = "img-preview d-block" style="object-fit:containt; object-position: center; width: 50px; height: 50px; border-radius:50%; margin-left: 30px;margin-right: 10px;">
            @else
            <img src="{{ asset('storage/default/blank.jpeg') }}" class = "img-preview d-block" style="object-fit:containt; object-position: center; width: 50px; height: 50px; border-radius:50%; margin-left: 30px;margin-right: 10px;">
            @endif

            <h1><?= auth()->user()->name?></h1>
            </div>
            @can('admin')
            <li><a href="/admin" style="--i: 0.05s;">Mode Admin</a></li>
            @endcan
            <li><a href="/editprofile" style="--i: 0.05s;">Pengaturan Profile</a></li>
            <li><a href="/dashboard" style="--i: 0.05s;">Home</a></li>
            <li><a href="/categories" style="--i: 0.05s;">Pembelajaran</a></li>
            <li><a href="/testimonials" style="--i: 0.05s;">testimonials</a></li>
            <li>
              <form action="/logout" method = 'post'>
                @csrf
                <button type="submit">Logout</button>
              </form>
            </li>
        </ul>
        </div>
    </div>
  </div>

  <div class="content">
    @yield('content')
  </div>



    <script src="../navbarU/app.js"></script>
  </body>
</html>
