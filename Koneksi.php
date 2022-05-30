<?php
$host = "localhost";
$user = "admin_klinik1";
$pass = "312010220";
$db = "klinik_312010220";
$conn = mysqli_connect ($host, $user, $pass, $db);
if ($conn == false)
{
    echo "Koneksi ke server gagal.";
    die();
} #else echo "Koneksi berhasil";
?>