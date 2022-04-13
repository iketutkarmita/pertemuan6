<?php

include_once("konfigurasi.php");

$cnn = mysqli_connect(DBHOST, DBUSER, DBPASCODE) or die("Koneksi gagal");
echo "Koneksi sukses";
