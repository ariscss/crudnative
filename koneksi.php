<?php
//  membuat koneksi database
// atur servernya
$servername = "localhost";
$username = "root";
$password = "";
$database = "crudnative";

// buat koneksinya
$konek = mysqli_connect($servername, $username, $password,$database);

// Check koneksi
if (!$konek) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}



?>