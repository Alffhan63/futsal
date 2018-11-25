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
            <a class="nav-link active" href="<?php echo site_url('user/index') ?>">Home</a>
            <a class="nav-link" href="#">Pembayaran</a>
            <a class="nav-link" href="<?php echo site_url('user/sop') ?>">SOP</a>
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">MyProfil</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo site_url('user/profil') ?>">MyProfil</a>
              <a class="dropdown-item" href="<?php echo site_url('user/login') ?>">Login</a>
              <a class="dropdown-item" href="<?php echo site_url('logout/sandysuy') ?>">Logout</a>
            </div>
          </nav>
        </div>
      </header>
<br>
        <div class="container">
      		<div class="content">
      			<span class="float-left"><h3 class="text-muted">Detail Pemesanan</h3> </span>
            <span class="float-right"><button type="<?php echo base_url() ?>button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-pencil"></span>
            Edit Form
          </button></span>
      			<table class="table  table-condensed">
      				<!-- <tr>
      					<th width="20%"></th>
      					<td><?php echo $this->session->userdata('id_pemesaan'); ?></td>
      				</tr> -->

      				<tr>
      					<th></th>
      					<td></td>
      				</tr>
              <tr>
                <th></th>
                <td></td>
              </tr>
              <tr>
                <th></th>
                <td></td>
              </tr>
              <tr>
                <th></th>
                <td></td>
              </tr>
              <tr>
                <th></th>
                <td></td>
              </tr>
      			</table>
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo site_url('user/index'); ?>">
                      <strong><label for="exampleInputEmail1">Tamggal Main</label></strong>
                      <div class="form-group">
                      <input type="date" class="form-control" id="exampleInputEmail1"  placeholder="" required>
                      </div>
                      <div class="form-group">
                      <strong><label for="exampleInputPassword1">Jam Mulai</label></strong>
                      <input type="time" class="form-control" id="exampleInputPassword1" placeholder="Hari" required>
                      </div>
                      <div class="form-group">
                      <strong><label for="exampleInputPassword1">Jam Selesai</label></strong>
                      <input type="time" class="form-control" id="exampleInputPassword1" placeholder="Tanggal" required>
                      </div>
                      <div class="form-group">
                      <strong><label for="exampleInputPassword1">Nama Pemesan</label></strong>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Pemesan" required>
                      </div>
                      <div class="form-group">
                      <strong><label for="exampleInputPassword1">Nama Tim</label></strong>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Tim" required>
                      </div>
                <button type="submit" name="<?php echo base_url() ?>submit" class="btn btn-primary btn-block">Submit</button>
              </form>
                  </div>
                </div>
              </div>
            </div>
      	</div>
        <footer class="text-left">
          <div class="container">
            <p> *melakukan pembayaran biaya uang muka 30.000 rupiah </p>
          </div>
        </footer>
          <form action="<?php echo site_url('user/index'); ?>">
      <div class="form-group">
      	<strong><span class="float-left"><label for="exampleFormControlFile1">Upload</label></span></strong>
      <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
      	<span class="float-left"><button type="<?php echo base_url() ?>button" class="btn btn-success" <span class="glyphicon glyphicon-pencil"></span>
        Kirim
      </button></span>
      </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
