<?php
/* untuk membuat database:
1. koneksi ke DBMS mysql
2. script sql untuk create database
3. excute script database */
include_once("dbkoneksi.php");
if ($cnn) {
    $sql = "CREATE DATABASE mahasiswa;";
    $hsl = mysqli_query($cnn, $sql);
    if ($hsl) {
        echo "Database mahasiswa sukses dibuat";
    } else {
        echo "Databse mahasiswa gagal dibuat";
    }
    mysqli_close($cnn);
}
