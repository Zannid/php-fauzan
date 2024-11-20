<?php

class ppdb{

    public function data_diri($jurusan,$nama,$jk,$tempatL,$tanggalL,$tlp,$email){

        echo"Jurusan : $jurusan<br>";
        echo"Nama Lengkap : $nama<br>";
        echo"Jenis Kelamin : $jk<br>";
        echo"Tempat Lahir : $tempatL<br>";
        echo"Tanggal Lahir : $tanggalL<br>";
        echo"Nomor HP Siswa yang bisa dihubungi : $tlp<br>";
        echo"Email : $email<br>";
        echo"<hr>";
    }

    public function alamat_pendaftar($prov,$kota,$kec,$des,$alamat,$pos){

        echo"Provinsi : $prov<br>";
        echo"Kab/Kota : $kota<br>";
        echo"Kecamatan : $kec<br>";
        echo"Desa/Kelurahan : $des<br>";
        echo"Alamat : $alamat<br>";
        echo"Kode Pos : $pos<br>";
        echo"<hr>";
    }

    public function asal_sekolah($as,$als){

        echo"Nama Asal Sekolah : $as<br>";
        echo"Alamat Sekolah : $als<br>";
        echo"<hr>";
    }

    public function data_ortu($namao,$pekerjaan,$no,$ao){

        echo"Nama Lengkap Ayah / Ibu / Wali : $namao<br>";
        echo"Pekerjaan Ayah / Ibu / Wali : $pekerjaan<br>";
        echo"Nomor HP yang bisa dihubungi : $no<br>";
        echo"Alamat Lengkap : $ao<br>";
    }
}

$data = new ppdb;

echo $data -> data_diri("RPL","Fauzan M Ilham","Laki-laki","Bandung","27/11/2007","08388253299","fauzanbdg986@gmail.com");
echo $data -> alamat_pendaftar("Jawa Barat","Kab Bandung","Kec Baleendah","Rancamanyar","Kp Cupu,Kav Cembul Asri","40235");
echo $data -> asal_sekolah("SMP Muslimin","Ds Cintaasih,Samarang,Garut");
echo $data -> data_ortu("Asep Solihin","PNS","089531511971","Kab Bandung, Kec Baleendah, Ds Rancamanyar, Kp Cupu, Kav Cembul Asri, RT03 RW08.");


