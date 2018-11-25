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
  <body class="">


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

      <div class="container">
        <div class="clearfix" style="margin-top:30px;">
    <span class="float-left"> <h3 class="text-muted">List Jadwal Pemesanan</h3> </span>
    <span class="float-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" method="post" action="<?php echo site_url('pasundan/bookings'); ?>button">Booking</button> </span>
  </div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Lapangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('user/bookings'); ?>" method="post">
            <input type="text" class="form-control" name="lap" value="Lapangan 2" id="exampleInputEmail1"  hidden>
            <input type="text" class="form-control" name="id_status" value="1" id="exampleInputEmail1"  hidden>
            <input type="text" class="form-control" name="tlp" value="<?php echo $this->session->userdata('no_hp'); ?>" id="exampleInputEmail1"  hidden>
            <input type="text" class="form-control" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>" id="exampleInputEmail1"  hidden>
            <div class="form-group">
            <strong><label for="exampleInputPassword1">Tgl Main</label></strong>
            <input type="date" class="form-control" name="tgl_main" id="exampleInputPassword1" placeholder="Tanggal Main" required>
            </div>
          <div class="form-group">
          <strong><label for="exampleInputEmail1">Jam Mulai</label></strong>
          <input type="time" class="form-control" name="jam_mulai" id="exampleInputEmail1"  placeholder="Jam Mulai" required>
          </div>
          <div class="form-group">
          <strong><label for="exampleInputPassword1">Jam Selesai</label></strong>
          <input type="time" class="form-control" name="jam_selesai" id="exampleInputPassword1" placeholder="Jam Selesai" required>
          </div>


<input type="text" class="form-control" name="nama_pemesan" value="<?php echo $this->session->userdata('nama'); ?>" id="exampleInputPassword1" placeholder="Jam Pemesanan" hidden>

<input type="text" class="form-control" name="alamat" value="<?php echo $this->session->userdata('alamat'); ?>" id="exampleInputPassword1" placeholder="Jam Pemesanan" hidden>
  <input type="text" class="form-control" name="nama_tim" value="<?php echo $this->session->userdata('nama_tim'); ?>" id="exampleInputPassword1" placeholder="Nama Tim" hidden>

    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit  </button>
  </form>
      </div>
    </div>
  </div>
</div>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Id Pemesanan</th>
          <th>Tanggal Main</th>
          <th>Jam Mulai</th>
          <th>Jam Selesai</th>
          <th>Nama Pemesan</th>
          <th>Nama Tim</th>
          <th>status</th>
        </tr>
      </thead>

    </table>
  </div>
  </body>
  <footer class="text-muted">
    <div class="container">
      <p> *List yang terdaftar sudah melakukan pemesanan pembayaran uang muka </p>
    </div>
  </div>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
$('#myInput').trigger('focus')
})
  </script>
  </body>
</html>
