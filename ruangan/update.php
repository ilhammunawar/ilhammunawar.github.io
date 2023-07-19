<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_ruangan = $_POST['nama_ruangan'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE ruangan SET nama_ruangan='$nama_ruangan' where id='$id'");
 
// mengalihkan halaman kembali ke dashboard.php
header("location:dashboard.php");
 
?>