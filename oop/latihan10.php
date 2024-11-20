<?php

class penggajihan{
    public $potongan;
    public $tunjangan;
    public $total;
    public $gaji;

    public function gaji_pokok($nama,$jabatan){
       echo"<h2>Gaji Pokok</h2>";
        echo"Nama : $nama<br>";
        echo"Jabatan : $jabatan<br>";
        if ($jabatan == "Direktur") {
            $this->gaji = 10000000;
        }elseif ($jabatan == "Manager") {
            $this->gaji = 7500000;
        }elseif ($jabatan == "Karyawan") {
            $this->gaji = 5000000;
        }elseif ($jabatan == "Ob") {
            $this->gaji = 2500000;
        }
             
        echo"Gaji Pokok : $this->gaji<br><hr>";
    }

    public function tunjangan($pendidikan){
        echo"<h2>Tunjangan</h2>";
        echo"Pendidikan : $pendidikan<br>";
        if ($pendidikan == "S1") {
            $this->tunjangan = 1000000;
        }elseif ($pendidikan == "SMK") {
            $this->tunjangan = 7500000;
        }elseif ($pendidikan == "SMA") {
            $this->tunjangan = 7500000;
        }elseif ($pendidikan == "SMP") {
            $this->tunjangan = 500000;
        }elseif ($pendidikan == "SD") {
            $this->tunjangan = 250000;
        }
        
        echo"Tunjangan Pendidikan : $this->tunjangan<br><hr>";
    }

    public function potongan($tabungan,$pinjaman){
        echo"<h2>Potongan</h2>";
        echo"Tabungan : $tabungan<br>";
        echo"Pinjaman : $pinjaman<br>";
        $this->potongan = $tabungan + $pinjaman;
        echo"Total Potongan : $this->potongan<br><hr>";
    }

    public function total(){
        echo"<h2>Total Gaji Bersih</h2>";
        $this->total = $this->gaji + $this->tunjangan - $this->potongan;
        echo"Total Gaji Bersih: $this->total<br><hr>";
    }
}

echo"<center><h1>Penggajihan Karyawan</h1></center>";
$hasil = new penggajihan;

$hasil->gaji_pokok("Fauzan","Direktur");
$hasil->tunjangan("SMK");
$hasil->potongan(2000000,500000);
$hasil->total();