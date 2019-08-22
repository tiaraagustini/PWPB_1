<?php 
  $nama_satu = "Tiara Agustini";
  $umur_satu = 16;
  $hoby_satu = "mendaki gunung";
  $tinggi_satu =158;
 
  $nama_dua = "Rizka Hardianti";
  $umur_dua = 16; 
  $hoby_dua = "berenang";
  $tinggi_dua = 155;
  
  $nama_tiga = "Leni Alfira";
  $umur_tiga = 16;
  $hoby_tiga = "membaca wattpad";
  $tinggi_tiga = 159;
  $rata_rata = ($tinggi_satu + $tinggi_dua + $tinggi_tiga) / 3;
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Tugas pwpb</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <style>
      .pengguna{
        width: 150px;
        height: 150px;
        border-radius: 10px;
      }
      .card{
        border-radius: 10px;
      }
        
      
    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Tentang Kami</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="tugassatu.php">TUGAS SATU</a>
    <a class="p-2 text-dark" href="tugaskedua.php">TUGAS DUA</a>
    <a class="p-2 text-dark" href="#">TUGAS TIGA</a>
    <a class="p-2 text-dark" href="#"> TUGAS EMPAT</a>
  </nav>
  <a class="btn btn-outline-primary" href="index.php">Beranda</a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">"BIODATA KAMI"</h1>
  <p class="lead"></p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">

        <!-- BIODATA TIARA AGUSTINI -->
          <img class="pengguna" src="img/agustini.jpg"></h4>
      </div>
      <div class="card-body">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Nama Lengkap : <?php echo $nama_satu ?></li>
          <li>Hoby : <?php echo $hoby_satu ?></li>
          <li>Umur : <?php echo $umur_satu ?></li>
          <li>Tinggi badan : <?php echo $tinggi_satu ?></li>
          <li></li>
          <li></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Klik Untuk Melihat</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <!-- BIODATA RIZKA HARDIYANTI -->
        <img class="pengguna" src="img/dede.jpg">
      </div>
      <div class="card-body">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Nama lengkap : <?php echo $nama_dua ?></li>
          <li>Hoby : <?php echo $hoby_dua ?></li>
          <li>Umur : <?php echo $tinggi_dua ?></li>
          <li>Tinggi badan : <?php echo $tinggi_dua ?></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Klik Untuk Melihat</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <!-- BIODATA LENI ALFIRA -->
        <img class="pengguna" src="img/leni.jpg">
        <h4 class="my-0 font-weight-normal"></h4>
      </div>
      <div class="card-body">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Nama lengkap : <?php echo $nama_tiga ?></li>
          <li>Hoby : <?php echo $hoby_tiga ?></li>
          <li>Umur: <?php echo $umur_tiga ?></li>
          <li>Tinggi badan : <?php echo $tinggi_tiga ?></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Klik Untuk Melihat</button>
      </div>
    </div>
  </div>
  <p class="lead">Rata-rata tinggi kami <?php echo $rata_rata ?></p>
  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="by" width="50" height="60">
        <small class="d-block mb-3 text-muted">&copy;<b>Leriti</b></small>
      </div>
      <div class="col-6 col-md">
        <h5></h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#"></a></li>
          <li><a class="text-muted" href="#"></a></li>
          <li><a class="text-muted" href="#"></a></li>
          <li><a class="text-muted" href="#"></a></li>
          <li><a class="text-muted" href="#"></a></li>
          <li><a class="text-muted" href="#"></a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5></h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#"></a></li>
          <li><a class="text-muted" 89href="#"></a></li>
          <li><a class="text-muted" href="#"></a></li>
          <li><a class="text-muted" href="#"></a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5></h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#"></a></li>
          <li><a class="text-muted" href="#"></a></li>
          <li><a class="text-muted" href="#"></a></li>
          <li><a class="text-muted" href="#"></a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
</body>
</html>
