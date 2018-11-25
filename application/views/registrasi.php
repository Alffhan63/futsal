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
body{
  background-image:  url('<?php echo base_url() ?>img/bola1.jpg');
}
            nav a:hover{
          color: #fff;
        }
    </style>
  </head>

  <body class="text-center">
    <div class="col-md-10 personal-info"style="padding-left:450px;padding-top:100px;">
      <?php if(isset($pesan)){
        echo $pesan;
      } ?>
      <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('pasundan/registered'); ?>">
        <div class="form-group">
          	<span class="float-left"><h3 class="text-muted" style="color:#000000;padding-left:50px">Registrasi </h3> </span>
  <div class="form-group "style="width: 450px;padding-left:25px;">
          <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" required>
        </div>
      </div>
        <div class="form-group">
            <div class="form-group "style="width: 450px;padding-left:25px;">
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" UserNama" required>
        </div>
      </div>
        <div class="form-group">
            <div class="form-group "style="width: 450px;padding-left:25px;">
  <input type="text" name="namatim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NamaTim" required>
        </div>
      </div>
        <div class="form-group">
  <div class="form-group "style="width: 450px;padding-left:25px;">
          <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat" required>
        </div>
      </div>
        <div class="form-group">
  <div class="form-group "style="width: 450px;padding-left:25px;">
          <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NoHp" required>
        </div>
      </div>
        <div class="form-group">
  <div class="form-group "style="width: 450px;padding-left:25px;">
          <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password" required>
        </div>
</div>
<div class="form-group">
<div class="form-group "style="width: 450px;padding-left:25px;">
  <input type="text" name="level" class="form-control" id="exampleInputEmail1" value="user" aria-describedby="emailHelp" placeholder="Level" hidden>
</div>
</div>
        <div class="form-group">
          <label class="col-md-2 control-label"></label>
          <div class="col-md-8"style="padding-top:1px;padding-left:100px;">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Save</button>
            <span></span>
          </div>
          </div>
            <a href="<?php echo base_url() ?>" class="text-center new-account"style="width: 370px;">Back</a>
      </form>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
