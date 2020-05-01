<?php
include('koneksi.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$gender = $_POST['gender'];

$sql = "UPDATE mahasiswa SET nama='$nama', alamat='$alamat', email='$email', gender='$gender' WHERE id='$id' ";

if (mysqli_query($konek, $sql)) {
    header("location:mahasiswa.php");
} else {
    echo "Gagal menyimpan data " . mysqli_error($konek);
}
