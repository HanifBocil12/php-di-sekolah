<?php 
// Koneksi
include 'koneksi.php';

// 
$nm = $_POST['nm'];
$nisn = $_POST['nisn'];
$jk = $_POST['jk'];
$kls = $_POST['kls'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];

// file
$rand = rand();
$ekstensi = array('png','jpg','jpeg','gif');
$filenm = $_FILES['foto']['name'];
$size = $_FILES['foto']['size'];
$ext = pathinfo($filenm, PATHINFO_EXTENSION);

if (!in_array($ext,$ekstensi)) {
    // tolak
    header("location:index.php?alert=gagal_ekstensi");
}else {
    if ($size < 1044070) {
        $foto = $rand.'_'.$filenm;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'img/'.$rand.'_'.$filenm);
        mysqli_query($koneksi, "INSERT INTO data_siswa VALUES(NULL,'$nm','$nisn','$jk','$kls','$tgl_lahir','$alamat','$foto')");
        header("location:index.php?alert=berhasil");
    } else {
        header("location:index.php?alert=gagal_ukuran");
    }
}

    var_dump();
    exit();

    // mysqli_query($koneksi,"INSERT INTO data_siswa VALUES(NULL,'$nm','$nisn','$jk','$kls','$tgl_lahir','$alamat')");
    header("location:index.php");
?>