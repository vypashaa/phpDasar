<?php
    $dataSiswa = [
        ["Delvyo Pasha Adhityara", "0001", "RPL", "pasha01@gmail.com"], ["Alden Al firdaus", "0002", "TPTU", "Alden02@gmail.com"], ["Ahmad Fadil Mubarok", "0001", "RPL", "pasha01@gmail.com"]
    
    ];

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

    <?php foreach($dataSiswa as $data) : ?>
    <ul>
        <li> <?php echo $data[0]; ?> </li>
        <li> <?php echo $data[1]; ?> </li>
        <li> <?php echo $data[2]; ?> </li>
        <li> <?php echo $data[3]; ?> </li>
    </ul>
    <?php endforeach;?>

</body>
</html>