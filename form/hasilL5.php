<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="smk.png">
    
    <title>Hello, world!</title>
  </head>
  <body>
    <style>
        
    </style>
   
    <?php

    if (isset($_POST['proses'])) {
        $no = $_POST['no'];
        $nama = $_POST['nama'];
        $unit = $_POST['unit'];
        $tgl = $_POST['tgl'];
        $jabatan = $_POST['jabatan'];
        $bpjs = $_POST['bpjs'];
        $kerja = $_POST['kerja'];
        $pinjaman = $_POST['pinjaman'];
        $status = $_POST['status'];
        $tabungan = $_POST['tabungan'];
        $lain = $_POST['lain'];


    

    if ($jabatan == "Kepala Sekolah") {
        $gaji = 10000000;
    }elseif ($jabatan == "Wakasek") {
        $gaji = 7500000;
    }elseif ($jabatan == "Guru") {
        $gaji = 5000000;
    }elseif ($jabatan == "OB") {
        $gaji = 2500000;
    }

    if ($kerja > 5) {
        $tunjangan = 1000000;
    }else {
        $tunjangan = 0;
    }
    if ($status == "Tetap") {
        $bonus = 500000;
    }else {
        $bonus = 0;
    }
   


    
    $potong = $bpjs + $pinjaman + $tabungan + $lain;
   
   
    echo"
     <div class='container mx-auto mt-2 p-2' width='50%'>
    <div class='row' style='width: 35rem;'>
        <div class='col-md-6-mxauto'>
                <div class='card shadow-lg mb-5 bg-body rounded' style='width: 25rem; left: 250px;'>
  <div class='card-header'>
     <center>$nama</center>
  </div>

      
        <div class='card-body text-primary'>
            <center>
                <p class='fs-2'>STRUK GAJI</p>
            </center>
            <center>
            <table>
                <tr>
                    <td>No</td>
                    <td>:</td>
                    <td>$no</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>$nama</td>
                </tr>
                <tr>
                    <td>Unit Pendidikan</td>
                    <td>:</td>
                    <td>$unit</td>
                </tr>
                <tr>
                    <td>Tanggal Gaji </td>
                    <td>:</td>
                    <td>$tgl</td>
                </tr>
            </table></center>
            <center>
                <p class='fs-1'>Gaji</p>
            </center>
            <center>
            <table>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>$jabatan</td>
                </tr>
                <tr>
                    <td>Gaji</td>
                    <td>:</td>
                    <td>$gaji</td>
                </tr>
                <tr>
                    <td>Lama Kerja</td>
                    <td>:</td>
                    <td>$kerja</td>
                </tr>
                <tr>
                    <td>Tunjangan Lama Kerja</td>
                    <td>:</td>
                    <td>$tunjangan</td>
                </tr>
                <tr>
                    <td>Status Kerja</td>
                    <td>:</td>
                    <td>$status</td>
                </tr>";
                
                echo"
                <tr>
                    <td>Bonus</td>
                    <td>:</td>
                    <td>$bonus</td>
                    ";
                  
                 $gk = $gaji + $tunjangan + $bonus;
                
                 
                echo"
               
                <tr>
                    <td><b>Gaji Kotor</b></td>
                    <td><b>:</b></td>
                    <td><b>$gk</b></td>
                </tr>";
           
                echo"
            </table></center>
            <center>
                <p class='fs-1'>Potongan</p>
            </center>
            <center>
            <table>
                <tr>
                    <td>BPJS</td>
                    <td>:</td>
                    <td>$bpjs</td>
                </tr>
                <tr>
                    <td>Pinjaman</td>
                    <td>:</td>
                    <td>$pinjaman</td>
                </tr>
                <tr>
                    <td>Tabungan</td>
                    <td>:</td>
                    <td>$tabungan</td>
                </tr>
                <tr>
                    <td>Lainnya</td>
                    <td>:</td>
                    <td>$lain</td>
                </tr>
                <tr>
                    
                    <td><b>Total Potongan</b></td>
                    <td><b>:</b></td>
                    <td><b>$potong</b></td>
                
                </tr>
            </table></center>";
            
            $bersih = $gk - $potong;
            echo"<center>
            <p class='fs-1'>Total</p>
            <p class='fs-2'>Gaji Bersih:$bersih</p></center>
        </div>
        </div>
        </div>
    </div>
 </div>
";
}?>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>