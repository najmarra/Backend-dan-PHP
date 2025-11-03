<?php

$server = "localhost";
$user = "root";
$password = "Ara210506";
$nama_database = "pendaftaran_siswa";

$db = mysqli_connect("localhost", "root", "Ara210506", "pendaftaran_siswa");

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
