<?php
include 'header.php';
include '../pasien/sidebar.php';
?>
<body>
	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> <!-- Mengatur halaman CRUD DATA agar rapih berada disamping side bar -->

	<h2>TAMBAH DATA RUANGAN</h2>
	<a href="dashboard.php">KEMBALI</a>
	<br />
	<br />
	<!-- <h3>TAMBAH DATA RUANGAN</h3> -->
	<form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nama Ruangan</td>
				<td><input type="text" name="nama_ruangan"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>