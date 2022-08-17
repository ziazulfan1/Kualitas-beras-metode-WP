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
                            <h3 class="page-title mb-0 p-0">Edit Data User</h3>
                            <div class="d-flex align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="indexuser.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="datauser.php">Data User</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Data User</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container-fluid">

                    <div class="row">
                        <div class="panel panel-success col-md-6 col-md-offset-3">
                            <div class="panel-heading"></div>
                            <?php
                            $result = $mysqli->query("select * from user where id = " . $_GET['id'] . "");
                            if (!$result) {
                                echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
                                exit();
                            }
                            while ($row = $result->fetch_assoc()) {
                            ?>
                                <div class="panel-body">
                                    <form role="form" method="post" action="edit-u.php?id=<?php echo $_GET['id']; ?>">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row["nama"]; ?>" placeholder="Nama">
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" name="username" id="username" value="<?php echo $row["username"]; ?>" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" value="<?php echo $row["email"]; ?>" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                            </div>
                                        </div>

                                        <div class="box-footer">
                                            <button type="reset" class="btn btn-info">Reset</button>
                                            <a href="datauser.php" type="cancel" class="btn btn-warning">Batal</a>
                                            <button type="submit" class="btn btn-primary">Proses Edit</button>
                                        </div>
                                    </form>
                                <?php
                            }
                                ?>
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





<script src="ui/js/jquery-1.10.2.min.js"></script>
<script src="ui/js/bootstrap.min.js"></script>
<script src="ui/js/bootswatch.js"></script>

<script src="ui/js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>