<?php
include 'header.php';
include '../pasien/sidebar.php';
?>
<body>
	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> <!-- Mengatur halaman CRUD DATA agar rapih berada disamping side bar -->

	<h2>TAMBAH DATA DOKTER</h2>
	<a href="dashboard.php">KEMBALI</a>
	<br />
	<br />
	<!-- <h3>TAMBAH DATA DOKTER</h3> -->
	<form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>

			<tr>
				<td>No. Telepon</td>
				<td><input type="number" name="no_telp"></td>
			</tr>

			<tr>
				<td>Spesialis</td>
				<td>
					<select type="text" name="spesialis">
						<option value="Jantung">Jantung</option>
						<option value="Syaraf">Syaraf</option>
						<option value="Umum">Umum</option>
						<option value="Bedah">Bedah</option>
						<option value="Anak">Anak</option>
					</select>
				</td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>