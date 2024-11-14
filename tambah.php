<?php include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP dan MySQLi</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container p-5">
        <div class="row">
            <div class="col alert alert-primary rounded p-4">
                <h4>Formulir Tambah Data</h4>
                <a href="index.php" class="btn btn-primary mb-2">back</a>
                <form action="tam_aksi.php" method="post" enctype="multipart/form-data" class="">
                    <div class="row mb-2">
                        <label class="col-2 form-label" for="nm">name</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="nm" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-2 form-label" for="nm">nisn</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="nisn" required>
                        </div>
                    </div>

                    <!-- file -->
                    <div class="row mb-2">
                        <label for="foto" class="col-2 form-label">Upload foto</label>
                        <div class="col">
                            <input class="form-control" type="file" name="foto" value="" required>
                        </div>
                    </div>
                    <div class=" row mb-2">
                        <!-- kls -->
                        <label class="col-2 form-label" for="kls">kelas</label>
                        <div class="col-4">
                            <select name="kls" id="kls" class="form-select" required>
                                <option value="XI RPL 1">XI RPL 1</option>
                                <option value="XI RPL 2">XI RPL 2</option>
                                <option value="XI RPL 3">XI RPL 3</option>
                            </select>
                        </div>
                        <!-- jk -->
                        <label class="col-2 form-label" for="nm">jeniskelamin</label>
                        <div class="col-4">
                            <input type="radio" value="P" class="form-check-input" name="jk" required>
                            <label for="jk">P</label>
                            <input type="radio" value="L" class="form-check-input" name="jk" required>
                            <label for="jk">L</label>
                        </div>
                    </div>
                    <!-- tgl -->
                    <div class=" row mb-2">
                        <div class="col-2">
                            <label class="form-label" for="tgl_lahir">tanggal lahir</label>
                        </div>
                        <div class="col-10">
                            <input name="tgl_lahir" class="form-control" type="date" required>
                        </div>
                    </div>
                    <!-- Alamat -->
                    <div class="row mb-2">
                        <div class="col-2">
                            <label class="form-label" for="alamat">Alamat :</label>
                        </div>
                        <div class="col-10">
                            <textarea class="form-control" type="text" id="alamat" name="alamat"
                                placeholder="Masukkan Alamat" required></textarea>
                        </div>
                    </div>
                    <input type="submit" value="save" class="btn btn-primary float-end">
                </form>
            </div>
        </div>

    </div>
    </div>
    </div>
    <script src=" bootstrap/js/bootstrap.bundle.min.js"></script>
</body>