<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama_ruangan = $_POST['nama_ruangan'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO ruangan (nama_ruangan) VALUES ('$nama_ruangan')");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>