<?php
    //echo date("l, d-M-Y");
    //echo time();
    // echo date("l, d-M-Y", time()- 60 * 60 * 24 * 251);
    
    //mktime (0,0,0,0,0,0)
    //jam, menit, detik, bulan, tanggal, tahun

    echo date("l ", mktime(0,0,0,9,5,2009));
?>