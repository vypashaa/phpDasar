<?php
    // echo date("l, d-M-Y");
    // echo time();
    // echo date("l, d-M-Y ", time()- 60 * 60 * 24 * 252);
    
    //mktime (0,0,0,0,0,0)
    //jam, menit, detik, bulan, tanggal, tahun
    // echo date("l ", mktime(0,0,0,9,5,2009));

    //strtotime
    // echo date("l ", strtotime("5 sep 2009"));

    //PERCOBAAN PERTAMA FUNCTION PHP
    // function salam($ket = "pagi", $nama = "admin") {
    //     return "Hallo selamat $ket, $nama";
    // }

    //PERCOBAAN KEDUA FUNCTION PHP
    // function luasPersegi($p, $l) {
    //     $luas = $p * $l;
    //     return "dengan panjang $p dan lebar $l, maka luasnya $luas";
    // }

    //PERCOBAAN KETIGA
    //function ganjil genap
    function ganjilGenap($bilangan) {
        if ($bilangan % 2 === 0) {
            return $bilangan . " adalah bilangan genap";
        }  else {
            return $bilangan . " adalah bilangan ganjil";
        }
    }
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php echo ganjilgenap(21);?>
    </body>
    </html>

    <!-- PERCOBAAN KEDUA FUNCTION DI HTML-->
    <!-- <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>luas persegi</title>
        </head>
        <body>
            <?php //echo luasPersegi(100, 25);?>
        </body>
        </html> -->

    <!-- PERCOBAAN PERTAMA FUNCTION DI HTML-->
    <!--<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>function php</title>
    </head>
    <body>
        <h1><?php //echo salam("siang", "pantek"); ?></h1>
    </body>
    </html> -->

