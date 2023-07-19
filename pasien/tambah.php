<?php
include 'header.php';
include '../pasien/sidebar.php';
?>
<body>
	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> <!-- Mengatur halaman CRUD DATA agar rapih berada disamping side bar -->

	<h2>TAMBAH DATA PASIEN</h2>
	<a href="dashboard.php">KEMBALI</a>
	<br />
	<br />
	<!-- <h3>TAMBAH DATA PASIEN</h3> -->
	<form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
					<label class="form-check-label" for="inlineRadio1">Laki-laki</label>
					</div>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
					<label class="form-check-label" for="inlineRadio2">Perempuan</label>
					</div>
				</td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tempat_lahir"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>
			<tr>
				<td>Golongan Darah</td>
				<td>
					<select type="text" name="goldarah">
						<option value="O">O</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="AB">AB</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Penyakit</td>
				<td><input type="text" name="penyakit"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>