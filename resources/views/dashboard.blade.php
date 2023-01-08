@extends('partials/navbarU')

@section('content')
<link rel="stylesheet" href="../styleDashboard/style.css">
<div class="main-content">
  <div class="iklan">
    <img src="../styleDashboard/iklan.png"></img>
  </div>

  <div class="learn">

    <div class="kiri">
      <div class="card">
          <h2>Bagaimana Cara Mulai Belajar?</h2>

          <div class="step">
              <div class="no">
                <h1>1</h1>
              </div>
              <div class="langkah">
                <p>Buka Menu Pembelajaran</p>
              </div>
          </div>


        <div class="step">
          <div class="no">
            <h1>2</h1>
          </div>
          <div class="langkah">
            <p>Pilih salah satu provinsi yang tersedia dalam list</p>
          </div>
        </div>

        <div class="step">
          <div class="no">
            <h1>3</h1>
          </div>
          <div class="langkah">
            <p>Silahkan pelajari pembelajaran yang sudah tersedia</p>
          </div>
        </div>

            
        <div class="btn1">
          <a href="#"><button>Mulai Belajar Sekarang</button></a>
        </div>

      </div>
    </div>

    <div class="kanan">
      <div class="card">
        <div class="stat">
          <img src="../styleDashboard/user.jpg" alt="">
          <div class="kata">
             <h3><?= auth()->user()->name?></h3>
             <p>Tingkatkan belajarmu dengan melalui fitur pembelajaran atau berkontribusi di forum diskusi tanya jawab</p>
          </div>
        </div>

        <div class="diskusi">
          <div class="diskir">
            <h4>
            Ayo mulai berdiskusi dengan sesama pengguna lain di Lingkar Budaya!
            </h4>

            <div class="btn2">
              <a href="#"><button>Forum Diskusi</button></a>
            </div>

          </div>
          <div class="diskan">
            <img src="../styleDashboard/tanya.png" alt="">
          </div>
        </div>
        
      </div>
    </div>

  </div>
</div>
        
@endsection