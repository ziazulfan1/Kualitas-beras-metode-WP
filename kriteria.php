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
							<h3 class="page-title mb-0 p-0">Data Kriteria</h3>
							<div class="d-flex align-items-center">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="indexuser.php">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Data Kriteria</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>

				<div class="container-fluid">

					<div class="row">
						<div class="col-12">
							<div class="panel panel-success">
								<div class="panel-heading"></div>
								<?php
								$kriteria = $mysqli->query("select * from kriteria");
								if (!$kriteria) {
									echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
									exit();
								}
								$i = 0;
								?>
								<div class="panel-body table-responsive">
									<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th width="30px">No.</th>
												<th>Kriteria</th>
												<th>Kepentingan</th>
												<th>Cost / Benefit</th>
												<th width="150px">Opsi</th>
											</tr>
										</thead>



										<tbody>
											<?php
											$i = 1;
											while ($row = $kriteria->fetch_assoc()) {
												echo '<tr>';
												echo '<td>' . $i++ . '</td>';
												echo '<td>' . ucwords($row["kriteria"]) . '</td>';
												echo '<td>' . $row["kepentingan"] . '</td>';
												echo '<td class="text-uppercase">' . $row["cost_benefit"] . '</td>';
												echo '<td><!--a href="#"><i class="fa fa-search"></i></a-->';
											?>
												<a href="edit-kriteria.php?id=<?php echo $row["id_kriteria"]; ?>" class="btn btn-primary btn-sm" ><i class="fa fa-pencil"></i> Edit</a>
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