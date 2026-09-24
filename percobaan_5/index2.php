<?php
    $dataSiswa = ["Delvyo Pasha Adhityara", "0001", "RPL", "pasha01@gmail.com"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Daftar Nama Siswa</h1>

    <ul>
        <?php foreach ($dataSiswa as $data) : ?>
            <li><?php echo $data;?></li>
        <?php endforeach?>
    </ul>
</body>
</html>