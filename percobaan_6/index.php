<?php 
    $daftarkaryawan = [
        [
            "nama" => "Delvyo Pasha A.", 
            "nik" => "200901",
            "jabatan" => "CEO",
            "email" => "vyooPasha@gmail.com",
            "telepon" => "089518821882",
            "gambar" => "vyo.jpeg"
        ],

        [
            "nama" => "Arshalan Bagus H.", 
            "nik" => "200902",
            "jabatan" => "Manager HRD",
            "email" => "hartantoBagus@gmail.com",
            "telepon" => "086790124532",
            "gambar" => "bagus.jpeg"
        ],

        [
            "nama" => "Dian Prasetya", 
            "nik" => "200903",
            "jabatan" => "Manager Keuangan",
            "email" => "Dynprasetya@gmail.com",
            "telepon" => "085145670978",
            "gambar" => "dian.jpeg"
        ],

        [
            "nama" => "Ahmad Fadil M.", 
            "nik" => "200904",
            "jabatan" => "Manager IT",
            "email" => "ApadielM@gmail.com",
            "telepon" => "089768854329",
            "gambar" => "padiel.png"
        ],

        [
            "nama" => "Aryasatya Wijayakusuma", 
            "nik" => "200905",
            "jabatan" => "Manager Pemasaran",
            "email" => "satyawijayaK@gmail.com",
            "telepon" => "087654341232",
            "gambar" => "satya.jpeg"
        ],

        [
            "nama" => "Adam Maulana", 
            "nik" => "200906",
            "jabatan" => "Sekertaris",
            "email" => "AdmaMaul@gmail.com",
            "telepon" => "089988776655",
            "gambar" => "maul.jpeg"
        ],

        [
            "nama" => "Athaya Qois", 
            "nik" => "200907",
            "jabatan" => "HR Analyst",
            "email" => "AthyaQ@gmail.com",
            "telepon" => "089754753241",
            "gambar" => "athaya.jpeg"
        ],

        [
            "nama" => "Alfian Raffa", 
            "nik" => "200908",
            "jabatan" => "Digital Marketer",
            "email" => "AlvianRaps@gmail.com",
            "telepon" => "087695731243",
            "gambar" => "rapaa.png"
        ],

        [
            "nama" => "Dika Vidi P.", 
            "nik" => "200909",
            "jabatan" => "Admin Kantor",
            "email" => "VidiPratama@gmail.com",
            "telepon" => "089767765434",
            "gambar" => "vidie.jpeg"
        ],

        [
            "nama" => "Akhtar Fauzan El F.S.", 
            "nik" => "200910",
            "jabatan" => "Resepsionis",
            "email" => "FauzanEl@gmail.com",
            "telepon" => "0879653412321",
            "gambar" => "ahktar.jpeg"
        ],
    ];

    // echo "Nama: " . $daftarkaryawan[0]["nama"];
    // echo "<br>";
    // echo "Jabatan: " . $daftarkaryawan[0]["jabatan"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan PT egiluyy</title>
</head>
<body>
    <h1>Daftar Karyawan:</h1>

    <?php foreach ($daftarkaryawan as $karyawan) : ?>
        <ul>
            <li>Nama: <?php echo $karyawan["nama"]; ?></li>
            <li>NIK: <?php echo $karyawan["nik"];?></li>
            <li>Jabatan: <?php echo $karyawan["jabatan"];?></li>
            <li>Email: <?php echo $karyawan["email"];?></li>
            <li>Telepon: <?php echo $karyawan["telepon"];?></li>
            <li>
                <img src="img/<?php echo $karyawan["gambar"]; ?>" width="120" height="150">
            </li>
        </ul>
    <?php endforeach ?>
</body>
</html>
