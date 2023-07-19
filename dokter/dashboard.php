<?php
include 'header.php';
include '../pasien/sidebar.php';
?>
<body>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> <!-- Mengatur halaman CRUD DATA agar rapih berada disamping side bar -->
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 container">
              <span>D</span>
              <span>a</span>
              <span>t</span>
              <span>a</span>
              <span>D</span>
              <span>o</span>
              <span>k</span>
              <span>t</span>
              <span>e</span>
              <span>r</span>
            </h1>
            <div class="btn-toolbar mb-2 mb-md-0"></div>
          </div>

          <h2>Tabel Dokter</h2>
          <a class="btn btn-primary" href="tambah.php">+ TAMBAH DATA DOKTER</a>
          <div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">No. Telepon</th>
                  <th scope="col">Spesialis</th>
                  <th scope="col">OPSI</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM dokter");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                  <tr>
                    <td style="text-align: left;"><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['no_telp']; ?></td>
                    <td><?php echo $d['spesialis']; ?></td>
                    <td>
                      <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-success">EDIT</a>
                      <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger">HAPUS</a>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
            <!-- <a class="btn btn-danger" href="../dokter/index.php" onclick="alert('Berhasil logout!');">LOGOUT</a> -->
          </div>
        </main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
</body>