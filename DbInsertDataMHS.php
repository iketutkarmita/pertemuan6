<?php
if (isset($_POST["txNIM"])) {
    include_once("DBKoneksi2.php");

    $nim = $_POST["txNIM"];
    $nama = $_POST["txNAMA"];
    $jurusan = $_POST["txJURUSAN"];
    $jenisK = $_POST["txJK"];
    $tglL = $_POST["txTGL"];
    $PASSS = $_POST["txPASS"];
}

$sql_insert = "INSERT INTO `mhs`(`NIM`, `NAMA`, `jurusan`, `Jk`, `TGL_LARHIR`, `PASSCODE`) VALUES 
('" . $nim . "','" . $nama . "','" . $jurusan . "','" . $jenisK . "','" . $tglL . "','" . $PASSS . "');";



$hsl = mysqli_query($cnn, $sql_insert);

if ($hsl) {
    echo "insert <strong>mhs</strong> berhasil";
} else {
    echo "insert <strong>mhs</strong> gagal";
}
mysqli_close($cnn);
