<?php

function segitiga($alas,$tinggi){
    echo"<h3>Menghitung Luas Segitiga</h3>";
    echo"Alas : $alas<br>";
    echo"Tinggi : $tinggi<br>";
    $ls = $alas * $tinggi / 2;
    echo "Hasilnya : $ls<br>";
}

function persegi($sisi){

    echo"<h3>Menghitung Luas Persegi</h3>";
    echo"Sisi : $sisi<br>";
    $lp = $sisi * $sisi;
    echo"Hasilnya : $lp<br>";
}

function persegi_panjang($panjang,$lebar){

    echo"<h3>Menghitung Luas Persegi Panjang</h3>";
    echo"Panjang : $panjang<br>";
    echo"Lebar : $lebar<br>";
    $lpp = $panjang * $lebar;
    echo"Hasilnya : $lpp<br>";
}

function lingkaran($jari){

    echo"<h3>Menghitung Luas Lingkaran</h3>";
    echo"Jari-jari : $jari<br>";
    if ($jari == ) {
        # code...
    }
    $phi = 22/7;
    $jar= $jari * $jari;
    $ll = $phi * $jar;
    echo"Hasilnya : $ll<br>";
}


segitiga(10,15);
persegi(30);
persegi_panjang(14,7);
lingkaran(21);
