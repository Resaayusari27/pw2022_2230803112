<?php 
require 'functions.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


if(isset($_POST["submit"])){


    if(ubah($_POST) > 0){
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';
        </script>
    ";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah data mahasiswa</title>
</head>
<body>

    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["Gambar"]; ?>">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs["NRP"]; ?>">
            </li>
            <li>
            <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["Nama"]; ?>">
            </li>
            <li>
            <label for="email">Email : </label>
                <input type="text" name="email" id="email" required value="<?= $mhs["Email"]; ?>">
            </li>
            <li>
            <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["Jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <img src="<?= $mhs['Gambar']; ?>" width="40"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit"> Ubah Data!</button>
            </li>
        </ul>
    </form>
    
</body>
</html>