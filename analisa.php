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
							<h3 class="page-title mb-0 p-0">Analisa</h3>
							<div class="d-flex align-items-center">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="indexuser.php">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Analisa</li>
									</ol>
								</nav>
							</div>
						</div>

					</div>
				</div>

				<div class="container-fluid">

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<div class="panel-body">
										<div>
											<canvas id="canvas"></canvas>
										</div>
										<br />
										<center>
											<?php

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

											for ($i = 0; $i < $k; $i++) {
												$tkep = $tkep + $kep[$i];
											}
											for ($i = 0; $i < $k; $i++) {
												$bkep[$i] = ($kep[$i] / $tkep);
												$tbkep = $tbkep + $bkep[$i];
											}
											for ($i = 0; $i < $k; $i++) {
												if ($cb[$i] == "cost") {
													$pangkat[$i] = (-1) * $bkep[$i];
												} else {
													$pangkat[$i] = $bkep[$i];
												}
											}
											for ($i = 0; $i < $a; $i++) {
												for ($j = 0; $j < $k; $j++) {
													$s[$i][$j] = pow(($alt[$i][$j]), $pangkat[$j]);
												}
												$ss[$i] = $s[$i][0] * $s[$i][1] * $s[$i][2] * $s[$i][3] * $s[$i][4];
											}
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
											for ($i = 0; $i < $arl2; $i++) {
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
								</div>

							</div>



							<script src="ui/js/jquery-1.10.2.min.js"></script>
							<script src="ui/js/bootstrap.min.js"></script>
							<script src="ui/js/bootswatch.js"></script>
							<script src="ui/js/Chart.min.js"></script>

							<script src="ui/js/ie10-viewport-bug-workaround.js"></script>

							<script>
								var randomScalingFactor = function() {
									return Math.round(Math.random() * 100)
								};

								var barChartData = {
									labels: [
										<?php
										for ($i = 0; $i < $a; $i++) {
											echo '"' . $alt_name[$i] . '",';
										}
										?>
									],
									datasets: [{
											fillColor: "rgba(0,130,0,0.75)",
											strokeColor: "rgba(0,148,120,0.8)",
											highlightFill: "rgba(98,168,75,0.75)",
											highlightStroke: "rgba(0,97,72,1)",
											data: [
												<?php
												for ($i = 0; $i < $a; $i++) {
													echo $v[$i] . ',';
												}
												?>
											]
										},

									]

								}
								window.onload = function() {
									var ctx = document.getElementById("canvas").getContext("2d");
									window.myBar = new Chart(ctx).Bar(barChartData, {
										responsive: true
									});
								}
							</script>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>
</body>

</html>