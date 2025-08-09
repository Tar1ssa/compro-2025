<?php
$_HOST = "localhost";
$_USERNAME = "root";
$_PASSWORD = "";
$_DATABASE = "db_belajar1_2025_3";

$koneksi = mysqli_connect(
    $_HOST,
    $_USERNAME,
    $_PASSWORD,
    $_DATABASE
);

if (!$koneksi) {
    echo "koneksi gagal";
}
