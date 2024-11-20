<?php

class bangun_datar{

    public $luass;
    public $luasp;
    public $luaspp;
    public $luasl;


    public function segitiga($alas,$tinggi){
        echo"<h3>Menghitung Luas Segitiga</h3>";
        echo"Alas : $alas<br>";
        echo"Tinggi : $tinggi<br>";
        $this->luass = $alas * $tinggi / 2;
        echo "Hasilnya : $this->luass<br>";
    }
    
    public function persegi($sisi){
    
        echo"<h3>Menghitung Luas Persegi</h3>";
        echo"Sisi : $sisi<br>";
        $this->luasp = $sisi * $sisi;
        echo"Hasilnya : $this->luasp<br>";
    }
    
    public function persegi_panjang($panjang,$lebar){
    
        echo"<h3>Menghitung Luas Persegi Panjang</h3>";
        echo"Panjang : $panjang<br>";
        echo"Lebar : $lebar<br>";
        $this->luaspp = $panjang * $lebar;
        echo"Hasilnya : $this->luaspp<br>";
    }
    
    public function lingkaran($jari){
    
        echo"<h3>Menghitung Luas Lingkaran</h3>";
        echo"Jari-jari : $jari<br>";
        $phi = 3.14;
        $jar= $jari * $jari;
        $this->luasl = $phi * $jar;
        echo"Hasilnya : $this->luasl<br>";
    }
    
}

$hasil = new bangun_datar;

$hasil -> segitiga(10,15);
$hasil ->persegi(30);
$hasil ->persegi_panjang(14,7);
$hasil ->lingkaran(20);
