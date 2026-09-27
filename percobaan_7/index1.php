<?php 
    // cek apakah tidak ada data di $_GET
    if (!isset($_GET["nama"]) || 
        !isset($_GET["nik"]) ||
        !isset($_GET["jabatan"]) ||
        !isset($_GET["email"]) || 
        !isset($_GET["telepon"]) ||
        !isset($_GET["gambar"])) {
        //redirect
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail karyawan</title>
</head>
<body>
    
<ul>
    <li><img src="img/<?= $_GET["gambar"]; ?>"width="120" height="150"></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nik"] ?></li>
    <li><?= $_GET["jabatan"] ?></li>
    <li><?= $_GET["email"] ?></li>
    <li><?= $_GET["telepon"] ?></li>
</ul>

<a href="index.php">Kembali ke daftar karyawan</a>

</body>
</html>