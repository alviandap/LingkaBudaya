@extends('partials/navbarS')

@section('content')
<link rel="stylesheet" href="../styleWelcome/style.css" />
<div class="inner">
    <img src="../styleWelcome/orang.png" alt="">
    <h3>Budaya Indonesia</h3>
    <h1>Satu <span class="input"></span></h1>
    <p>Kami adalah ahli waris yang sah dari kebudayaan dunia dan kebudayaan ini kami teruskan dengan cara kami sendiri</p>
    <a href="#"><button class="btn">Mulai Belajar Sekarang</button></a>
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
@endsection