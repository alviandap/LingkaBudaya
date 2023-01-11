<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lingkar Budaya | {{ $title }}</title>
    <link rel="stylesheet" href="../partials/style.css" />
  </head>
  <body>
    <div class="container active">

        <div class="navbar">
            <div class="menu">
                <div class="logo">
                    <div>
                        <img src="../partials/logo.png">
                    </div>
                    <div class="tulisan">Lingkar Budaya</div>
                </div>
                <div class="hamburger-menu">
                    <div class="bar"></div>
            </div>
            </div>
        </div>

      <div class="main-container">
        <div class="main">
          <header>
            <div class="overlay">

              @yield('content')

            </div>
          </header>
        </div>

        <div class="shadow one"></div>
        <div class="shadow two"></div>
      </div>

      <div class="links">
        <ul>
          <li>
            <a href="/home" style="--i: 0.05s;">Home</a>
          </li>
          <li>
            <a href="/about" style="--i: 0.25s;">About</a>
          </li>
          <li>
            <a href="/faq" style="--i: 0.3s;">FAQ</a>
          </li>
          <li>
            <a href="/testi" style="--i: 0.3s;">TESTIMONIAL</a>
          </li>
          <li>
            <a href="/login-register" style="--i: 0.3s;">Login</a>
          </li>
        </ul>
      </div>
    </div>
<script src="../partials/app.js"></script>
  </body>
</html>
