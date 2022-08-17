<?php
include('configdb.php');

$result = $mysqli->query("delete from produk where id_produk = " . $_GET['id_produk'] . ";");
if (!$result) {
	echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
	exit();
} else {
	header('Location: produk.php');
}
