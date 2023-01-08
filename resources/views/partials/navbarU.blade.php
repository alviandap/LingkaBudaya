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
              <img src="../navbarU/user.jpg" alt="">
              <h1><?= auth()->user()->name?></h1>
            </div>
            <li><a href="#" style="--i: 0.05s;">Pengaturan</a></li>
            <li><a href="#" style="--i: 0.05s;">Home</a></li>
            <li><a href="/categories" style="--i: 0.05s;">Pembelajaran</a></li>
            <li><a href="#" style="--i: 0.05s;">Help</a></li>
            <li><a href="/" style="--i: 0.05s;">LogOut</a></li>
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
