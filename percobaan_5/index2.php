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
        <li> <?php echo $dataSiswa[0]; ?> </li>
        <li> <?php echo $dataSiswa[1]; ?> </li>
        <li> <?php echo $dataSiswa[2]; ?> </li>
        <li> <?php echo $dataSiswa[3]; ?> </li>
    </ul>

</body>
</html>