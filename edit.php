<?php include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container p-5">
        <div class="row">
            <div class="col alert alert-primary rounded p-4">
                <h4>Formulir Edit Data</h4>
                <?php 
                        $id = $_GET['id'];
                
                        $query = mysqli_query($koneksi, "SELECT * FROM data_siswa WHERE id='$id'");
                        while ($data = mysqli_fetch_array($query)) {
                ?>
                <form action="update.php?id=<?= $data['id']; ?>" method="post" class="" enctype="multipart/form-data">
                    <div class="row mb-2">
                        <label class="col-2 form-label" for="nm">name</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="nm" value="<?php echo $data['nm'] ?>">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-2 form-label" for="nm">nisn</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="nisn" value="<?php echo $data['nisn'] ?>">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <!-- kls -->
                        <label class="col-2 form-label" for="kls">kelas</label>
                        <div class="col-4">
                            <select name="kls" id="kls" class="form-select">
                                <option value="XI RPL 1" <?php echo ($data['kls'] == 'XI RPL 1') ? 'selected' : ''; ?>>
                                    XI RPL 1</option>
                                <option value="XI RPL 2" <?php echo ($data['kls'] == 'XI RPL 2') ? 'selected' : ''; ?>>
                                    XI RPL 2</option>
                                <option value="XI RPL 3" <?php echo ($data['kls'] == 'XI RPL 3') ? 'selected' : ''; ?>>
                                    XI RPL 3</option>
                            </select>
                        </div>
                        <!-- jk -->
                        <label class="col-2 form-label" for="jk">jeniskelamin</label>
                        <div class="col-4">
                            <input type="radio" value="P" class="form-check-input"
                                <?php echo ($data['jk'] == 'P') ? 'checked' : ''; ?> name="jk">
                            <label for="jk">P</label>
                            <input type="radio" value="L" class="form-check-input"
                                <?php echo ($data['jk'] == 'L') ? 'checked' : ''; ?> name="jk">
                            <label for="jk">L</label>
                        </div>
                    </div>
                    <!-- tgl -->
                    <div class=" row mb-2">
                        <div class="col-2">
                            <label class="form-label" for="tgl_lahir">tanggal lahir</label>
                        </div>
                        <div class="col-10">
                            <input name="tgl_lahir" class="form-control" type="date"
                                value="<?php echo $data['tgl_lahir']  ?>">
                        </div>
                    </div>
                    <!-- Alamat -->
                    <div class="row mb-2">
                        <div class="col-2">
                            <label class="form-label" for="alamat">Alamat :</label>
                        </div>
                        <div class="col-10">
                            <textarea class="form-control" type="text" id="alamat" name="alamat"
                                placeholder="Masukkan Alamat"><?php echo $data['alamat'] ?></textarea>
                        </div>
                    </div>
                    <!-- file -->
                    <div class="mb-3">
                        <label for="foto" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" id="" value="<?= basename($data['foto']);?>" name="foto"
                            multiple />
                    </div>
                    <input type="submit" value="save" class="btn btn-primary ms-2 float-end">
                    <a href="index.php?id=<?= $data['id'];?>" class="btn btn-success float-end">Batal</a>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
    </div>
    <script src=" bootstrap/js/bootstrap.bundle.min.js"></script>
</body>