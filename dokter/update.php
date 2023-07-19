<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$spesialis = $_POST['spesialis'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE dokter SET nama='$nama', alamat='$alamat', no_telp='$no_telp', spesialis='$spesialis' where id='$id'");
 
// mengalihkan halaman kembali ke dashboard.php
header("location:dashboard.php");
 
?>