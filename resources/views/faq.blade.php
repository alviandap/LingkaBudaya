@extends('partials/navbarS')

@section('content')
<link rel="stylesheet" href="../styleFaq/style.css">
<div class="inner">
    <div class="kiri">
        <h1>Frequently Asked Qustion</h1>
        <img src="../styleFaq/nanya.png" >
    </div>

    <div class="kanan">

        <div class="faq-box">
            <div class="faq">
                <div class="question">
                    <h3>Apa itu Lingkar Budaya?</h3>
                    <i class='bx bx-chevron-down'></i>
                </div>
                <div class="answer">
                    <p>Platform Lingkar Budaya merupakan sebuah platform 
                    yang dirancang untuk memudahkan seseorang 
                    dalam mengenal dan mempelajari kebudayaan Indonesia. 
                    Perangkat lunak berfokus pada visualisasi pembelajaran 
                    materi melalui artikel, video, forum, dan quiz. </p>
                    </div>
                </div>

            <div class="faq">
                <div class="question">
                    <h3>Apa saja fitur Lingkar Budaya</h3>
                    <i class='bx bx-chevron-down'></i>
                </div>
                <div class="answer">
                    <p>Terdapat beberapa fitur pembelajaran seperti artikel kebudayaan, video penjelsana serta quiz. Selain itu terdapat forum diskusi untuk sesama user.</p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h3>Bagaimana cara mengerjakan quiz?</h3>
                    <i class='bx bx-chevron-down'></i>
                </div>
                <div class="answer">
                    <p>Pergi ke halaman pembelajaran lalu pilih menu quiz pada bagian akhir konten.</p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h3>Mengapa saya tida bisa mengakses quiz?</h3>
                    <i class='bx bx-chevron-down'></i>
                </div>
                <div class="answer">
                    <p>Untuk mengakses forum dan quiz anda diharuskan untuk login/ memiliki akun terlebih dahulu.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="../styleFaq/app.js"></script>
@endsection