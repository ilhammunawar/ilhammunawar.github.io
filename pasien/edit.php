<?php
include 'header.php';
include '../pasien/sidebar.php';
?>

<body>
	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> <!-- Mengatur halaman CRUD DATA agar rapih berada disamping side bar -->

		<h2>EDIT DATA PASIEN</h2>
		<a href="dashboard.php">KEMBALI</a>
		<br />
		<br />
		<!-- <h3>EDIT DATA PASIEN</h3> -->

		<?php
		include 'koneksi.php';
		$id = $_GET['id'];
		$data = mysqli_query($koneksi, "select * from pasien where id='$id'");
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
						<td>Jenis Kelamin</td>
						<td>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki"  <?php if ($d['jenis_kelamin'] == 'Laki-laki') echo 'checked'; ?>>
								<label class="form-check-label" for="inlineRadio1">Laki-laki</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($d['jenis_kelamin'] == 'Perempuan') echo 'checked'; ?>>
								<label class="form-check-label" for="inlineRadio2">Perempuan</label>
							</div>
						</td>
					</tr>

					<tr>
						<td>Tempat Lahir</td>
						<td><input type="text" name="tempat_lahir" value="<?php echo $d['tempat_lahir']; ?>"></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td><input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>"></td>
					</tr>
					<tr>
						<td>Golongan Darah</td>
						<td>
							<select type="text" name="goldarah" value="<?php echo $d['jenis_kelamin']; ?>">
								<option value="O" <?php if ($d['goldarah'] == 'O') echo 'selected'; ?>>O</option>
								<option value="A" <?php if ($d['goldarah'] == 'A') echo 'selected'; ?>>A</option>
								<option value="B" <?php if ($d['goldarah'] == 'B') echo 'selected'; ?>>B</option>
								<option value="AB" <?php if ($d['goldarah'] == 'AB') echo 'selected'; ?>>AB</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
					</tr>
					<tr>
						<td>Penyakit</td>
						<td><input type="text" name="penyakit" value="<?php echo $d['penyakit']; ?>"></td>
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