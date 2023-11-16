<?php
$mahasiswa =
[
    [
"nama" => "Joni",
"nim" => "123456",
"jurusan" => "Sistem Informasi",
"email" => "Joni@gmail.com"

],
[
    "nama" => "budi",
    "nim" => "321654",
    "jurusan" => "ilmu komputer",
    "email" => "budi@gmail.com"
]
];

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<hl>Daftar Mahasiswa</hl>
<?php foreach ($mahasiswa as $mhs) : ?>
<ul>
<li>Nama :<?= $mhs["nama"]; ?></li>
<li>Nim :<?= $mhs["nim"]; ?></li>
<li>Jurusan :<?= $mhs["jurusan"]; ?></li>
<li>Email :<?= $mhs["email"]; ?></li>
<ul>
    <?php endforeach; ?>
    
</body>
</html>

