<?php
include('koneksi.php');

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$gender = $_POST['gender'];

$sql = "INSERT INTO mahasiswa (nama,alamat,email,gender) VALUES ('$nama','$alamat','$email','$gender')";

if (mysqli_query($konek,$sql)) {
    header("location:mahasiswa.php");   
} else {
   echo "Gagal menyimpan data " . mysqli_error($konek);
}

