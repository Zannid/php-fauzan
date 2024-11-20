<?php
//class
class Kucing{
//properti / atribut
    var $warna;
    var $jenis;

    //method / function
    
    public function __construct(){
        echo"Hallo Saya Kucing<br>";
    }
    public function makan(){

        echo "Kucing suka makan Wiskas";
    }
    public function minum(){
        
        echo"Kucing suka minum Air";
    }
    public function __destruct(){
        echo"Rido liat mama *baaaaaaaaaaaa";
    }
}

// object
$cetak = new Kucing();//instantiation

echo $cetak->makan();
echo"<br>";
echo $cetak->minum();
echo"<br>";

echo $cetak->warna = "Kuning";
echo"<br>";
echo $cetak->jenis = "Anggora<br>";

?>