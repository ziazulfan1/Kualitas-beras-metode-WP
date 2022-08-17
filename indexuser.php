<?php
include("headeruser.php");
include("configdb.php");
?>
<?php
include_once('cekuser.php');
?>
<style>
	<?php
	$data_kriteria = mysqli_query($mysqli, "SELECT * FROM kriteria");
	$data_alt = mysqli_query($mysqli, "SELECT * FROM alternatif");
	$data_produk = mysqli_query($mysqli, "SELECT * FROM produk");
	$data_admin = mysqli_query($mysqli, "SELECT * FROM user");
	$data_ulasan = mysqli_query($mysqli, "SELECT * FROM ulasan");

	$jumlah_kriteria = mysqli_num_rows($data_kriteria);
	$jumlah_alt = mysqli_num_rows($data_alt);
	$jumlah_produk = mysqli_num_rows($data_produk);
	$jumlah_admin = mysqli_num_rows($data_admin);
	$jumlah_ulasan = mysqli_num_rows($data_ulasan);
	?>.circle-tile {
		margin-bottom: 15px;
		text-align: center;
	}

	.circle-tile-heading {
		border: 3px solid rgba(255, 255, 255, 0.3);
		border-radius: 100%;
		color: #FFFFFF;
		height: 80px;
		margin: 0 auto -40px;
		position: relative;
		transition: all 0.3s ease-in-out 0s;
		width: 80px;
	}

	.circle-tile-heading .fa {
		line-height: 80px;
	}

	.circle-tile-content {
		padding-top: 50px;
	}

	.circle-tile-number {
		font-size: 26px;
		font-weight: 700;
		line-height: 1;
		padding: 5px 0 15px;
	}

	.circle-tile-description {
		text-transform: uppercase;
	}

	.circle-tile-footer {
		background-color: rgba(0, 0, 0, 0.1);
		color: rgba(255, 255, 255, 0.5);
		display: block;
		padding: 5px;
		transition: all 0.3s ease-in-out 0s;
	}

	.circle-tile-footer:hover {
		background-color: rgba(0, 0, 0, 0.2);
		color: rgba(255, 255, 255, 0.5);
		text-decoration: none;
	}

	.circle-tile-heading.dark-blue:hover {
		background-color: #2E4154;
	}

	.circle-tile-heading.green:hover {
		background-color: #138F77;
	}

	.circle-tile-heading.orange:hover {
		background-color: #DA8C10;
	}

	.circle-tile-heading.blue:hover {
		background-color: #2473A6;
	}

	.circle-tile-heading.red:hover {
		background-color: #CF4435;
	}

	.circle-tile-heading.purple:hover {
		background-color: #7F3D9B;
	}

	.tile-img {
		text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.9);
	}

	.dark-blue {
		background-color: #34495E;
	}

	.green {
		background-color: #16A085;
	}

	.blue {
		background-color: #2980B9;
	}

	.orange {
		background-color: #F39C12;
	}

	.red {
		background-color: #E74C3C;
	}

	.purple {
		background-color: #8E44AD;
	}

	.dark-gray {
		background-color: #7F8C8D;
	}

	.gray {
		background-color: #95A5A6;
	}

	.light-gray {
		background-color: #BDC3C7;
	}

	.yellow {
		background-color: #F1C40F;
	}

	.text-dark-blue {
		color: #34495E;
	}

	.text-green {
		color: #16A085;
	}

	.text-blue {
		color: #2980B9;
	}

	.text-orange {
		color: #F39C12;
	}

	.text-red {
		color: #E74C3C;
	}

	.text-purple {
		color: #8E44AD;
	}

	.text-faded {
		color: rgba(255, 255, 255, 0.7);
	}

	a.list-group-item {
		height: auto;
		min-height: 100px;
	}

	a.list-group-item.active small {
		color: #fff;
	}
</style>
<div id="page-wrapper">
	<div class="container-fluid">

		<center>
			<div class="row" id="main">
				<div class="col-sm-12 col-md-12 well" id="content">
					<h1>Dashboard</h1>
					<h2>Welcome <?php echo $_SESSION['nama']; ?></h2>
					<br>
					<div class="col-lg-2 col-sm-6">
						<div class="circle-tile ">
							<a href="#">
								<div class="circle-tile-heading dark-blue"><i class="fa fa-table fa-fw fa-3x"></i></div>
							</a>
							<div class="circle-tile-content dark-blue">
								<div class="circle-tile-description text-faded"> Data Kriteria</div>
								<div class="circle-tile-number text-faded "><?php echo $jumlah_kriteria; ?></div>
								<a class="circle-tile-footer" href="kriteria.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-sm-6">
						<div class="circle-tile ">
							<a href="#">
								<div class="circle-tile-heading blue"><i class="fa fa-product-hunt fa-fw fa-3x"></i></div>
							</a>
							<div class="circle-tile-content blue">
								<div class="circle-tile-description text-faded"> Data Alternatif</div>
								<div class="circle-tile-number text-faded "><?php echo $jumlah_alt; ?></div>
								<a class="circle-tile-footer" href="alternatif.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-sm-6">
						<div class="circle-tile ">
							<a href="#">
								<div class="circle-tile-heading green"><i class="fa fa-cube fa-fw fa-3x"></i></div>
							</a>
							<div class="circle-tile-content green">
								<div class="circle-tile-description text-faded"> Data Produk</div>
								<div class="circle-tile-number text-faded "><?php echo $jumlah_produk; ?></div>
								<a class="circle-tile-footer" href="produk.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-sm-6">
						<div class="circle-tile ">
							<a href="#">
								<div class="circle-tile-heading red"><i class="fa fa-calculator fa-fw fa-3x"></i></div>
							</a>
							<div class="circle-tile-content red">
								<div class="circle-tile-description text-faded"> Perhitungan</div>
								<div class="circle-tile-number text-faded "><?php echo $jumlah_alt; ?></div>
								<a class="circle-tile-footer" href="perhitungan.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-sm-6">
						<div class="circle-tile ">
							<a href="#">
								<div class="circle-tile-heading yellow"><i class="fa fa-user fa-fw fa-3x"></i></div>
							</a>
							<div class="circle-tile-content yellow">
								<div class="circle-tile-description text-faded"> Data Admin</div>
								<div class="circle-tile-number text-faded "><?php echo $jumlah_admin; ?></div>
								<a class="circle-tile-footer" href="datauser.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-sm-6">
						<div class="circle-tile ">
							<a href="#">
								<div class="circle-tile-heading dark-gray"><i class="fa fa-users fa-fw fa-3x"></i></div>
							</a>
							<div class="circle-tile-content dark-gray">
								<div class="circle-tile-description text-faded"> Data Ulasan</div>
								<div class="circle-tile-number text-faded "><?php echo $jumlah_ulasan; ?></div>
								<a class="circle-tile-footer" href="ulasan.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>

					</div>
					
				</div>
			</div>
		</center>
		<?php
		$ulasan = $mysqli->query("select * from ulasan");
		if (!$ulasan) {
			echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
			exit();
		}
		$i = 0;
		?>

		<div class="list-group">
			<?php
			$i = 1;
			while ($row = $ulasan->fetch_assoc()) {
			?>
				<a class="list-group-item">

					<div class="media col-md-2">

						<figure class="pull-left">
							<img class="media-object img-rounded img-responsive" src="img/hhh.png" width="200px" alt="placehold.it/140x100">
						</figure>
					</div>

					<div class="col-md-5">
						<h4 class="list-group-item-heading pb-3"><?php echo $row["nama"]; ?> </h4>
						<p class="list-group-item-text"> <?php echo $row["komen"]; ?></p>
					</div>
					<div class="col-md-3 pull-left">
						<div class="container col-md-12">
							<div class="row">
								<div class="col-md-12 pull-left"><i class="fa fa-check-square"></i> <?php echo $row["email"]; ?></div>
							</div>
						</div>
					</div>
				<?php
			}
				?>
				</a>

		</div>

	</div>

</div>