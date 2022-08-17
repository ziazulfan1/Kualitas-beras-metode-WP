<?php
include("headeruser.php");
include("configdb.php");
?>
<?php
include_once('cekuser.php');
?>

<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row" id="main">
            <div class="col-sm-12 col-md-12 well" id="content">

                <div class="page-breadcrumb">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8 align-self-center">
                            <h3 class="page-title mb-0 p-0">Data User</h3>
                            <div class="d-flex align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="indexuser.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data User</li>
                                    </ol>
                                </nav>
                                <div class="col-md-6 col-4 align-self-center">
                                    <div class="text-end upgrade-btn">
                                        <a href="add-user.php" class="btn btn-primary d-none d-md-inline-block text-white" target="">Tambah Data
                                        </a>
                                    </div>
                                </div>
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
                                        $user = $mysqli->query("select * from user");
                                        if (!$user) {
                                            echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
                                            exit();
                                        }
                                        $i = 0;
                                        ?>
                                        <div class="table-responsive">
                                            <table id="example" class="table user-table" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th width="30px">No.</th>
                                                        <th>Nama</th>
                                                        <th>Username</th>
                                                        <th>Email</th>
                                                        <th width="150px">Opsi</th>
                                                    </tr>
                                                </thead>



                                                <tbody>
                                                    <?php
                                                    $i = 1;
                                                    while ($row = $user->fetch_assoc()) {
                                                        echo '<tr>';
                                                        echo '<td>' . $i++ . '</td>';
                                                        echo '<td>' . $row["nama"] . '</td>';
                                                        echo '<td>' . $row["username"] . '</td>';
                                                        echo '<td>' . $row["email"] . '</td>';
                                                        echo '<td><!--a href="#"><i class="fa fa-search"></i></a-->';
                                                    ?>
                                                        <a href="edit-user.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                                        <a href="del-u.php?id=<?php echo $row['id']; ?>" onClick="return confirm('Menghapus data ke-<?php echo $i - 1; ?> Data User <?php echo $row['nama']; ?> ?');" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</a></td>

                                                    <?php
                                                        echo '</tr>';
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div>
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