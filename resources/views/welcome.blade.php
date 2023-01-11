<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lingkar Budaya | {{ $title }}</title>
    <link rel="stylesheet" href="../styleWelcome/style.css" />
  </head>
  <body>
    <div class="container">

        <div class="navbar">
            <div class="menu">
                <div class="logo">
                    <div>
                        <img src="../styleWelcome/logo.png">
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
              <div class="inner">
                    <img src="../styleWelcome/orang.png" alt="">
                    <h3>Budaya Indonesia</h3>
                    <h1>Satu <span class="input"></span></h1>
                    <p>Kami adalah ahli waris yang sah dari kebudayaan dunia dan kebudayaan ini kami teruskan dengan cara kami sendiri</p>
                    <a href="#"><button class="btn">Mulai Belajar Sekarang</button></a>
              </div>
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

    <script src="../styleWelcome/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
      var typed = new Typed(".input", {
          strings : ["Nusa", "Bangsa", "Bahasa"],
          typeSpeed:90,
          backSpeed:80,
          loop:true
      });
  </script>
  </body>
</html>
