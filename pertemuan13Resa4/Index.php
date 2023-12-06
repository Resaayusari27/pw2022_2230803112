<?php 
// koneksi ke database
// untuk memanggil file dari tempat lain bisa pakai code require atau include
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>
<form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
    <button type="submit" name="cari">Cari!</button>

</form>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>

    </tr>

    <?php $i = 1; ?>
    <?php foreach($mahasiswa as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('kamu yakin ingin menghapus?');">hapus</a>
        </td>
        <td><img src="<?= $row["Gambar"]; ?>" width="50"></td>
        <td><?= $row["NRP"]; ?></td>
        <td><?= $row["Nama"]; ?></td>
        <td><?= $row["Email"]; ?></td>
        <td><?= $row["Jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>
</body>
</html>