<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "phptest";
$koneksi = mysqli_connect($servername, $username, $password,$db);
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}
?>