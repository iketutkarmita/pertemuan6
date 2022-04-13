<?php

include_once("DbKoneksi2.php");

$sql = "CREATE TABLE mhs(
        NIM INT(11) PRIMARY KEY,
        NAMA VARCHAR(100),
        jurusan VARCHAR(100),
        Jk VARCHAR(100),
        TGL_LARHIR DATE,
        PASSCODE VARCHAR(10)
        );";
$hsl = mysqli_query($cnn, $sql);

if ($hsl) {
    echo "pembuatan tbl <strong>mhs</strong> berhasil";
} else {
    echo "pembuatan tbl <strong>mhs</strong> gagal";
}
mysqli_close($cnn);
