<?php

class bangun_datar{
      public $ls;
      public $lp;
      public $lpp;
      public $ll;

      public $ks;
      public $kp;
      public $kpp;
      public $kl;

}

class luas extends bangun_datar{

    public function segitiga($alas,$tinggi){
        echo"<h3>Menghitung Luas Segitiga</h3>";
        echo"Alas : $alas<br>";
        echo"Tinggi : $tinggi<br>";
        $this->ls = $alas * $tinggi / 2;
        echo "Hasilnya : $this->ls<br>";
    }
    public function persegi($sisi){

        echo"<h3>Menghitung Luas Persegi</h3>";
        echo"Sisi : $sisi<br>";
        $this->lp = $sisi * $sisi;
        echo"Hasilnya : $this->lp<br>";
    }
    
    public function persegi_panjang($panjang,$lebar){
    
        echo"<h3>Menghitung Luas Persegi Panjang</h3>";
        echo"Panjang : $panjang<br>";
        echo"Lebar : $lebar<br>";
        $this->lpp = $panjang * $lebar;
        echo"Hasilnya : $this->lpp<br>";
    }
    
    public function lingkaran($jari){
    
        echo"<h3>Menghitung Luas Lingkaran</h3>";
        echo"Jari-jari : $jari<br>";
        $phi = 22/7;
        $jar= $jari * $jari;
        $this->ll = $phi * $jar;
        echo"Hasilnya : $this->ll<br><hr>";
    }

    
}
class keliling extends bangun_datar{
        public function segitiga($a,$b,$c){
            echo"<h3>Menghitung Keliling Segitiga</h3>";
            echo "Panjang sisi a : $a<br>";
            echo "Panjang sisi b : $b<br>";
            echo "Panjang sisi a : $c<br>";
            $this->ks = $a + $b + $c;
            echo "Hasilnya : $this->ks<br>";
        }
        public function persegi($sisi){
            echo"<h3>Menghitung Keliling Persegi</h3>";
            echo "Panjang sisi : $sisi<br>";
            $this->kp = $sisi * 4;
            echo "Hasilnya : $this->kp<br>";
        }
        public function persegi_panjang($panjang,$lebar){
            echo"<h3>Menghitung keliling Persegi Panjang</h3>";
            echo "Panjang : $panjang<br>";
            echo "Lebar : $lebar<br>";
            $this->kpp = $panjang + $lebar * 2;
            echo "Hasilnya : $this->kpp<br>";
        }
        public function lingkaran($diameter){
            echo"<h3>Menghitung Keliling Lingkaran</h3>";
            echo "Diameter : $diameter<br>";
            $phi = 3.14;
            $this->kl = $phi * $diameter;
            echo "Hasilnya : $this->kl<br>";
        }
}

$cetak = new Luas();

echo $cetak ->segitiga(10,15);
echo $cetak ->persegi(30);
echo $cetak ->persegi_panjang(14,7);
echo $cetak ->lingkaran(21);

$cetak = new Keliling();

echo $cetak ->segitiga(10,10,10);
echo $cetak ->persegi(30);
echo $cetak ->persegi_panjang(14,7);
echo $cetak ->lingkaran(21);