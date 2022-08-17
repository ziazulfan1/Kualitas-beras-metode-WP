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
							<h3 class="page-title mb-0 p-0">Edit Data Kriteria</h3>
							<div class="d-flex align-items-center">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="indexuser.php">Home</a></li>
										<li class="breadcrumb-item"><a href="kriteria.php">Data Kriteria</a></li>
										<li class="breadcrumb-item active" aria-current="page">Edit Data Kriteria</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<br>


				<div class="container-fluid">

					<div class="row">

						<div class="panel panel-success col-md-6 col-md-offset-3">
							<?php
							$result = $mysqli->query("select * from kriteria where id_kriteria = " . $_GET['id'] . "");
							if (!$result) {
								echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
								exit();
							}
							while ($row = $result->fetch_assoc()) {
							?>
								<div class="panel-body">
									<form role="form" method="post" action="edit-k.php?id=<?php echo $_GET['id']; ?>">
										<div class="box-body">
											<div class="form-group">
												<label for="kriteria">Kriteria</label>
												<input type="text" class="form-control" name="kriteria" id="kriteria" value="<?php echo $row["kriteria"]; ?>" placeholder="Kriteria">
											</div>
											<div class="form-group">
												<label for="kepentingan">Nilai Kepentingan</label>
												<select class="form-control" name="kepentingan" id="kepentingan">
													<option value='1' <?php if ($row["kepentingan"] == '1') echo "selected" ?>>1 - (STP) sangat tidak penting</option>
													<option value='2' <?php if ($row["kepentingan"] == '2') echo "selected" ?>>2 - (TP) tidak penting</option>
													<option value='3' <?php if ($row["kepentingan"] == '3') echo "selected" ?>>3 - (CP) cukup penting</option>
													<option value='4' <?php if ($row["kepentingan"] == '4') echo "selected" ?>>4 - (P) penting</option>
													<option value='5' <?php if ($row["kepentingan"] == '5') echo "selected" ?>>5 - (SP) sangat penting</option>
												</select>
											</div>
											<div class="form-group">
												<label for="cost_benefit">Cost / Benefit</label>
												<select class="form-control" name="cost_benefit" id="cost_benefit">
													<option value='cost' <?php if ($row["cost_benefit"] == 'cost') echo "selected" ?>>Cost</option>
													<option value='benefit' <?php if ($row["cost_benefit"] == 'benefit') echo "selected" ?>>Benefit</option>
												</select>
											</div>
										</div>

										<div class="box-footer">
											<button type="reset" class="btn btn-info">Reset</button>
											<a href="kriteria.php" type="cancel" class="btn btn-warning">Batal</a>
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