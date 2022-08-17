<?php
include("headeruser.php");
include("configdb.php");
?>
<?php
include_once('cekuser.php');
?>

<body>
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row" id="main">
                <div class="col-sm-12 col-md-12 well" id="content">

                    <div class="page-breadcrumb">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-8 align-self-center">
                                <h3 class="page-title mb-0 p-0">Data Produk Beras</h3>
                                <div class="d-flex align-items-center">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="indexuser.php">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Data Produk Beras</li>
                                        </ol>
                                        <div class="col-md-6 col-4 align-self-center">
                                            <div class="text-end upgrade-btn">
                                                <a href="add-produk.php" class="btn btn-primary d-none d-md-inline-block text-white" target="">Tambah Data
                                                </a>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br>

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="panel panel-success">
                                            <div class="panel-heading"></div>
                                            <?php

                                            $produk = $mysqli->query("select * from produk");
                                            if (!$produk) {
                                                echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
                                                exit();
                                            }
                                            $i = 0;
                                            ?>
                                            <div class="panel-body table-responsive">

                                                <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Nama Produk</th>
                                                            <th>Foto Produk</th>
                                                            <th>Deskripsi Produk</th>
                                                            <th width="150px">Pilihan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $i = 1;
                                                        while ($row = $produk->fetch_assoc()) {
                                                            echo '<tr>';
                                                            echo '<td>' . $i++ . '</td>';
                                                            echo '<td>' . $row["nama_produk"] . '</td>';
                                                            echo '<td>' . "<img src= fotos/" . $row["foto"] . ' width=100px height="100px">' . '</td>';
                                                            echo '<td>' . $row["deskripsi"] . '</td>';
                                                            echo '<td><!--a href="#"><i class="fa fa-search"></i></a-->';
                                                        ?>
                                                            <a href="edit-produk.php?id_produk=<?php echo $row['id_produk']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                                            <a href="del-p.php?id_produk=<?php echo $row['id_produk']; ?>" onClick="return confirm('Menghapus data ke-<?php echo $i - 1; ?> Produk <?php echo $row['nama_produk']; ?> ?');" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Hapus</a></td>
                                                        <?php
                                                            echo '</tr>';
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="panel-footer text-primary">
                                                <div class="pull-right"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>



            <script src="ui/js/bootstrap.min.js"></script>
            <script src="ui/js/bootswatch.js"></script>
            <script src="ui/js/ie10-viewport-bug-workaround.js"></script>
            <script>
                $(document).ready(function() {
                    $('#example').dataTable({
                        "language": {
                            "url": "ui/css/datatables/Indonesian.json"
                        }
                    });
                });
            </script>
</body>

</html>