<?php
include 'header.php';
include '../pasien/sidebar.php';
?>

<body>
	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> <!-- Mengatur halaman CRUD DATA agar rapih berada disamping side bar -->

		<h2>EDIT DATA DOKTER</h2>
		<a href="dashboard.php">KEMBALI</a>
		<br />
		<br />
		<!-- <h3>EDIT DATA DOKTER</h3> -->

		<?php
		include 'koneksi.php';
		$id = $_GET['id'];
		$data = mysqli_query($koneksi, "select * from dokter where id='$id'");
		while ($d = mysqli_fetch_array($data)) {
		?>
			<form method="post" action="update.php" enctype="multipart/form-data">
				<table>
					<tr>
						<td>Nama</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
						</td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
					</tr>
					<tr>
						<td>No. Telepon</td>
						<td><input type="number" name="no_telp" value="<?php echo $d['no_telp']; ?>"></td>
					</tr>

					<tr>
						<td>Spesialis</td>
						<td>
							<select type="text" name="spesialis" value="<?php echo $d['spesialis']; ?>">
								<option value="Jantung" <?php if ($d['spesialis'] == 'Jantung') echo 'selected'; ?>>Jantung</option>
								<option value="Syaraf" <?php if ($d['spesialis'] == 'Syaraf') echo 'selected'; ?>>Syaraf</option>
								<option value="Umum" <?php if ($d['spesialis'] == 'Umum') echo 'selected'; ?>>Umum</option>
								<option value="Bedah" <?php if ($d['spesialis'] == 'Bedah') echo 'selected'; ?>>Bedah</option>
								<option value="Anak" <?php if ($d['spesialis'] == 'Anak') echo 'selected'; ?>>Anak</option>
							</select>
						</td>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" value="SIMPAN"></td>
					</tr>
				</table>
			</form>
		<?php
		}
		?>
	</main>
</body>