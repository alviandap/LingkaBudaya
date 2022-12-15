<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkar Budaya | {{ $title }}</title>
    <link rel="stylesheet" href="../navbarU/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>

<div class="wrapper">

  <div class="top_navbar">
    <div class="top_menu">
      <div class="logo">
        <img src="../navbarU/logo.png" alt="">
        <h1>Lingkar Budaya</h1>
      </div>
      <ul>
        <p><?= auth()->user()->name?></p>
        <li><a href="#"><i class="uil uil-user"></i></a></li>
        <li><a href="#"><i class="uil uil-bell"></i></a></li>

      </ul>
    </div>
  </div>

  <div class="sidebar">
    <ul>
        <li><a <?= ($title === "Dashboard") ? 'active':' '?> href="#" ><span class="icon"><i class="uil uil-house-user"></i></span><span class="title">Home</span></a></li>
        <li><a <?= ($title === "Pembelajaran") ? 'active':' '?> href="#"><span class="icon"><i class="uil uil-book-alt"></i></span><span class="title">Pembelajaran</span></a></li>
        <li><a <?= ($title === "Foruma") ? 'active':' '?> href="#"><span class="icon"><i class="uil uil-comment-question"></i></span><span class="title">Forum</span></a></li>
        <li><a <?= ($title === "Need Help") ? 'active':' '?> href="#"><span class="icon"><i class="uil uil-question-circle"></i></i></span><span class="title">Need Help?</span></a></li>
    </ul>
  </div>

</div>

<div class="main">
    <div class="content">
        @yield('content')
    </div>
</div>

</div>
</body>
</html>