<?php

function biodata($nama,$tempat_lahir,$tanggal_lahir,$jk,$agama,$alamat,$hobi){

    echo"Nama : $nama<br>";
    echo"Tempat Lahir : $tempat_lahir<br>";
    echo"Tanggal Lahir : $tanggal_lahir<br>";
    echo"Jenis Kelamin : $jk<br>";
    echo"Agama : $agama<br>";
    echo"Alamat : $alamat<br>";
    echo"Hobi : $hobi<br>";
}

biodata("Fauzan","Bandung","27 Nov 2007","Laki-laki","Islam","Rancamanyar","Ngaji");

function menghitung($angka1,$angka2){

    echo"Bilangan ke 1 : $angka1<br>";
    echo"Bilangan ke 2 : $angka2<br>";
    $hasil = $angka1 + $angka2;
    echo"Hasilnya : $hasil";
}

menghitung(10,20);