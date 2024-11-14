<?php 

include 'koneksi.php';
$id = $_GET['id'];
$nama = $_POST['nm'];
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

if ($filenm != null) {
    // Foto  diinput
    if (!in_array($ext,$ekstensi)) {
        // tolak
        header("location:index.php?alert=gagal_ekstensi");
    }else {
        if ($size < 1044070) {
            
            $foto = $rand.'_'.$filenm;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'img/'.$rand.'_'.$filenm);
    
            $query = "UPDATE data_siswa SET nm='$nama',nisn='$nisn',jk='$jk',
                    kls='$kls',tgl_lahir='$tgl_lahir', alamat='$alamat', foto='$foto' WHERE id='$id'";
            
            mysqli_query($koneksi,$query);
            header("location:index.php?alert=berhasil");
        } else {
            header("location:index.php?alert=gagal_ukuran");
        }
    }
    
} else {
    # null...
    $query = "UPDATE data_siswa SET nm='$nama',nisn='$nisn',jk='$jk',
    kls='$kls',tgl_lahir='$tgl_lahir', alamat='$alamat', foto='$foto' WHERE id='$id'";

    mysqli_query($koneksi,$query);
    header("location:index.php?alert=berhasil");
}


// var_dump($query);
// exit();



header("location:index.php");
?>