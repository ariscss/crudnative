<?php include('koneksi.php'); ?>

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
            <div class="col-md-12">
                <h2>Data Mahasiswa</h2>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modelAdd">
                    Tambah Data
                </button>
                <div class="row mt-4">
                    <div class="col-md-8">
                        <table class="table table-bordered table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sql = "SELECT id,nama,alamat,email,gender FROM mahasiswa";
                                $hasil = mysqli_query($konek, $sql);

                                if (mysqli_num_rows($hasil) > 0) {
                                    // menampilkan hasil query
                                    while ($row = mysqli_fetch_assoc($hasil)) {
                                ?>
                                        <tr>
                                            <td scope="row"><?= $row["nama"]; ?></td>
                                            <td><?= $row["alamat"]; ?></td>
                                            <td><?= $row["email"]; ?></td>
                                            <td><?= $row["gender"]; ?></td>
                                            <td>
                                                <a name="" id="" class="btn btn-danger" href="delete_mahasiswa.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin akan menghapus ?'); " role="button"><i class="fas fa-trash"></i></a>
                                                <a name="edit" id="edit" class="btn btn-warning" href="form_edit_mahasiswa.php?id=<?= $row['id'];?>" role="button"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else { ?>
                                    <div class="alert alert-warning" role="alert">
                                        <strong>Data Kosong</strong>
                                    </div>
                                <?php
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="modelAdd" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_mahasiswa.php" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="your@mail.com">
                        </div>
                        <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="gender" id="gender" value="L">
                                    Laki-Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="gender" id="gender" value="P">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal tambah mahasiswa -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/jquery/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>