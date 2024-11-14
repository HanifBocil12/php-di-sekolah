<?php 
    // Koneksi
    include 'koneksi.php';

    // Menangkap data
    $id = $_GET['id'];

    // Proses hapus data dari database
    mysqli_query($koneksi ,"DELETE FROM data_siswa WHERE id='$id'");

    // alihkan ke halaman 
    header("location:index.php");
?>