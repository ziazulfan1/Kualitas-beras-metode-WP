<?php
include('configdb.php');

$result = $mysqli->query("delete from user where id = " . $_GET['id'] . ";");
if (!$result) {
    echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
    exit();
} else {
    header('Location: datauser.php');
}
