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

                <div class="container-fluid">

                    <div class="row">
                        <div class="panel panel-success col-md-6 col-md-offset-3">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <?php
                                $user = $mysqli->query("select * from user");
                                if (!$user) {
                                    echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
                                    exit();
                                }
                                $i = 0;

                                ?>
                                <form role="form" method="post" action="add-u.php">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" id="nama" class="form-control" name="nama" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" id="username" class="form-control" name="username" placeholder="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" class="form-control" name="email" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" class="form-control" name="password" placeholder="" required>
                                        </div>


                                        <div class="box-footer">
                                            <button type="reset" class="btn btn-info">Reset</button>
                                            <a href="datauser.php" type="cancel" class="btn btn-warning">Batal</a>
                                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                                        </div>
                                </form>
                            </div>
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





<script src="ui/js/jquery-1.10.2.min.js"></script>
<script src="ui/js/bootstrap.min.js"></script>
<script src="ui/js/bootswatch.js"></script>
<script src="ui/js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>