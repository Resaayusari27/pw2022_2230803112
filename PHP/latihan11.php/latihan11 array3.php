<?php
$mahasiswa = ["Joni", "123456", "Sistem Informasi", "dyan@gmail.com"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <hl>Daftar Mahasiswa</hl>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li><?=$mhs[0]; ?></li>
        <li><?=$mhs[1]; ?></li>
        <li><?=$mhs[2]; ?></li>
        <li><?=$mhs[3]; ?></li>

</ul>
<?php endforeach; ?>
</body>
</html>