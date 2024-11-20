<?php
class Contoh{

    public $nama = "Fauzan";

    public function perkenalan(){
        echo"Assalamualaikum<br>";
    }
}

$cetak = new Contoh();

echo $cetak->perkenalan();

echo $cetak->nama;