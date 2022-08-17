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
                            <h3 class="page-title mb-0 p-0">Edit Data Produk</h3>
                            <div class="d-flex align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="indexuser.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="produk.php">Data Produk</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Data Produk</li>
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

                                if (isset($_POST['update'])) {

                                    $nama_produk = $_POST['nama_produk'];
                                    $deskripsi = $_POST['deskripsi'];
                                    $foto    = $_FILES['file']['name'];
                                    $lokasi_foto = $_FILES['file']['tmp_name'];
                                    $folder = "fotos/$foto";

                                    if (move_uploaded_file($lokasi_foto, "$folder"));

                                    $result = $mysqli->query("UPDATE produk SET `nama_produk` = '" . $nama_produk . "', `deskripsi` = '" . $deskripsi . "', `foto` = '" . $foto . "' WHERE `id_produk` = " . $_GET['id_produk'] . ";");
                                    if (!$result) {
                                        echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
                                        exit();
                                    }
                                    if ($result) {
                                        echo '<div class="alert alert-success alert-dismissable fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Di Simpan.</div>';
                                    } else {
                                        echo '<div class="alert alert-danger alert-dismissable fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Gagal Di simpan! <a href="index.php"><- Kembali</a></div>';
                                    }
                                }

                                ?>
                                <?php
                                $result = $mysqli->query("select * from produk where id_produk = " . $_GET['id_produk'] . "");
                                if (!$result) {
                                    echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
                                    exit();
                                }
                                while ($row = $result->fetch_assoc()) {
                                ?>
                                    <form role="form" action="" method="post" enctype="multipart/form-data">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="nama_produk">Nama Produk</label>
                                                <input type="text" id="nama_produk" class="form-control" name="nama_produk" value="<?php echo $row["nama_produk"]; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi</label>
                                                <textarea name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi Produk *"><?php echo $row["deskripsi"]; ?></textarea required>
                                        </div>
                                        <div class="form-group">
          <label for="upload">Upload Foto Beras</label>
        <input type="file" name="file"  id="file" class="form-control" value="" required><?php echo $row["foto"]; ?>
        </div>
        <hr>
                                                </div>

                                                <div class="box-footer">
														<button type="reset" class="btn btn-info">Reset</button>
														<a href="produk.php" type="cancel" class="btn btn-warning">Batal</a>
														<button type="submit" name="update" class="btn btn-primary">Tambahkan</button>
													</div>
                                                    <?php
                                                }
                                                    ?>