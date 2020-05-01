<?php
include('koneksi.php');

$id = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE id='$id' LIMIT 1 ";

$hasil = mysqli_query($konek, $sql);

$data = mysqli_fetch_assoc($hasil);

?>

<!doctype html>
<html lang="en">

<head>
    <title>Data Mahasiswa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--  CSS custom -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h4 class="card-title">Ubah Data Mahasiswa</h4>
                                <form action="update_mahasiswa.php" method="post">
                                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="alamat" rows="3"><?= $data['alamat'] ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" class="form-control" value="<?= $data['email'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Jenis Kelamin</label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="gender" id="gender" value="L" <?= ($data['gender'] == 'L') ? 'checked' : ''; ?>>
                                                Laki-Laki </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="gender" id="gender" value="P" <?= ($data['gender'] == 'P') ? 'checked' : ''; ?>>
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success float-right">Ubah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/jquery/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>