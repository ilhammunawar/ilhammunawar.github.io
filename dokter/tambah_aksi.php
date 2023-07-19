<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$spesialis = $_POST['spesialis'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO dokter (nama, alamat, no_telp, spesialis) VALUES ('$nama', '$alamat', '$no_telp', '$spesialis')");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>