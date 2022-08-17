<?php
include("headeruser.php");
include("configdb.php");
?>
<?php
include_once('cekuser.php');
?>
<style>
    textarea {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;

        background: #fff;
    }
</style>
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row" id="main">
            <div class="col-sm-12 col-md-12 well" id="content">

                <div class="page-breadcrumb">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8 align-self-center">
                            <h3 class="page-title mb-0 p-0">Tambah Data Produk</h3>
                            <div class="d-flex align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="indexuser.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="produk.php">Data Produk</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tambah Data Produk</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container-fluid">

                    <div class="row">

                        <div class="panel panel-success col-md-8 col-md-offset-2">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <?php

                                if (isset($_POST['add'])) {

                                    $nama_produk = $_POST['nama_produk'];
                                    $deskripsi = $_POST['deskripsi'];
                                    $foto    = $_FILES['file']['name'];
                                    $lokasi_foto = $_FILES['file']['tmp_name'];
                                    $folder = "fotos/$foto";

                                    if (move_uploaded_file($lokasi_foto, "$folder"));

                                    $cek = mysqli_query($mysqli, "SELECT * FROM produk WHERE nama_produk ='$nama_produk'");
                                    if (mysqli_num_rows($cek) == 0) {
                                        $insert = mysqli_query($mysqli, "INSERT INTO produk ( nama_produk , deskripsi,foto) VALUES('$nama_produk','$deskripsi','$foto')") or die(mysqli_error($mysqli));

                                        if ($insert) {
                                            echo '<div class="alert alert-success alert-dismissable fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Di Simpan.</div>';
                                        } else {
                                            echo '<div class="alert alert-danger alert-dismissable fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Gagal Di simpan! <a href="index.php"><- Kembali</a></div>';
                                        }
                                    }
                                }

                                ?>

                                <form role="form" action="" method="post" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="nama_produk">Nama Produk</label>
                                            <input type="text" id="nama_produk" class="form-control" name="nama_produk" placeholder="Masukkan Nama Produk Beras *" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Deskripsi</label>
                                            <textarea name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi Produk *"></textarea required>
                                        </div>
                                        <div class="form-group">
          <label for="upload">Upload Foto Beras</label>
        <input type="file" name="file"  id="file" class="form-control">
        </div>
        <hr>
                                                </div>

                                                <div class="box-footer">
														<button type="reset" class="btn btn-info">Reset</button>
														<a href="produk.php" type="cancel" class="btn btn-warning">Batal</a>
														<button type="submit" name="add" class="btn btn-primary">Tambahkan</button>
													</div>