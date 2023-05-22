<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- My Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/style.css')); ?>">

    <!-- Logo Title -->
    <link rel="icon" href="Assets/img/LogoKF.png" type="image/x-icon">
    <title>King Futsal</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="Assets/img/LogoKF.png" alt="" width="30" class="d-inline-block align-text-top me-3"> 
            KING FUTSAL</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-2">
                <a class="nav-link active" aria-current="page" href="#">BERANDA</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">FITUR</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="/layanan">LAYANAN</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">KONTAK</a>
              </li>
            </ul>

            <div>
                <button class="button-primary">Daftar</button>
                <button class="button-secondary">Masuk</button>
            </div>
          </div>
        </div>
      </nav>

      <!-- Hero Section -->
      <section id="hero">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-md-6 hero-tagline my-auto">
               <h1>Mempermudah proses booking dari rumah</h1>
               <p><span class="fw-bold">E-Booking</span> merupakan sistem yang dapat membantu  dalam mem-booking lapangan futsal dari mana saja secara online tanpa datang ke tempat secara langsung</p>

                <button class="button-lg-primary">Booking Now</button>
                <a href="#"><img src="Assets/img/Button Arrow.png"></a>
                
            </div>
          </div>

          <img src="Assets/img/e-pelaf (2).png" alt="" class="position-absolute end-0 bottom-0 img-hero row-cols-lg-3">
        </div>
      </section>

     <!--  Layanan Section -->
     <section id="layanan">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center"> 
              <h2>Layanan Kami</h2>
              <p>Layanan yang diberikan pada aplikasi <span class="fw-bold">KING FUTSAL</span></p>
              <span class="sub-title"></span>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-4 text-center">
              <div class="card-layanan">
                <div class="circle-icon position-relative mx-auto">
                  <img src="Assets/img/book.png" alt="" class="position-absolute top-50 start-50 translate-middle"> 
                </div>
                <h3 class="mt-4">Booking Lapangan</h3>
                <p class="mt-3">Buat jadwal olahragamu lebih lancar tanpa perlu datang ke tempat futsal secara langsung </p>
              </div>
            </div>

            <div class="col-md-4 text-center">
              <div class="card-layanan">
                <div class="circle-icon position-relative mx-auto">
                  <img src="Assets/img/kalender.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                </div>
                <h3 class="mt-4">Melihat Jadwal Lapangan</h3>
                <p class="mt-3">Lihat jadwal lapangan  secara praktis dan efisien tanpa perlu bertanya dengan pemilik lapangan </p>
              </div>
            </div>

            <div class="col-md-4 text-center">
              <div class="card-layanan">
                <div class="circle-icon position-relative mx-auto">
                  <img src="Assets/img/dompet.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                </div>
                <h3 class="mt-4">Pembayaran Digital</h3>
                <p class="mt-3">Mudahkan pembayaranmu dengan pembayaran digital yang praktis, saat mem-booking lapangan </p>
              </div>
            </div>
          </div>
        </div>
     </section>

     <!-- Footer -->
     <section>
       <div class="footer text-center">
       <p>&copy; 2023 King Futsal. All rights reserved. |     Designed by <a href="https://kadekalvin.carrd.co"><span class="fw-bold hijau">kadekalvin<span></a></p>
        </div>  
     </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
</body>

</html><?php /**PATH D:\Kuliah\SMT 6\Pemrograman Web Berbasis Framework\E-PELAF\resources\views/landingpage.blade.php ENDPATH**/ ?>