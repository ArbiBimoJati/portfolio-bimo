<?php
include 'koneksi.php';
$query = "SELECT * FROM buku ORDER BY id DESC";
$result = mysqli_query($koneksi, $query);
if (isset($_GET['hapus']))  { $id = $_GET['hapus'];
mysqli_query($koneksi, "DELETE FROM buku WHERE id = $id");
header("Location: index.php");
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PERPUSTAKAAN SAYA</title>
  </head>
  <body>
    <h1>SELAMAT DATANG SAYANG DI PERPUSTAKAAN</h1>
    <p>sayang kamu lucu banget si aku jadi salting deh >.<</p>
    <a href="tambah.php" class="btn btn-info">Tambah Siswa Baru</a>
    
    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">JUDUL BUKU</th>
      <th scope="col">PENULIS</th>
      <th scope="col">PENERBIT</th>
      <th scope="col">TAHUN TERBIT</th>
    </tr> 
  </thead>
  <tbody>
  <?php $no=1; while ($buku = mysqli_fetch_assoc($result)) : ?>
  <tr>
    <td><?=$no++; ?></td>
    <td><?= htmlspecialchars($buku['judul']); ?></td>
    <td><?= htmlspecialchars($buku['penulis']); ?></td>
    <td><?= htmlspecialchars($buku['penerbit']); ?></td>
    <td><?= $buku['tahun_terbit']; ?></td>
      <td>
      <a href="edit.php?id=<?= $buku['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
      <a href="index.php?hapus=<?= $buku['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Buku Ini?')">Hapus</a>
      </td>
  </tr> 
  <?php endwhile; ?>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>