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
							<h3 class="page-title mb-0 p-0">Tambah Data Alternatif</h3>
							<div class="d-flex align-items-center">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="indexuser.php">Home</a></li>
										<li class="breadcrumb-item"><a href="Alternatif.php">Data Alternatif</a></li>
										<li class="breadcrumb-item active" aria-current="page">Tambah Data Alternatif</li>
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
								$kriteria = $mysqli->query("select * from kriteria");
								if (!$kriteria) {
									echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
									exit();
								}
								$i = 0;
								while ($row = $kriteria->fetch_assoc()) {
									@$k[$i] = $row["kriteria"];
									$i++;
								}

								?>
								<form role="form" method="post" action="add.php">
									<div class="box-body">
										<div class="form-group">
                                            <label for="nama_produk">Nama Alternatif</label>
                                            <input type="text" id="alternatif" class="form-control" name="alternatif" placeholder="Masukkan Nama Alternatif" required>
                                        </div>
										<div class="form-group">
											<label for="k1"><?php echo ucwords($k[0]); ?></label>
											<select class="form-control" name="k1" id="k1" required>
												<option value=''>Pilih Bentuk Beras</option>
												<option value='1'>1. Menir</option>
												<option value='2'>2. Berkerikil</option>
												<option value='3'>3. Butir Mengapur</option>
												<option value='4'>4. Patah</option>
												<option value='5'>5. Utuh</option>
											</select>
										</div>

										<div class="form-group">
											<label for="k2"><?php echo ucwords($k[1]); ?></label>
											<select class="form-control" name="k2" id="k2" required>
												<option value=''>Pilih Tingkat Kebersihan</option>
												<option value='1'>1. Tidak Bersih</option>
												<option value='2'>2. Kurang Bersih</option>
												<option value='3'>3. Bersih</option>

											</select>
										</div>
										<div class="form-group">
											<label for="k3"><?php echo ucwords($k[2]); ?></label>
											<select class="form-control" name="k3" id="k3" required>
												<option value=''>Pilih Harga Beras</option>
												<option value='1'>1. Rp.6.000,00 > Rp.8.000,00</option>
												<option value='2'>2. Rp.8.000,00 > Rp.10.000,00</option>
												<option value='3'>3. Rp.10.000,00 > Rp.12.000,00</option>
												<option value='4'>4. Rp.12.000,00 > Rp.15.000,00</option>
												<option value='5'>5. Lebih dari Rp.15.000,00</option>
											</select>
										</div>
										<div class="form-group">
											<label for="k4"><?php echo ucwords($k[3]); ?></label>
											<select class="form-control" name="k4" id="k4" required>
												<option value=''>Pilih Warna Beras</option>
												<option value='1'>1. Cokelat</option>
												<option value='2'>2. Kuning Muda</option>
												<option value='3'>3. Putih Kekuningan</option>
												<option value='4'>4. Putih</option>
											</select>
										</div>
										<div class="form-group">
											<label for="k5"><?php echo ucwords($k[4]); ?></label>
											<select class="form-control" name="k5" id="k5" required>
												<option value=''>Pilih Tingkat Kepulenan</option>
												<option value='1'>1. Tidak Pulen</option>
												<option value='2'>2. Cukup Pulen</option>
												<option value='3'>3. Pulen</option>
												<option value='4'>4. Sangat Pulen</option>
											</select>
										</div>

										<div class="box-footer">
											<button type="reset" class="btn btn-info">Reset</button>
											<a href="alternatif.php" type="cancel" class="btn btn-warning">Batal</a>
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