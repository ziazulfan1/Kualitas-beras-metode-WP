<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
  <meta name="description" content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
  <meta name="robots" content="noindex,nofollow">
  <title>SPKB</title>
  <link href="fontawesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="ui/css/datatables/dataTables.bootstrap.css">
</head>
<?php
include_once('cekuser.php');
?>

<style>
  body {
    margin-top: 50px;
  }

  #wrapper {
    padding-left: 0;
  }

  #page-wrapper {
    width: 100%;
    padding: 0;
    background-color: #fff;
  }

  @media(min-width:768px) {
    #wrapper {
      padding-left: 225px;
    }

    #page-wrapper {
      padding: 22px 10px;
    }
  }

  /* Top Navigation */

  .top-nav {
    padding: 0 15px;
  }

  .top-nav>li {
    display: inline-block;
    float: left;
  }

  .top-nav>li>a {
    padding-top: 20px;
    padding-bottom: 20px;
    line-height: 20px;
    color: #fff;
  }

  .top-nav>li>a:hover,
  .top-nav>li>a:focus,
  .top-nav>.open>a,
  .top-nav>.open>a:hover,
  .top-nav>.open>a:focus {
    color: #fff;
    background-color: #4E944F;
  }

  .top-nav>.open>.dropdown-menu {
    float: left;
    position: absolute;
    margin-top: 0;
    /*border: 1px solid rgba(0,0,0,.15);*/
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: #fff;
    -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
  }

  .top-nav>.open>.dropdown-menu>li>a {
    white-space: normal;
  }

  /* Side Navigation */

  @media(min-width:768px) {
    .side-nav {
      position: fixed;
      top: 60px;
      left: 225px;
      width: 225px;
      margin-left: -225px;
      border: none;
      border-radius: 0;
      border-top: 1px rgba(255, 255, 255, 1) solid;
      overflow-y: auto;
      background-color: #83BD75;
      /*background-color: #5A6B7D;*/
      bottom: 0;
      overflow-x: hidden;
      padding-bottom: 40px;
    }

    .side-nav>li>a {
      width: 225px;
      border-bottom: 1px rgba(255, 255, 255, 1) solid;
    }

    .side-nav li a:hover,
    .side-nav li a:focus {
      outline: none;
      background-color: #4E944F !important;
    }
  }

  .side-nav>li>ul {
    padding: 0;
    border-bottom: 1px rgba(0, 0, 0, .3) solid;
  }

  .navbar-inverse .navbar-nav>li>a {
    color: #fff;
  }

  .side-nav>li>ul>li>a {
    display: block;
    padding: 10px 15px 10px 38px;
    text-decoration: none;
    /*color: #999;*/
    color: #fff;
  }

  .side-nav>li>ul>li>a:hover {
    color: #fff;
  }

  .navbar .nav>li>a>.label {
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    position: absolute;
    top: 14px;
    right: 6px;
    font-size: 10px;
    font-weight: normal;
    min-width: 15px;
    min-height: 15px;
    line-height: 1.0em;
    text-align: center;
    padding: 2px;
  }


  .navbar .nav>li>a:hover>.label {
    top: 10px;
  }

  .navbar-brand {
    padding: 5px 15px;
  }

  .navbar {
    background-color: #4E944F;
  }

  .header-icons-group {
    display: flex;
    order: 3;
    margin-left: auto;
    height: 100%;
    border-left: 1px solid #cccccc;
    margin-right: -20px;
  }

  .header-icons-group .c-header-icon:last-child {
    border-right: 0;
  }

  .c-header-icon {
    position: relative;
    display: flex;
    float: left;
    width: 70px;
    height: 100%;
    align-items: center;
    justify-content: center;
    line-height: 1;
    cursor: pointer;
    border-right: 0px solid #cccccc;

  }

  .c-header-icon i {
    font-size: 18px;
    line-height: 18px;
  }

  .c-header-icon--in-circle {
    border: 1px solid #d0d0d0;
    border-radius: 100%;
  }

  .c-header-icon:hover i {
    color: #f5642d;
  }
</style>
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">

  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="indexuser.php">
        <img src="img/SPKB.png" height="50" width="60" alt="LOGO">
      </a>
    </div>

    <ul class="nav navbar-right top-nav">
      <li><a href="">Sistem Pemilihan Kualitas Beras</a></li>
      <li class="header-icons-group">
        <a class="c-header-icon logout" href="logout.php" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class=" fa fa-power-off"></i></a>
      </li>

    </ul>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
        <li>
          <a href="indexuser.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>

        <li>
          <a href="kriteria.php"><i class="fa fa-fw fa-table"></i> Data Kriteria</a>
        </li>
        <li>
          <a href="alternatif.php"><i class="fa fa-fw fa-product-hunt"></i> Data Alternatif</a>
        </li>
        <li>
          <a href="produk.php"><i class="fa fa-fw fa-cube"></i> Data Produk Beras</a>
        </li>
        <li>
          <a href="analisa.php"><i class="fa fa-fw fa-bar-chart"></i> Analisis</a>
        </li>
        <li>
          <a href="perhitungan.php"><i class="fa fa-fw fa fa-calculator"></i> Perhitungan</a>
        </li>
		<li>
          

        <li>
          <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-cog"></i> Pengaturan <i class="fa fa-fw fa-angle-down pull-right"></i></a>
          <ul id="submenu-1" class="collapse">
            <li><a href="datauser.php"><i class="fa fa-user"></i> Data User</a></li>
            <li><a href="ulasan.php"><i class="fa fa-users"></i> Ulasan</a></li>
          </ul>
        </li>
      </ul>
    </div>

  </nav>



  <script type="text/javascript" language="javascript" src="ui/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" language="javascript" src="ui/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="ui/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" language="javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" language="javascript" src="js/tooltip.js"></script>

  </body>
  <script>
    $(function() {
      $('[data-toggle="tooltip"]').tooltip();
      $(".side-nav .collapse").on("hide.bs.collapse", function() {
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
      });
      $('.side-nav .collapse').on("show.bs.collapse", function() {
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");
      });
    })
  </script>

</html>