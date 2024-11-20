
<?php

if (isset($_POST['hitung'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    //Matematika
    $harianm = $_POST['nhm'];
    $tugasm = $_POST['ntm'];
    $utsm = $_POST['num'];
    $uasm = $_POST['nam'];
    //Indonesia
    $hariani = $_POST['nhi'];
    $tugasi = $_POST['nti'];
    $utsi = $_POST['nui'];
    $uasi =  $_POST['nai'];
    //inggris
    $harianing = $_POST['nhb'];
    $tugasing = $_POST['ntb'];
    $utsing = $_POST['nub'];
    $uasing =  $_POST['nab'];
    //Produktif
    $harianp = $_POST['nhp'];
    $tugasp = $_POST['ntp'];
    $utsp = $_POST['nup'];
    $uasp =  $_POST['nap'];


    echo"<center>
    <table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>$nama</td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td>$kelas</td>
    </tr>
    <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td>$jurusan</td>
    </tr>
</table>
    
    ";

    echo"
    <table border='1' cellspacing='0' width='75%'>
            <tr>
                <td>Mapel</td>
                <td>Harian</td>
                <td>Tugas</td>
                <td>UTS</td>
                <td>UAS</td>
                <td>Rata-rata</td>
                <td>Grade</td>
            </tr>
    ";
    class matematika{
       
        public $rata;

        public function hasilMtk($harian2, $tugas2, $uts2, $uas2){
              $this->rata = $harian2 + $tugas2 + $uts2 + $uas2;
              $rata1 = $this->rata / 4;

            echo"
                    
              
              <tr>
                        <td>Matematika</td>
                        <td>$harian2</td>
                        <td>$tugas2</td>
                        <td>$uts2</td>
                        <td>$uas2</td>
                        <td>$rata1</td>
                        ";
              if ($rata1 >= 75) {
                echo"<td>Tuntas</td></tr>
                    ";
              }else {
                echo"<td>Tidak Tuntas</td></tr>";
              }

        }


    }
    class indonesia{
        public function hasilInd($harian2, $tugas2, $uts2, $uas2){
            $this->rata = $harian2 + $tugas2 + $uts2 + $uas2;
            $rata1 = $this->rata / 4;

            echo"
            
             <tr>
                        <td>Indonesia</td>
                        <td>$harian2</td>
                        <td>$tugas2</td>
                        <td>$uts2</td>
                        <td>$uas2</td>
                        <td>$rata1</td>
                        ";
              if ($rata1 >= 75) {
                echo"<td>Tuntas</td></tr>
                    ";
              }else {
                echo"<td>Tidak Tuntas</td></tr>";
              }
        }

    }
    class inggris{
        public function hasilIng($harian2, $tugas2, $uts2, $uas2){
            $this->rata = $harian2 + $tugas2 + $uts2 + $uas2;
            $rata1 = $this->rata / 4;

            echo"
            
             <tr>
                        <td>Inggris</td>
                        <td>$harian2</td>
                        <td>$tugas2</td>
                        <td>$uts2</td>
                        <td>$uas2</td>
                        <td>$rata1</td>
                        ";
              if ($rata1 >= 75) {
                echo"<td>Tuntas</td></tr>
                    ";
              }else {
                echo"<td>Tidak Tuntas</td></tr>";
              }
        }

    }
    class produktif{
        public function hasilPro($harian2, $tugas2, $uts2, $uas2){
            $this->rata = $harian2 + $tugas2 + $uts2 + $uas2 ;
            $rata1 = $this->rata / 4;

            echo"
            
             <tr>
                        <td>Produktif</td>
                        <td>$harian2</td>
                        <td>$tugas2</td>
                        <td>$uts2</td>
                        <td>$uas2</td>
                        <td>$rata1</td>
                        ";
              if ($rata1 >= 75) {
                echo"<td>Tuntas</td></tr></table>";
              }else {
                echo"<td>Tidak Tuntas</td></tr></table>";
              }
              echo"</center>";
        }

    }

    $cetak = new matematika();
    echo $cetak->hasilMtk($harianm, $tugasm, $utsm, $uasm);
    $cetak = new indonesia();
    echo $cetak->hasilInd($hariani, $tugasi, $utsi, $uasi);
    $cetak = new inggris();
    echo $cetak->hasilIng($harianing, $tugasing, $utsing, $uasing);
    $cetak = new produktif();
    echo $cetak->hasilPro($harianm, $tugasm, $utsm, $uasm);
}

