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
							<h3 class="page-title mb-0 p-0">Edit Data Alternatif</h3>
							<div class="d-flex align-items-center">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="indexuser.php">Home</a></li>
										<li class="breadcrumb-item"><a href="alternatif.php">Data Alternatif</a></li>
										<li class="breadcrumb-item active" aria-current="page">Edit Data Alternatif</li>
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
							$result = $mysqli->query("select * from alternatif where id_alternatif = " . $_GET['id'] . "");
							if (!$result) {
								echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
								exit();
							}
							while ($row = $result->fetch_assoc()) {
							?>
								<div class="panel-body">
									<form role="form" method="post" action="edit.php?id=<?php echo $_GET['id']; ?>">
										<div class="box-body">
											<div class="form-group">
												<label for="alternatif">Alternatif</label>
												<input type="text" class="form-control" name="alternatif" id="alternatif" value="<?php echo $row["alternatif"]; ?>" placeholder="Jenis Kayu">
											</div>
											<div class="form-group">
												<label for="k1"><?php echo ucwords($k[0]); ?></label>
												<select class="form-control" name="k1" id="k1">
													<option value='1' <?php if ($row["k1"] == '1') echo "selected" ?>>1. Menir</option>
													<option value='2' <?php if ($row["k1"] == '2') echo "selected" ?>>2. Berkerikil</option>
													<option value='3' <?php if ($row["k1"] == '3') echo "selected" ?>>3. Butir Mengapur</option>
													<option value='4' <?php if ($row["k1"] == '4') echo "selected" ?>>4. Patah</option>
													<option value='5' <?php if ($row["k1"] == '5') echo "selected" ?>>5. Utuh</option>
												</select>
											</div>
											<div class="form-group">
												<label for="k2"><?php echo ucwords($k[1]); ?></label>
												<select class="form-control" name="k2" id="k2">
													<option value='1' <?php if ($row["k2"] == '1') echo "selected" ?>>1. Tidak Bersih</option>
													<option value='2' <?php if ($row["k2"] == '2') echo "selected" ?>>2. Kurang Bersih</option>
													<option value='3' <?php if ($row["k2"] == '3') echo "selected" ?>>3. Bersih</option>
												</select>
											</div>
											<div class="form-group">
												<label for="k3"><?php echo ucwords($k[2]); ?></label>
												<select class="form-control" name="k3" id="k3">
													<option value='1' <?php if ($row["k3"] == '1') echo "selected" ?>>1. Rp.6.000,00 > Rp.8.000,00</option>
													<option value='2' <?php if ($row["k3"] == '2') echo "selected" ?>>2. Rp.8.000,00 > Rp.10.000,00</option>
													<option value='3' <?php if ($row["k3"] == '3') echo "selected" ?>>3. Rp.10.000,00 > Rp.12.000,00</option>
													<option value='4' <?php if ($row["k3"] == '4') echo "selected" ?>>4. Rp.12.000,00 > Rp.15.000,00</option>
													<option value='5' <?php if ($row["k3"] == '5') echo "selected" ?>>5. Lebih dari Rp.15.000,00</option>
												</select>
											</div>
											<div class="form-group">
												<label for="k4"><?php echo ucwords($k[3]); ?></label>
												<select class="form-control" name="k4" id="k4">
													<option value='1' <?php if ($row["k4"] == '1') echo "selected" ?>>1. Cokelat</option>
													<option value='2' <?php if ($row["k4"] == '2') echo "selected" ?>>2. Kuning Muda</option>
													<option value='3' <?php if ($row["k4"] == '3') echo "selected" ?>>3. Putih Kekuningan</option>
													<option value='4' <?php if ($row["k4"] == '4') echo "selected" ?>>4. Putih</option>
												</select>
											</div>
											<div class="form-group">
												<label for="k5"><?php echo ucwords($k[4]); ?></label>
												<select class="form-control" name="k5" id="k5">
													<option value='1' <?php if ($row["k5"] == '1') echo "selected" ?>>1. Tidak Pulen</option>
													<option value='2' <?php if ($row["k5"] == '2') echo "selected" ?>>2. Cukup Pulen</option>
													<option value='3' <?php if ($row["k5"] == '3') echo "selected" ?>>3. Pulen</option>
													<option value='4' <?php if ($row["k5"] == '4') echo "selected" ?>>4. Sangat Pulen</option>
												</select>
											</div>

										</div>

										<div class="box-footer">
											<button type="reset" class="btn btn-info">Reset</button>
											<a href="alternatif.php" type="cancel" class="btn btn-warning">Batal</a>
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