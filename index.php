<?php
include("configdb.php");
include("header.php");
?>

<style>
  body {
    font: 400 16px Lato, sans-serif;
    line-height: 1.8;
    color: #303030;
  }

  p {
    font-size: 17px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }

  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }

  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }

  .a {
    font-size: 20px;
    line-height: 1.375em;
    color: #fff;
    font-weight: 400;
    margin-bottom: 30px;
  }

  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    }

    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }

  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }

    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }

  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }

    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }

  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }

  #carousel-bg {
    background-color: transparent;
    opacity: 2;
  }

  .carousel-control.right,
  .carousel-control.left {
    background-image: none;
  }

  .carousel-indicators li {
    border-color: #4E944F;
  }

  .carousel-indicators li.active {
    background-color: #4E944F;
  }


  .container-fluid {
    padding: 60px 50px;
  }

  .bg-grey {
    background-color: #B4E197;
  }

  .bg-w {
    background-color: #E9EFC0;
  }

  .logo-small {
    color: #4E944F;
    font-size: 100px;
    opacity: 0.8;
  }

  .logo {
    color: #4E944F;
    font-size: 200px;
  }

  .slideanim {
    visibility: hidden;
  }

  .slides {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }

  .carousel .b {
    height: 450px;
  }

  img .v {
    position: absolute;
    object-fit: cover;
    top: 0;
    left: 0;
    min-height: 580px;
    opacity: 0.7;
  }


  .carousel-caption {
    position: absolute;
    z-index: 1;
    display: table;
    width: 100%;
    height: 100%;
  }

  .carousel-caption div {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
    font-size: 25px;
  }

  .trickcenter {
    position: fixed;
    top: 50%; // 50% for perfect centering
    left: 50%;
    transform: translate(-45%, -50%);
    color: #fff;
  }

  .tab {
    overflow: hidden;
    border: 2px solid #E9EFC0;
    background-color: #E9EFC0;
    text-align: center;
    display: flex;
  }

  .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
    text-align: center;
  }

  .tab button:hover {
    background-color: #B4E197;
  }

  .tab button.active {
    background-color: #B4E197;
  }

  .tabcontent {
    display: none;
    background-color: #B4E197;
    padding: 6px 12px;
    border: 2px solid #E9EFC0;
    border-top: none;
  }

  .overpic {
    position: absolute;
    top: 10%;
    left: 50%;
    z-index: 2;
  }

  .overpic img {
    width: 400px;
    height: 450px;
  }

  .logo-small:hover {
    opacity: 1.0;
  }

  .footer-basic {
    padding: 40px 0;
    background-color: #4E944F;
    color: #fff;
  }

  .footer-basic ul {
    padding: 0;
    list-style: none;
    text-align: center;
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 0;
  }

  .footer-basic li {
    padding: 0 10px;
  }

  .footer-basic ul a {
    color: inherit;
    text-decoration: none;
    opacity: 0.8;
  }

  .footer-basic ul a:hover {
    opacity: 1;
  }

  .footer-basic .social {
    text-align: center;
    padding-bottom: 25px;
  }

  .footer-basic .social>a {
    font-size: 24px;
    width: 40px;
    height: 40px;
    line-height: 40px;
    display: inline-block;
    text-align: center;
    border-radius: 50%;
    border: 1px solid #ccc;
    margin: 0 8px;
    color: inherit;
    opacity: 0.75;
  }

  .footer-basic .social>a:hover {
    opacity: 1;
  }

  .footer-basic .copyright {
    margin-top: 15px;
    text-align: center;
    font-size: 13px;
    color: #fff;
    margin-bottom: 0;
  }

  #button {
    display: inline-block;
    background-color: #4E944F;
    width: 50px;
    height: 50px;
    text-align: center;
    border-radius: 4px;
    position: fixed;
    bottom: 30px;
    right: 30px;
    transition: background-color .3s,
      opacity .5s, visibility .5s;
    opacity: 0;
    visibility: hidden;
    z-index: 1000;
  }

  #button::after {
    content: "\f077";
    font-family: FontAwesome;
    font-weight: normal;
    font-style: normal;
    font-size: 2em;
    line-height: 50px;
    color: #fff;
  }

  #button:hover {
    cursor: pointer;
    background-color: #B4E197;
  }

  #button:active {
    background-color: #4E944F;
  }

  #button.show {
    opacity: 1;
    visibility: visible;
  }

  #myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
  }

  #myImg:hover {
    opacity: 0.7;
  }

  .modal1 {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.9);
    /* Black w/ opacity */
  }

  .modal-content1 {
    border-radius: 5px;
    margin: auto;
    display: block;
    width: 300px;
    height: 350px;
  }

  #caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
  }

  .modal-content1,
  #caption {
    animation-name: zoom;
    animation-duration: 0.6s;
  }

  @keyframes zoom {
    from {
      transform: scale(0)
    }

    to {
      transform: scale(1)
    }
  }

  .close {
    position: absolute;
    top: 200px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
  }

  .close:hover,
  .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
  }

  @media only screen and (max-width: 700px) {
    .modal-content {
      width: 100%;
    }
  }

  .carousel-inner>.item>img {
    display: block;
    width: 150%;
    height: 150%;
  }
</style>

<body>
  <a id="button" href="#myPage"></a>
  <div id="myModal1" class="modal1" onclick="this.style.display='none'">
    <span class="close">&times;</span>
    <img class="modal-content1" id="img01">
    <div id="caption"></div>
  </div>
  <div class="bg-w">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item b active">
          <img class="v" src="img/5.jpeg">
          <div class="carousel-caption trickcenter">
            <div class="slideanim">SELAMAT DATANG
              <h4 class="a slideanim">Selamat Datang di Website Sistem Pemilihan Kualitas Beras</h4>
            </div>
          </div>
        </div>

        <div class="item b">
          <img class="v" src="img/7.jpeg">
          <div class="carousel-caption trickcenter">
            <div class="slideanim">PILIH KUALITAS BERAS <br>Dengan Menggunakan Metode WP<br>(WEIGHTED PRODUCT)</div>
          </div>
        </div>

        <div class="item b">
          <img class="v" src="img/gh.jpg">
          <div class="carousel-caption trickcenter">
            <div class="slideanim">DAPATKAN KUALITAS BERAS TERBAIK <br>Sesuai Dengan Keinginanmu.</div>
          </div>
        </div>
      </div>

      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  </div>

  <div id="tentang" class="container-fluid bg-w scroll">
    <div class="row">
      <div class="col-sm-8">
        <h2>TENTANG SPKB</h2>
        <h4>Sistem Pemilihan Kualitas Beras (SPKB) adalah sebuah web yang dirancang untuk dapat memudahkan pemilihan kualitas beras terbaik berdasarkan kriteria tertentu dengan menggunakan algoritma WP (Weighted Product).</h4>
        <p>Sistem Pemilihan Beras (SPKB) dikembangkan sebagai media atau sistem bagi masyarakat untuk dapat memilih jenis atau brand beras secara online sesuai kriteria yang diinginkan berdasarkan harga, kebersihan, bentuk, warna, dan kepulenan.</p>

      </div>
      <div class="col-sm-4">
        <img class="slideanim" src="img/SPKB.png" style="width:300px">
      </div>
    </div>
  </div>

  <div class="container-fluid bg-grey">
    <div class="row">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-grain logo slideanim"></span>
      </div>
      <div class="col-sm-8">
        <h2>TUJUAN SPKB</h2>
        <h4>Untuk merancang sistem pendukung keputusan yang dapat membantu penggilingan padi di kabupaten Aceh Utara untuk menentukan kualitas beras.</h4>
        <h4>Untuk membangun sistem pendukung keputusan yang dapat membantu penggilingan padi di kabupaten Aceh Utara untuk menentukan kualitas beras.</h4>
        <h4>Untuk menerapkan kualitas beras dari kilang padi kabupaten Aceh Utara dengan menentukan metode WP (Weighted Product).</h4>
      </div>
    </div>
  </div>
  <div id="" class="text-center">
    <div class="container-fluid bg-w text-center">
      <h2>Kenapa Harus SPKB</h2>
      <br>
      <center>
        <div class="row slideanim">
          <div class="col-sm-3 ">
            <span class="fa fa-globe logo-small"></span>
            <h4><b>Mudah Digunakan</b><br>Instruksi Mudah Dimengerti<br>User Friendly</h4>
          </div>
          <div class="col-sm-3">
            <span class="fa fa-clock-o logo-small"></span>
            <h4><b>Efesien</b><br>Sedikit Loading Page<br>Responsive</h4>
          </div>
          <div class="col-sm-3">
            <span class="fa fa-cogs logo-small"></span>
            <h4><b>Efektif</b><br>Hasil Yang Sesuai<br>On Point</h4>
          </div>
          <div class="col-sm-3">
            <span class="fa fa-picture-o logo-small "></span>
            <h4><b>Menarik</b><br>Hanya Dalam Satu Page<br>One Page Only</h4>
          </div>
        </div>
      </center>
    </div>
  </div>
  <div id="penelitian" class="container-fluid bg-grey text-center">
    <h2>Tentang Penelitian</h2>
    <h4 style="text-align: justify"> Penelitian ini dilakasanakan di Desa Blang Meuria, Kecamatan Gedong, Kabupaten Aceh Utara, Provinsi Nanggroe Aceh Darussalam dan Tanjong Mesjid, Kecamatan Samudera, Kabupaten Aceh Utara, Provinsi Nanggroe Aceh Darussalam. Pemilihan lokasi dilakukan secara sengaja (purposive) dengan pertimbangan bahwa di desa ini merupakan salah satu desa penghasil beras.</h4>
    <br>
    <h3>Kilang Padi Mutiara</h3>
    <h4 style="text-align: justify">Penelitian pada kilang padi mutiara bertempat di Desa Blang Meuria, Kecamatan Gedong, Kabupaten Aceh Utara, Provinsi Nanggroe Aceh Darussalam. Berikut dokumentasi pada kilang padi mutiara. </h4>
    <br>
    <div class="row col-md-offset-2">
      <div class="col-sm-2">
        <img class="myImages" onclick="onClick(this)" id="myImg" alt="" src="img/1.jpeg" width="130" height="160">

      </div>
      <div class="col-sm-2">
        <img class="myImages" onclick="onClick(this)" id="myImg" alt="" src="img/2.jpeg" name="aboutme" width="130" height="160">

      </div>
      <div class="col-sm-2">
        <img class="myImages" onclick="onClick(this)" id="myImg" alt="" src="img/3.jpeg" name="aboutme" width="130" height="160">

      </div>
      <div class="col-sm-2">
        <img class="myImages" onclick="onClick(this)" id="myImg" alt="" src="img/5.jpeg" name="aboutme" width="130" height="160">

      </div>
      <div class="col-sm-2">
        <img class="myImages" onclick="onClick(this)" id="myImg" alt="" src="img/7.jpeg" name="aboutme" width="130" height="160">

      </div>

    </div>
  </div>

  </div>
  <div id="" class="container-fluid bg-w text-center">
    <h3>Kilang Padi Mandiri</h3>
    <h4 style="text-align: justify">Penelitian pada kilang padi mandiri bertempat di Tanjong Mesjid, Kecamatan Samudera, Kabupaten Aceh Utara, Provinsi Nanggroe Aceh Darussalam.</h4>
    <br>
    <div class="row col-md-offset-5">
      <div class="col-sm-2">
        <img class="myImages" onclick="onClick(this)" id="myImg" alt="" src="img/4.jpeg" width="130" height="160">

      </div>

    </div>
  </div>

  <div id="sistem" class="text-center">
    <div class="container-fluid bg-grey">

      <h2>SISTEM PEMILIHAN KUALITAS BERAS</h2>
      <div class="panel bg-grey">
        <div class="panel-heading">
          <center>Kualitas Beras Terbaik</center>
        </div>
        <div class="panel-body">
          <div class="col-sm-10">
            <div class="container">
              <div class="tab">
                <button class="tablinks active" onclick="openCity(event, 'data')">Pilihan Terbaik</button>
              </div>




              <div id="data" class="tabcontent" style="display: block;">
                <div class="panel panel-success">

                  <div class="panel-heading">
                    <center>Pilihan Terbaik.</center>
                  </div>
                  <center>
                    <?php

                    $alt = get_alternatif();
                    $alt_name = get_alt_name();
                    end($alt_name);
                    $arl2 = key($alt_name) + 1; //new
                    $kep = get_kepentingan();
                    $cb = get_costbenefit();
                    $k = jml_kriteria();
                    $a = jml_alternatif();
                    $tkep = 0;
                    $tbkep = 0;

                    for ($i = 0; $i < $k; $i++) {
                      $tkep = $tkep + $kep[$i];
                    }
                    for ($i = 0; $i < $k; $i++) {
                      $bkep[$i] = ($kep[$i] / $tkep);
                      $tbkep = $tbkep + $bkep[$i];
                    }
                    for ($i = 0; $i < $k; $i++) {
                      if ($cb[$i] == "cost") {
                        $pangkat[$i] = (-1) * $bkep[$i];
                      } else {
                        $pangkat[$i] = $bkep[$i];
                      }
                    }
                    for ($i = 0; $i < $a; $i++) {
                      for ($j = 0; $j < $k; $j++) {
                        $s[$i][$j] = pow(($alt[$i][$j]), $pangkat[$j]);
                      }
                      $ss[$i] = $s[$i][0] * $s[$i][1] * $s[$i][2] * $s[$i][3] * $s[$i][4];
                    }
                    // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> vektor S <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //
                    echo "<b>Hasil Akhir</b></br>";
                    echo "<table class='table table-striped table-bordered table-hover'>";
                    echo "<thead><tr><th>Alternatif</th><th>V</th></tr></thead>";
                    $total = 0;
                    for ($i = 0; $i < $a; $i++) {
                      $total = $total + $ss[$i];
                    }
                    for ($i = 0; $i < $a; $i++) {
                      echo "<tr><td><b>" . $alt_name[$i] . "</b></td>";
                      $v[$i] = round($ss[$i] / $total, 6);
                      echo "<td>" . $v[$i] . "</td></tr>";
                    }
                    echo "</table><hr>";
                    // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> vektor S <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //
                    uasort($v, 'cmp');
                    for ($i = 0; $i < $arl2; $i++) { //new for 8 lines below
                      if ($i == 0)
                        echo "<div class='alert alert-dismissible alert-success'><b><i>Dari tabel tersebut dapat disimpulkan bahwa " . $alt_name[array_search((end($v)), $v)] . " mempunyai hasil paling tinggi, yaitu " . current($v);
                      elseif ($i == ($arl2 - 1))
                        echo "</br>Dan terakhir " . $alt_name[array_search((prev($v)), $v)] . " dengan nilai " . current($v) . ".</i></b></div>";
                      else
                        echo "</br>Lalu diikuti dengan " . $alt_name[array_search((prev($v)), $v)] . " dengan nilai " . current($v);
                    }

                    function jml_kriteria()
                    {
                      include 'configdb.php';
                      $kriteria = $mysqli->query("select * from kriteria");
                      return $kriteria->num_rows;
                    }

                    function jml_alternatif()
                    {
                      include 'configdb.php';
                      $alternatif = $mysqli->query("select * from alternatif");
                      return $alternatif->num_rows;
                    }

                    function get_kepentingan()
                    {
                      include 'configdb.php';
                      $kepentingan = $mysqli->query("select * from kriteria");
                      if (!$kepentingan) {
                        echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
                        exit();
                      }
                      $i = 0;
                      while ($row = $kepentingan->fetch_assoc()) {
                        @$kep[$i] = $row["kepentingan"];
                        $i++;
                      }
                      return $kep;
                    }

                    function get_costbenefit()
                    {
                      include 'configdb.php';
                      $costbenefit = $mysqli->query("select * from kriteria");
                      if (!$costbenefit) {
                        echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
                        exit();
                      }
                      $i = 0;
                      while ($row = $costbenefit->fetch_assoc()) {
                        @$cb[$i] = $row["cost_benefit"];
                        $i++;
                      }
                      return $cb;
                    }

                    function get_alt_name()
                    {
                      include 'configdb.php';
                      $alternatif = $mysqli->query("select * from alternatif");
                      if (!$alternatif) {
                        echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
                        exit();
                      }
                      $i = 0;
                      while ($row = $alternatif->fetch_assoc()) {
                        @$alt[$i] = $row["alternatif"];
                        $i++;
                      }
                      return $alt;
                    }

                    function get_alternatif()
                    {
                      include 'configdb.php';
                      $alternatif = $mysqli->query("select * from alternatif");
                      if (!$alternatif) {
                        echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
                        exit();
                      }
                      $i = 0;
                      while ($row = $alternatif->fetch_assoc()) {
                        @$alt[$i][0] = $row["k1"];
                        @$alt[$i][1] = $row["k2"];
                        @$alt[$i][2] = $row["k3"];
                        @$alt[$i][3] = $row["k4"];
                        @$alt[$i][4] = $row["k5"];
                        $i++;
                      }
                      return $alt;
                    }

                    function cmp($a, $b)
                    {
                      if ($a == $b) {
                        return 0;
                      }
                      return ($a < $b) ? -1 : 1;
                    }

                    function print_ar(array $x)
                    {  //just for print array
                      echo "<pre>";
                      print_r($x);
                      echo "</pre></br>";
                    }
                    ?>
                  </center>

                </div>
              </div>
            </div>
          </div>
        </div> <!-- /page wrapper -->
      </div> <!-- /container -->
    </div> <!-- /wrapper -->
  </div>
  </div>


  <div id="jenis" class="container-fluid bg-w text-center">
    <h2>JENIS BERAS</h2>
    <h4>Jenis - Jenis Produk Yang Tersedia :</h4>
    <br>
    <div id="Carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">

        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
        <li data-target="#Carousel" data-slide-to="1"></li>

      </ol>

      <div class="row">
        <div class="carousel-inner">
          <div class="item active" id="carousel-bg">
            <div class="col-sm-2">
            </div>


            <div class="col-sm-2">
              <img class="myImages" onclick="onClick(this)" id="myImg" alt="	Beras cap garuda emas bentuknya patah, bersih, dan berwarna putih kekuningan dari segi kepulenan beras cap garuda emas ini cukup pulen harga kisaran lebih dari 10.000 dan kurang dari 12.000" src="img/b.jpeg" width="130" height="160">
              <h4>Cap Garuda Emas</h4>
            </div>
            <div class="col-sm-2">
              <img class="myImages" onclick="onClick(this)" id="myImg" alt="Beras ramos mutiara wangi bentuknya patah, bersih, dan berwarna putih kekuningan dari segi kepulenan beras ramos mutiara wangi ini pulen harga kisaran lebih dari 12.000 dan kurang dari 15.000" src="img/c.jpeg" name="aboutme" width="130" height="160">
              <h4>Ramos Mutiara Wangi</h4>
            </div>
            <div class="col-sm-2">
              <img class="myImages" onclick="onClick(this)" id="myImg" alt="Beras ramos mutiara pase bentuknya utuh, bersih, dan berwarna putih kekuningan dari segi kepulenan beras ramos mutiara pase ini pulen harga kisaran lebih dari 12.000 dan kurang dari 15.000" src="img/d.jpeg" name="aboutme" width="130" height="160">
              <h4>Ramos Mutiara Pase</h4>
            </div>
            <div class="col-sm-2">
              <img class="myImages" onclick="onClick(this)" id="myImg" alt="Beras ramos mutiara special bentuknya utuh, bersih, dan berwarna putih dari segi kepulenan beras ramos mutiara special ini pulen harga kisaran lebih dari 12.000 dan kurang dari 15.000" src="img/e.jpeg" name="aboutme" width="130" height="160">
              <h4>Ramos Mutiara Special</h4>
            </div>

          </div>

          <div class="item" id="carousel-bg">

            <div class="col-sm-2">
            </div>
            <div class="col-sm-2">
              <img class="myImages" onclick="onClick(this)" id="myImg" alt="Beras cap ayam merah bentuknya patah, kurang bersih, dan berwarna putih kekuningan dari segi kepulenan beras cap ayam merah ini cukup pulen harga kisaran lebih dari 10.000 dan kurang dari 12.000" src="img/a.jpeg" width="130" height="160">
              <h4>Cap Ayam<br> Merah</h4>
            </div>
            <div class="col-sm-2">
              <img class="myImages" onclick="onClick(this)" id="myImg" alt="	Beras hekagata bentuknya utuh, bersih, dan berwarna putih kekuningan dari segi kepulenan beras hekagata ini cukup pulen harga kisaran lebih dari 10.000 dan kurang dari 12.000" src="img/r.jpeg" name="aboutme" width="130" height="160">
              <h4>Hekagata</h4>
            </div>

            <div class="col-sm-2">
              <img class="myImages" onclick="onClick(this)" id="myImg" alt="Beras rumoh aceh bentuknya utuh, bersih, dan berwarna putih dari segi kepulenan beras rumoh aceh ini sangat pulen harga kisaran lebih dari 15.000" src="img/h.jpg" width="130" height="160">
              <h4>Rumoh Aceh</h4>
            </div>

            <div class="col-sm-2">
              <img class="myImages" onclick="onClick(this)" id="myImg" alt="Beras rajawali bentuknya patah, kurang bersih, dan berwarna kuning muda dari segi kepulenan beras rajawali ini cukup pulen harga kisaran lebih dari 10.000 dan kurang dari 12.000" src="img/g.jpg" width="130" height="160">
              <h4>Rajawali</h4>
            </div>



          </div>



        </div>
      </div>
      <a class="left carousel-control" href="#Carousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#Carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
      <br>
    </div>
  </div>
  </div>


  <div id="contact" class="container-fluid bg-grey">
    <?php
    if (isset($_POST['add'])) {
      $nama = $_POST['nama'];
      $email   = $_POST['email'];
      $komen    = $_POST['komen'];

      $id = 'id';
      $cek = mysqli_query($mysqli, "SELECT * FROM ulasan WHERE id='$id'");
      if (mysqli_num_rows($cek) == 0) {
        $insert = mysqli_query($mysqli, "INSERT INTO ulasan ( nama, email , komen) VALUES('$nama','$email','$komen')") or die(mysqli_error($mysqli));

        if ($insert) {
          echo '<div class="alert alert-success alert-dismissable fade in""><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Di Simpan.</div>';
        } else {
          echo '<div class="alert alert-danger alert-dismissable fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Gagal Di simpan! <a href="data.php"><- Kembali</a></div>';
        }
      }
    }
    ?>
    <h2 class="text-center">Ulasan</h2>
    <form action="#contact" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-sm-5">
          <p>Berikan ulasan terhadap website kami.</p>
          <p>Setiap ulasan merupakan bahan evaluasi untuk pengembangan website.</p>
          <p></p>
          <p></p>
        </div>
        <div class="col-sm-7 slideanim">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="nama" name="nama" placeholder="Nama" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
          </div>
          <textarea class="form-control" id="komen" name="komen" placeholder="Ulasan" rows="5"></textarea><br>
          <div class="row">
            <div class="col-sm-12 form-group">
              <button class="btn btn-sm btn-primary" name="add" value="Simpan" type="submit">Kirim</button>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>

  <div class="footer-basic">
    <footer>
      <ul class="list-inline">
        <li class="list-inline-item"><span class="glyphicon glyphicon-map-marker"></span><a> Bukit Indah, Lhokseumawe</a></li>
        <li class="list-inline-item"><span class="glyphicon glyphicon-phone"></span><a> +6280000000000</a></li>
        <li class="list-inline-item"><span class="glyphicon glyphicon-envelope"></span><a> rikaaulia@gmail.com</a></li>
      </ul>
      <p class="copyright">SPKB © 2022</p>
    </footer>
  </div>

  <script>
    $(document).ready(function() {
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

        if (this.hash !== "") {

          event.preventDefault();


          var hash = this.hash;

          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function() {

            window.location.hash = hash;
          });
        }
      });

      $(window).scroll(function() {
        $(".slideanim").each(function() {
          var pos = $(this).offset().top;

          var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slides");
          }
        });
      });
    })
  </script>
  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>
  <script>
    var btn = $('#button');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: 0
      }, '300');
    });
  </script>
  <script>
    // create references to the modal...
    var modal = document.getElementById('myModal1');
    // to all images -- note I'm using a class!
    var images = document.getElementsByClassName('myImages');
    // the image in the modal
    var modalImg = document.getElementById("img01");
    // and the caption in the modal
    var captionText = document.getElementById("caption");

    // Go through all of the images with our custom class
    for (var i = 0; i < images.length; i++) {
      var img = images[i];
      // and attach our click listener for this image.
      img.onclick = function(evt) {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
      }
    }

    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
</body>