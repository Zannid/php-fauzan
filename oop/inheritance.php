<?php

class kendaraan{

    public $warna = "biru";

    public function a(){
        echo"Saya adalah kendaraan";
    }
}

    class mobil extends kendaraan{

        public function b(){
            echo $this->a();
        }
    }

    $cetak = new mobil();
    echo $cetak->b();