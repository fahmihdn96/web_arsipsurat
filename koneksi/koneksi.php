<?php
$server   = "localhost:3307";
$username = "root";
$password = "";
$database = "db_arsip";

$db = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if (!$db) {
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
?>