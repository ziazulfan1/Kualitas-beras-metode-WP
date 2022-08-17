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
							<h3 class="page-title mb-0 p-0">Perhitungan</h3>
							<div class="d-flex align-items-center">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="indexuser.php">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Perhitungan</li>
									</ol>
									<div class="col-md-6 col-4 align-self-center">
										<div class="text-end upgrade-btn">
											<a href="pdfperhitungan.php" class="btn btn-danger d-none d-md-inline-block text-white" target="">Export PDF
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
										<div class="panel-body">

											<center>
												<?php
												echo "<b>Matrix Alternatif - Kriteria</b></br>";

												$alt = get_alternatif();
												$alt_name = get_alt_name();
												end($alt_name);
												$arl2 = key($alt_name) + 1; //new
												$kep = get_kepentingan();
												$cb = get_costbenefit();
												$k = jml_kriteria();
												$a = jml_alternatif();
												$tkep = 0;
												$tbkep = 0;

												// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> matrix alternatif/kriteria <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //
												echo "<table class='table table-striped table-bordered table-hover'>";
												echo "<thead><tr><th>Alternatif / Kriteria</th><th>C1</th><th>C2</th><th>C3</th><th>C4</th><th>C5</th></tr></thead>";
												for ($i = 0; $i < $a; $i++) {
													echo "<tr><td><b>A" . ($i + 1) . " (" . $alt_name[$i] . ")</b></td>";
													for ($j = 0; $j < $k; $j++) {
														echo "<td>" . $alt[$i][$j] . "</td>";
													}
													echo "</tr>";
												}
												echo "</table><hr>";
												// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> bobot kepentingan <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //
												echo "<b>Perhitungan Bobot Kepentingan</b></br>";
												echo "<table class='table table-striped table-bordered table-hover'>";
												echo "<thead><tr><th></th><th>C1</th><th>C2</th><th>C3</th><th>C4</th><th>C5</th><th>Jumlah</th></tr></thead>";
												echo "<tr><td><b>Kepentingan</b></td>";
												for ($i = 0; $i < $k; $i++) {
													$tkep = $tkep + $kep[$i];
													echo "<td>" . $kep[$i] . "</td>";
												}
												echo "<td>" . $tkep . "</td></tr>";
												echo "<tr><td><b>Bobot Kepentingan</b></td>";
												for ($i = 0; $i < $k; $i++) {
													$bkep[$i] = ($kep[$i] / $tkep);
													$tbkep = $tbkep + $bkep[$i];
													echo "<td>" . round($bkep[$i], 6) . "</td>";
												}
												echo "<td>" . $tbkep . "</td></tr>";
												echo "</table><hr>";
												// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> pangkat <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //
												echo "<b>Perhitungan Pangkat</b></br>";
												echo "<table class='table table-striped table-bordered table-hover'>";
												echo "<thead><tr><th></th><th>C1</th><th>C2</th><th>C3</th><th>C4</th><th>C5</th></tr></thead>";
												echo "<tr><td><b>Cost/Benefit</b></td>";
												for ($i = 0; $i < $k; $i++) {
													echo "<td>" . ucwords($cb[$i]) . "</td>";
												}
												echo "</tr>";
												echo "<tr><td><b>Pangkat</b></td>";
												for ($i = 0; $i < $k; $i++) {
													if ($cb[$i] == "cost") {
														$pangkat[$i] = (-1) * $bkep[$i];
														echo "<td>" . round($pangkat[$i], 6) . "</td>";
													} else {
														$pangkat[$i] = $bkep[$i];
														echo "<td>" . round($pangkat[$i], 6) . "</td>";
													}
												}
												echo "</tr>";
												echo "</table><hr>";
												// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> vektor S <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //
												echo "<b>Perhitungan Nilai S</b></br>";
												echo "<table class='table table-striped table-bordered table-hover'>";
												echo "<thead><tr><th>Alternatif</th><th>S</th></tr></thead>";
												for ($i = 0; $i < $a; $i++) {
													echo "<tr><td><b>A" . ($i + 1) . " (" . $alt_name[$i] . ")</b></td>";
													for ($j = 0; $j < $k; $j++) {
														$s[$i][$j] = pow(($alt[$i][$j]), $pangkat[$j]);
													}
													$ss[$i] = $s[$i][0] * $s[$i][1] * $s[$i][2] * $s[$i][3] * $s[$i][4];
													echo "<td>" . round($ss[$i], 6) . "</td></tr>";
												}
												echo "</table><hr>";
												// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> vektor S <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //
												echo "<b>Hasil Akhir</b></br>";
												echo "<table class='table table-striped table-bordered table-hover'>";
												echo "<thead><tr><th>Alternatif</th><th>V</th></tr></thead>";
												$total = 0;
												for ($i = 0; $i < $a; $i++) {
													$total = $total + $ss[$i];
												}
												for ($i = 0; $i < $a; $i++) {
													echo "<tr><td><b>" . $alt_name[$i] . "</b></td>";
													$v[$i] = round($ss[$i] / $total, 6);
													echo "<td>" . $v[$i] . "</td></tr>";
												}
												echo "</table><hr>";
												// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> vektor S <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //
												uasort($v, 'cmp');
												for ($i = 0; $i < $arl2; $i++) { //new for 8 lines below
													if ($i == 0)
														echo "<div class='alert alert-dismissible alert-success'><b><i>Dari tabel tersebut dapat disimpulkan bahwa " . $alt_name[array_search((end($v)), $v)] . " mempunyai hasil paling tinggi, yaitu " . current($v);
													elseif ($i == ($arl2 - 1))
														echo "</br>Dan terakhir " . $alt_name[array_search((prev($v)), $v)] . " dengan nilai " . current($v) . ".</i></b></div>";
													else
														echo "</br>Lalu diikuti dengan " . $alt_name[array_search((prev($v)), $v)] . " dengan nilai " . current($v);
												}

												function jml_kriteria()
												{
													include 'configdb.php';
													$kriteria = $mysqli->query("select * from kriteria");
													return $kriteria->num_rows;
												}

												function jml_alternatif()
												{
													include 'configdb.php';
													$alternatif = $mysqli->query("select * from alternatif");
													return $alternatif->num_rows;
												}

												function get_kepentingan()
												{
													include 'configdb.php';
													$kepentingan = $mysqli->query("select * from kriteria");
													if (!$kepentingan) {
														echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
														exit();
													}
													$i = 0;
													while ($row = $kepentingan->fetch_assoc()) {
														@$kep[$i] = $row["kepentingan"];
														$i++;
													}
													return $kep;
												}

												function get_costbenefit()
												{
													include 'configdb.php';
													$costbenefit = $mysqli->query("select * from kriteria");
													if (!$costbenefit) {
														echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
														exit();
													}
													$i = 0;
													while ($row = $costbenefit->fetch_assoc()) {
														@$cb[$i] = $row["cost_benefit"];
														$i++;
													}
													return $cb;
												}

												function get_alt_name()
												{
													include 'configdb.php';
													$alternatif = $mysqli->query("select * from alternatif");
													if (!$alternatif) {
														echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
														exit();
													}
													$i = 0;
													while ($row = $alternatif->fetch_assoc()) {
														@$alt[$i] = $row["alternatif"];
														$i++;
													}
													return $alt;
												}

												function get_alternatif()
												{
													include 'configdb.php';
													$alternatif = $mysqli->query("select * from alternatif");
													if (!$alternatif) {
														echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
														exit();
													}
													$i = 0;
													while ($row = $alternatif->fetch_assoc()) {
														@$alt[$i][0] = $row["k1"];
														@$alt[$i][1] = $row["k2"];
														@$alt[$i][2] = $row["k3"];
														@$alt[$i][3] = $row["k4"];
														@$alt[$i][4] = $row["k5"];
														$i++;
													}
													return $alt;
												}

												function cmp($a, $b)
												{
													if ($a == $b) {
														return 0;
													}
													return ($a < $b) ? -1 : 1;
												}

												function print_ar(array $x)
												{
													echo "<pre>";
													print_r($x);
													echo "</pre></br>";
												}
												?>
											</center>
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