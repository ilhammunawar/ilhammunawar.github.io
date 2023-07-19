<?php
include 'header.php';
include '../pasien/sidebar.php';
?>

<body>
	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> <!-- Mengatur halaman CRUD DATA agar rapih berada disamping side bar -->

		<h2>EDIT DATA RUANGAN</h2>
		<a href="dashboard.php">KEMBALI</a>
		<br />
		<br />
		<!-- <h3>EDIT DATA RUANGAN</h3> -->

		<?php
		include 'koneksi.php';
		$id = $_GET['id'];
		$data = mysqli_query($koneksi, "select * from ruangan where id='$id'");
		while ($d = mysqli_fetch_array($data)) {
		?>
			<form method="post" action="update.php" enctype="multipart/form-data">
				<table>
					<tr>
						<td>Nama</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							<input type="text" name="nama_ruangan" value="<?php echo $d['nama_ruangan']; ?>">
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