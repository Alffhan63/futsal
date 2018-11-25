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
          height: 5rem;
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
          <h3 class="masthead-brand float-left" style="color:#fff; padding-top:20px;padding-left:10px;">MFC Futsal</h3>
          <nav class="nav nav-masthead justify-content-center float-right p-3">
            <a class="nav-link active" href="<?php echo site_url('user/index') ?>">Home</a>
            <a class="nav-link" href="<?php echo site_url('user/pembayaran') ?>">Pembayaran</a>
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
          <h1>Edit Profile</h1>
        	<hr>
      	<div class="row">
            <!-- left column -->

            <!-- edit form column -->
            <div class="col-md-20 personal-info"style="padding-left:300px">

              <form class="form-horizontal" role="form">
                <div class="form-group">
                  <span class="float-left"style="padding-left:15px"><label class="col-lg-2 control-label">Nama:</label></span>
                  <div class="col-lg-8"style="padding-top:2px;padding-left:50px;">
                    <input class="form-control" type="text" value="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <span class="float-left"style="padding-left:2px"><label class="col-lg-2 control-label">UserName:</label></span>
                  <div class="col-lg-8"style="padding-top:2px;padding-left:50px;">
                    <input class="form-control" type="text" value="User Name">
                  </div>
                </div>
                <div class="form-group">
                  <span class="float-left"style="padding-left:2px"><label class="col-lg-2 control-label">NamaTim:</label></span>
                  <div class="col-lg-8"style="padding-top:2px;padding-left:50px;">
                    <input class="form-control" type="text" value="Nama Tim">
                  </div>
                </div>
                <div class="form-group">
                  <span class="float-left"style="padding-left:15px"><label class="col-lg-3 control-label">Alamat</label></span>
                  <div class="col-lg-8"style="padding-top:2px;padding-left:50px;">
                    <input class="form-control" type="text" value="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <span class="float-left"style="padding-left:10px"><label class="col-lg-2 control-label">NoHp</label></span>
                  <div class="col-lg-8"style="padding-top:2px;padding-left:50px;">
                    <input class="form-control" type="text" value="No Hp">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label"></label>
                  <div class="col-md-5"style="padding-top:2px;padding-left:300px;">
                    <input type="<?php echo base_url() ?>button" class="btn btn-primary" value="Save Changes">
                    <span></span>
                    <input type="<?php echo base_url() ?>reset" class="btn btn-default" value="Cancel">
                  </div>
                </div>
              </form>
            </div>
        </div>
      </div>
      <hr>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
