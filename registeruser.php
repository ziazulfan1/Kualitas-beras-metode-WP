<?php
include("headeruser.php");
include("configdb.php");
?>
<style type="text/css">
  .container {
    width: 60%;
    background-color: white;
  }

  input[type=text],
  input[type=password],
  input[type=email],
  input[type=file] {
    width: 100%;
    padding: 12px;
    margin: 5px 0 15px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    background: #f1f1f1;
    box-sizing: border-box;
  }

  input[type=text]:focus,
  input[type=password]:focus,
  input[type=email]:focus,
  input[type=file]:focus {
    background-color: #ffff;
    border-radius: 4px;
  }

  select {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    background: #f1f1f1;
  }

  select:focus {
    background-color: #ffff;
    border-radius: 4px;
  }

  textarea {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    background: #f1f1f1;
  }

  textarea:focus {
    background-color: #ffff;
    border-radius: 4px;
  }

  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  .loginbtn {
    background-color: #4863A0;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }

  .loginbtn:hover {
    opacity: 1;
  }

  a {
    color: dodgerblue;
  }

  .login {
    background-color: #f1f1f1;
    text-align: center;
    padding: 16px;
    width: 100%;
  }

  #message {
    display: none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
  }

  #message p {
    padding: 10px 35px;
    font-size: 15px;
  }

  .valid {
    color: green;
  }

  .valid:before {
    position: relative;
    left: -35px;
    content: "✔";
  }

  .invalid {
    color: red;
  }

  .invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
  }
</style>
<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row" id="main">
      <div class="col-sm-12 col-md-12 well" id="content">
        <div class="page-breadcrumb">
          <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
              <h3 class="page-title mb-0 p-0">Tambah Data User</h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="indexuser.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="datauser.php">Data User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Data User</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>

        <?php

        if (isset($_POST['add'])) {
          $username = $_POST['username'];
          $password = md5($_POST['password']);
          $nama = $_POST['nama'];
          $email = $_POST['email'];
          $level = $_POST['level'];

          $cek = mysqli_query($mysqli, "SELECT * FROM user WHERE nama ='$nama'");
          if (mysqli_num_rows($cek) == 0) {
            $insert = mysqli_query($mysqli, "INSERT INTO user ( nama , username,password,email,level) VALUES('$nama','$username','$password','$email','$level')") or die(mysqli_error($mysqli));

            header('Location: datauser.php');
          }
        }

        ?>

        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

          <label for="nama">Nama</label>
          <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Kamu *" required>

          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Masukkan Username *" required>

          <label for="email">Email</label>
          <input type="text" id="email" name="email" placeholder="Masukkan Email Kamu *" required>

          <input type="hidden" class="form-control" id="level" name="level" placeholder="Password" value="1">


          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Masukkan Password *" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          <div id="message">
            <h4>Password must contain the following:</h4>
            <p id="letter" class="invalid">Termasuk <b>Huruf Besar</b></p>
            <p id="capital" class="invalid">Termasuk <b>Huruf Kecil</b></p>
            <p id="number" class="invalid">Termasuk <b>Nomor</b></p>
            <p id="length" class="invalid">Minimum <b>8 Karakter</b></p>
          </div>
          <hr>

          <div class="box-footer">
            <button type="reset" class="btn btn-info">Reset</button>
            <a href="datauser.php" type="cancel" class="btn btn-warning">Batal</a>
            <button type="submit" name="add" value="Simpan" class="btn btn-primary">Tambahkan</button>
          </div>
        </form>
      </div>
    </div>


    <script>
      var myInput = document.getElementById("password");
      var letter = document.getElementById("letter");
      var capital = document.getElementById("capital");
      var number = document.getElementById("number");
      var length = document.getElementById("length");

      myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
      }

      myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
      }

      myInput.onkeyup = function() {
        var lowerCaseLetters = /[a-z]/g;
        if (myInput.value.match(lowerCaseLetters)) {
          letter.classList.remove("invalid");
          letter.classList.add("valid");
        } else {
          letter.classList.remove("valid");
          letter.classList.add("invalid");
        }

        var upperCaseLetters = /[A-Z]/g;
        if (myInput.value.match(upperCaseLetters)) {
          capital.classList.remove("invalid");
          capital.classList.add("valid");
        } else {
          capital.classList.remove("valid");
          capital.classList.add("invalid");
        }

        var numbers = /[0-9]/g;
        if (myInput.value.match(numbers)) {
          number.classList.remove("invalid");
          number.classList.add("valid");
        } else {
          number.classList.remove("valid");
          number.classList.add("invalid");
        }

        if (myInput.value.length >= 8) {
          length.classList.remove("invalid");
          length.classList.add("valid");
        } else {
          length.classList.remove("valid");
          length.classList.add("invalid");
        }
      }
    </script>

    </html>