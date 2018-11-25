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
    /* #inputan{
      position: relative;
      top: 90px;
      width: 350px;
      height: auto;
      top: 100px;
      margin: auto;

    }
     #card{
      background-color: #ffffff;
    } */
form{
  margin-top: 150px;
}
        nav a{
          font-weight: 700;
 color: rgba(255, 255, 255, .5);
 background-color: transparent;
 border-bottom: .25rem solid transparent;
        }
        body{
          background-image: url('<?php echo base_url() ?>img/bola1.jpg');
        }
        nav a:hover{
          color: #fff;
        }
        a:hover
        {
          color: #fff;
          text-decoration: none;
        }
        img {
      height: 2rem;
      line-height: 2rem;
      vertical-align: bottom;
      margin-right: .5rem;
      width: auto;
      }
    </style>
  </head>
  <body class="d-flex align-items-center h-100">
      <div class="col mx-auto" style="max-width:21rem;">
        <form class="card" action="<?php echo site_url('pasundan/scum'); ?>" method="post">
          <div class="card-body p-6">
    <div class="text-center mb-6">

    </div>
  <div class="card-title text-center">
<h4 class="text-muted">MFC FUTSAL</h4>
    <h4 class="text-muted">Sign In</h4>
  </div>

      <div class="form-group ">
        <label for="exampleInputEmail1">Username</label>
        <div class="input-group">
          <input type="text" name="username" class="form-control" id="exampleInputEmail1"  placeholder="Enter Nama" required>
        </div>
      </div>
      <div class="form-group ">
        <label for="exampleInputEmail1">Password</label>
        <div class="input-group">
          <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama" required>
        </div>
      </div>
      <div class="form-footer">
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
      </div>
    </div>
    </form>
    <br>
    <a href="<?php echo site_url('pasundan/registrasi') ?>"><div class="text-center" style="color:#fff;">
      Create New Account
    </div></a>
  </div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
