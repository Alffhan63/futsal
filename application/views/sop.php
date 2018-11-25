<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link href="album.css" rel="stylesheet">
     <!-- <link href="cover.css" rel="stylesheet"> -->
    <title>Hello, world!</title>
    <style media="screen">
        header{
          background-color: #333;
          height: 4rem;
        }
        nav a{
          font-weight: 700;
 color: rgba(255, 255, 255, .5);
 background-color: transparent;
 border-bottom: .25rem solid transparent;
        }
        nav a:hover{
          color: #fff;
        }
    </style>
  </head>
  <body class="text-center">


      <header class="masthead mb-auto">
        <div class="inner clearfix">
          <h3 class="masthead-brand float-left" style="color:#fff; padding-top:10px;padding-left:10px;">MFC Futsal</h3>
          <nav class="nav nav-masthead justify-content-center float-right p-3">
            <a class="nav-link active" href="<?php echo site_url('user/index'); ?>">Home</a>
            <a class="nav-link" href="<?php echo site_url('user/pembayaran'); ?>">Pembayaran</a>
            <a class="nav-link" href="<?php echo site_url('user/sop'); ?>">SOP</a>
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">MyProfil</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo site_url('user/profil'); ?>">MyProfil</a>
              <a class="dropdown-item" href="<?php echo site_url('user/login'); ?>">Login</a>
              <a class="dropdown-item" href="<?php echo site_url('logout/sandysuy'); ?>">Logout</a>
            </div>
          </nav>
        </div>
      </header>
      <span class="left"><h3 class="text-muted"style="padding-top:20px;">S.O.P FUTSAL MFC</h3> </span>
      <div class="clearfix" style="margin-top:30px;padding-top:2px;padding-left:20px;">
        <div class="row">
    <div class="card border-primary mb-3" style="max-width: 20rem;">
  <div class="card-body text-primary">
    <h5 class="card-title">LAPANGAN</h5>
    <p class="card-text">Tidak membuang sampah dalam Lapangan atau meludah didalam Lapangan.</p>
  </div>
</div>
<div class="card border-primary mb-3" style="max-width: 20rem;">
<div class="card-body text-primary">
<h5 class="card-title">BERMAIN</h5>
<p class="card-text">Datang lebih awal 10 menit sebelum bermain, melewati 10 menit maka lapangan dianggap kosong.</p>
</div>
</div>
<div class="card border-primary mb-3" style="max-width: 20rem;">
<div class="card-body text-primary">
<h5 class="card-title">SEPATU</h5>
<p class="card-text">Tidak boleh menggunakan sepatu bola atau sepatu boot/safety, karena merusak pada rumput lapangan.</p>
</div>
</div>
<div class="card border-primary mb-3" style="max-width: 20rem;">
<div class="card-body text-primary">
<h5 class="card-title">ISTIRAHAT</h5>
<p class="card-text">Tidak boleh beristirahat bersender pada jaring samping lapangan diluar ataupun didalam lapangan.</p>
</div>
</div>
<div class="card border-primary mb-3" style="max-width: 20rem;">
<div class="card-body text-primary">
<h5 class="card-title">HARGA</h5>
<p class="card-text">Harga 1jam 120.000 Rupiah untuk hari senin sampai dengan jumat,wekeend sabtu-minggu 150.000 Ruiah.</p>
</div>
</div>
<div class="card border-primary mb-3" style="max-width: 20rem;">
<div class="card-body text-primary">
<h5 class="card-title">PEMESANAN</h5>
<p class="card-text">Tidak menerima pemesanan tanpa uang muka, batas Pemesanan uang muka 1jam, lewat dari itu dianggap kosong dan untuk melunasi pembayaran setelah selesai bermain.</p>
</div>
</div>
<div class="card border-primary mb-3" style="max-width: 20rem;">
<div class="card-body text-primary">
<h5 class="card-title">KEHILANGAN</h5>
<p class="card-text">Jika terjadi kehilangan barang atau kendaraan anda kami tidak bertanggung jawab, kecuali barang yang tertinggal.</p>
</div>
</div>
<div class="card border-primary mb-3" style="max-width: 20rem;">
<div class="card-body text-primary">
<h5 class="card-title">ISTIRAHAT</h5>
<p class="card-text">Tidak boleh beristirahat bersender pada jaring samping lapangan diluar ataupun didalam lapangan.</p>
</div>
</div>

</div>
<footer class="text-muted">
  <div class="container">

    <p>Aplication &copy; Bandan27, Master Futsal Citeureup (MFC Futsal)</p>

  </div>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
