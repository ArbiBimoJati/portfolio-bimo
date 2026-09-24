<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $judul        = $_POST['judul'];
    $penulis      = $_POST['penulis'];
    $penerbit     = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $simpan = mysqli_query($koneksi, "INSERT INTO buku (Judul, Penulis, Penerbit, tahun_terbit) VALUES ('$judul', '$penulis', '$penerbit', '$tahun_terbit')");
    if ($simpan) {header("Location: index.php");
    exit();
    } else { echo "Gagal Menyimpan Data: " . mysqli_error($koneksi);
 }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Perpustakaan Ameng Sayangnya Acu</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Tambah Buku Baru</h2>
        
        <form method="post" action="">
            <div class="mb-3">
                <label class="form-label">JUDUL BUKU</label>
                <input type="text" name="judul" class="form-control" placeholder="Masukan judul buku" required>
            </div>

            <div class="mb-3">
                <label class="form-label">PENULIS BUKU</label>
                <input type="text" name="penulis" class="form-control" placeholder="Masukan penulis buku" required>
            </div>

            <div class="mb-3">
                <label class="form-label">PENERBIT BUKU</label>
                <input type="text" name="penerbit" class="form-control" placeholder="Masukan penerbit buku" required>
            </div>

            <div class="mb-3">
                <label class="form-label">TAHUN TERBIT</label>
                <input type="text" name="tahun_terbit" class="form-control" placeholder="Masukan tahun terbit buku" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

