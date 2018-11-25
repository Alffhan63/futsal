<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link href="<?php echo base_url() ?>assets/css/album.css" rel="stylesheet">
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
        div a:hover{
          color: #fff;
          text-decoration: none;
        }
        /* div a{
          color: #000;
        } */
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
            <a class="nav-link active" href="#">Home</a>
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

      <main role="main">


        <div class="album py-5 bg-light">
          <div class="container">

            <div class="row">
              <div class="col-md-4">
              <a href="<?php echo site_url('user/booking'); ?>"><div class="card mb-4 box btn btn-sm btn-outline-secondary">
                  <img class="card-img-top" src="<?php echo base_url() ?>img/lapangan1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h2 class="heading" >Lapangan 1</h2>
                    <p class="card-text"</p>
                    <div class="d-flex justify-content-between align-items-center">
                    </div>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-md-4">
              <a href="<?php echo site_url('user/lapangan2'); ?>"><div class="card mb-4 box btn btn-sm btn-outline-secondary">
                  <img class="card-img-top" src="<?php echo base_url() ?>img/lapangan5.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h2 class="heading" >Lapangan 2</h2>
                    <p class="card-text"</p>
                    <div class="d-flex justify-content-between align-items-center">
                    </div>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-md-4">
              <a href="<?php echo site_url('user/lapangan3'); ?>"><div class="card mb-4 box btn btn-sm btn-outline-secondary">
                  <img class="card-img-top" src="<?php echo base_url() ?>img/futsal3.jpeg" alt="Card image cap">
                  <div class="card-body">
                    <h2 class="heading" >Lapangan 3</h2>
                    <p class="card-text"</p>
                    <div class="d-flex justify-content-between align-items-center">
                    </div>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-md-4">
              <a href="<?php echo site_url('user/lapangan4'); ?>"><div class="card mb-4 box btn btn-sm btn-outline-secondary">
                  <img class="card-img-top" src="<?php echo base_url() ?>img/lapangan6.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h2 class="heading" >Lapangan 4</h2>
                    <p class="card-text"</p>
                    <div class="d-flex justify-content-between align-items-center">
                    </div>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-md-4">
              <a href="<?php echo site_url('user/lapangan5'); ?>"><div class="card mb-4 box btn btn-sm btn-outline-secondary">
                  <img class="card-img-top" src="<?php echo base_url() ?>img/lapangan7.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h2 class="heading" >Lapangan 5</h2>
                    <p class="card-text"</p>
                    <div class="d-flex justify-content-between align-items-center">
                    </div>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-md-4">
              <a href="<?php echo site_url('user/lapangan6'); ?>"><div class="card mb-4 box btn btn-sm btn-outline-secondary">
                  <img class="card-img-top" src="<?php echo base_url() ?>img/lapangan8.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h2 class="heading" >Lapangan 6</h2>
                    <p class="card-text"</p>
                    <div class="d-flex justify-content-between align-items-center">
                    </div>
                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>
        </div>

      </main>

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
