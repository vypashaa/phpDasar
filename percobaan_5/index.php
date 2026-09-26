<?php 
//array
//variabel yang memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yang berbeda
//pasangan antara key dan value
//key-nya adalah index yang dimulai dari 0

//membuat array
//cara lama
    $nama = array("Delvyo", "Pasha", "Adhityara");
//cara baru
    $nama1 = ["Arshalan", "Bagus", "Hartanto"];
    $barang = ["laptop", "mouse", "keyboard"];
//penampilkan array
//tidak bisa menampilkan semua index menggunakan echo
//menggunakan var_dump dan print_r
//var_dump, isi lebih detail

//     var_dump($nama1);
//     echo "<br>";
    //print_r, isi lebih sedikit dan minimalis
//     print_r($nama);
//     echo "<br>";
    //echo dapat menampilkan salah satu elemen pada array
//     echo $nama[0];

//menambahkan eleman baru ke array
    var_dump($barang);
    echo $barang[] = "CPU";
    echo $barang[] = "monitor";
    echo "<br>";
    
    var_dump($barang);
?>