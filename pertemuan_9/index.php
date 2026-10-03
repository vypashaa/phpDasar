<?php 
// digunakan kedepannya
// halaman index untuk admin yang bisa melihat, menambah, menghapus, dan mengubah data karyawan
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin</title>
</head>
<body>
    <h1>Daftar Karyawan:</h1>
    <table border="1">
        <tr>
            <th>no</th>
            <th>aksi</th>
            <th>gambar</th>
            <th>nik</th>
            <th>nama</th>
            <th>jabatan</th>
            <th>email</th>
            <th>nomor</th>
        </tr>

        <tr>
            <td>1</td>
            <td>
                <a href="">edit</a>
                <a href="">hapus</a>
            </td>
            <td><img src="img/vyo.jpeg" alt="Gambar CEO" width="50"></td>
            <td>001</td>
            <td>Delvyo Pasha Adhityara</td>
            <td>CEO</td>
            <td>delpasha@gmail.com</td>
            <td>08951882882</td>
        </tr>
    </table>
</body>
</html>