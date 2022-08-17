<?php
include('configdb.php');
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	foreach ($_POST as $id_kriteria => $kepentingan) {
		$result = $mysqli->query("UPDATE kriteria SET kepentingan = $kepentingan WHERE id_kriteria=$id_kriteria;");
		if (!$result) {
			echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
			exit();
		} else {
			header('Location: index.php#aspirasi');
		}
	}
}
