<?php
include('configdb.php');
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$result = $mysqli->query("UPDATE user SET `nama` = '" . $nama . "', `username` = '" . $username . "', `email` = '" . $email . "', `password` = '" . $password . "' WHERE `id` = " . $_GET['id'] . ";");
if (!$result) {
    echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
    exit();
} else {
    header('Location: datauser.php');
}
