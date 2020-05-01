<?php
include('koneksi.php');

$id = $_GET['id'];

$sql = "DELETE FROM mahasiswa WHERE id='$id' ";

if (mysqli_query($konek, $sql)) {
    header("location:mahasiswa.php");
} else {
    echo "Gagal menyimpan data " . mysqli_error($konek);
}
