<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SPKB</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fontawesome/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="ui/css/datatables/dataTables.bootstrap.css">

  <link href="style.css" rel="stylesheet">
  <script>
    $(document).ready(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>
</head>
<style>
  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
  }


  img.avatar {
    width: 40%;
    border-radius: 30%;
  }

  .navbar {
    margin-bottom: 0;
    min-height: 60px;
    background-color: #4E944F;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 0px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
    opacity: 0;

  }

  .navbar li a {
    color: #fff !important;
    padding: 0 15px;
    height: 60px;
    line-height: 60px;
    font-size: 12px;
  }


  .navbar .navbar-brand {
    color: #fff !important;
    padding: 5px 15px;
    height: 60px;
    line-height: 60px;
  }

  .navbar-nav li a:hover,
  .navbar-nav li.active a {
    color: #83BD75 !important;
    background-color: #fff !important;
  }

  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
    margin-top: 23px;
    padding: 9px 10px !important;
  }

  .modal-content {
    background-color: #E9EFC0 !important;
  }

  .modal-header {
    background-color: #B4E197 !important;
  }

  .modal-footer {
    background-color: #B4E197 !important;
  }

  .btn {
    background-color: #4E944F !important;
    color: #fff !important;
  }


  .show {
    opacity: 1;
  }

  .transition {
    -webkit-transition: all 1s ease-in-out;
    -moz-transition: all 1s ease-in-out;
    -o-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
  }
</style>

<?php
if ($_SESSION) {

  if ($_SESSION == "User") {
    header("Location: indexuser.php");
  }
}

include_once('login.php');

?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <nav class="navbar navbar-default navbar-fixed-top transition">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="#myPage">
          <img src="img/SPKB.png" height="50" width="60" alt="" class="d-inline-block align-middle mr-2">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#tentang"><span class="glyphicon glyphicon-globe"></span> TENTANG</a></li>
          <li><a href="#penelitian"><span class="glyphicon glyphicon-globe"></span> TENTANG PENELITIAN</a></li>
          <li><a href="#sistem"><span class="glyphicon glyphicon-th-list"></span> SPKB</a></li>

          <li><a href="#jenis"><span class="glyphicon glyphicon-grain"></span> JENIS</a></li>

          <li><a href="#contact"><span class="glyphicon glyphicon-envelope"></span> ULASAN</a></li>
          <li><a href="#aboutModal" data-toggle="modal" data-target="#myMo"><span class="glyphicon glyphicon-log-in"></span> MASUK</a></li>

        </ul>
      </div>
    </div>
  </nav>

  <div class="modal fade" id="myMo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <br>

    <div class="modal-dialog" style="width:450px;">

      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>

          <h4 class="modal-title" id="myModalLabel">Login</h4>

        </div>

        <div class="imgcontainer">
          <img src="img/hhh.png" alt="Avatar" class="avatar">
        </div>

        <div class="modal-body">

          <br>
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="col-sm-4 control-label">Username</label>
              <div class="col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Password</label>
              <div class="col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
              </div>
            </div>

            <input type="hidden" class="form-control" id="level" name="level" placeholder="Password" value="2">

            <div class="form-group">
              <label class="col-sm-5 control-label">&nbsp;</label>
              <div class="col-sm-6">
                <button class="btn" name="submit" type="submit">Login</button>
              </div>
            </div>
            <center>
              <?php echo $error; ?>
            </center>
          </form>
        </div>
        <div class="modal-footer">
          <center>
            <button type="button" class="btn" data-dismiss="modal">TUTUP</button>
          </center>
        </div>

      </div>
    </div>

  </div>
  </div>
  </div>

  <script>
    $(window).scroll(function() {


      if ($(window).scrollTop() > 100) {

        $('.navbar').addClass('show');

      } else {

        $('.navbar').removeClass('show');

      };
    });

    $('.scroll').on('click', function(e) {
      e.preventDefault()

      $('html, body').animate({
        scrollTop: $(this.hash).offset().top
      }, 1500);
    });
  </script>
  <script type="text/javascript" language="javascript" src="ui/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" language="javascript" src="ui/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="ui/js/dataTables.bootstrap.min.js"></script>


</body>

</html>