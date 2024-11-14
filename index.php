<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP dan MySQLi</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>CRUD (Create, Read, Update)</h4>
                <a href="tambah.php" class="btn btn-primary mb-2">Tambah siswa</a>
                <table class="table text-center table-bordered">
                    <tr>
                        <th class="bg-black text-white">No</th>
                        <th class="bg-black text-white">ID</th>
                        <th class="bg-black text-white">Name</th>
                        <th class="bg-black text-white">NISN</th>
                        <th class="bg-black text-white">JK</th>
                        <th class="bg-black text-white">Kelas</th>
                        <th class="bg-black text-white">Tanggal Lahir</th>
                        <th class="bg-black text-white">Alamat</th>
                        <th class="bg-black text-white">Foto</th>
                        <th class="bg-black text-white">Opsi</th>
                    </tr>
                    <?php  
                    include 'koneksi.php';
                    $no = 1;
                    // Mengambil data siswa dari database
                    $query = mysqli_query($koneksi, 'SELECT * FROM data_siswa');
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data['nm']; ?></td>
                        <td><?php echo $data['nisn']; ?></td>
                        <td><?php echo $data['jk']; ?></td>
                        <td><?php echo $data['kls']; ?></td>
                        <td><?php echo $data['tgl_lahir']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><img src="img/<?php echo $data['foto'] ?>" width="35" height="40"></td>

                        <!-- Tombol Detail -->
                        <td>
                            <!--  -->
                            <a href="#" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModal-<?= $data['id']; ?>">Detail</a>
                            <!-- -->
                            <a href="hapus.php?id=<?= $data['id']; ?>" class="btn btn-danger">Hapus</a>
                        </td>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal-<?= $data['id']; ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Informasi</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <img src="img/<?= $data['foto']; ?>" width="35" height="40">
                                                        </div>
                                                        <label class="col-2 col-form-label" for="nm">Nama:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control-plaintext" readonly
                                                                name="nm" value="<?= $data['nm'] ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-2 col-form-label" for="nisn">NISN:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control-plaintext" readonly
                                                                name="nisn" value="<?= $data['nisn'] ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label for="kls" class="col-form-label col-2">Kelas:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control-plaintext" readonly
                                                                name="kls" value="<?= $data['kls'] ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="jk" class="col-form-label col-4">Jenis Kelamin:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control-plaintext" readonly
                                                            name="jk" value="<?= $data['jk'] ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="edit.php?id=<?= $data['id'];?>"
                                                class="btn btn-success float-end">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS dan dependensinya -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>