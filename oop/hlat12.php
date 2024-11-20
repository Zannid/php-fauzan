<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
  <div class="container d-block mx-auto" width='50%'>
    <div class="row">
        <div class="col-md-6-mxauto">
  <div class="card" style="width: 500px; left: 200px;">
  <div class="card-header">
    <center>Pendaftaran</center>
  </div>
  <div class="card-body">
 
  

<?php

if (isset($_POST['submit'])) {
    $jurusan = $_POST['jurusan'];
    $nama = $_POST['nama'];
    $kelamin = $_POST['jeniskelamin'];
    $tempatL = $_POST['tempat'];
    $tgl = $_POST['tanggal'];
    $nos = $_POST['no'];
    $email = $_POST['email'];
    //alamat
    $prov = $_POST['prov'];
    $kab = $_POST['kab'];
    $kec = $_POST['kec'];
    $desa = $_POST['des'];
    $alamat = $_POST['alamat'];
    $pos = $_POST['pos'];
    //Asal sekolah
    $namasekolah = $_POST['namasekolah'];
    $alamatsekolah = $_POST['alamatsekolah'];
    //data ortu
    $wali = $_POST['wali'];
    $namawali = $_POST['namawali'];
    $pekerjaan = $_POST['pekerjaan'];
    $nohp = $_POST['nohp'];
    $alamatL = $_POST['alamatL'];

    class data{

        public function dataCalon($jurusan2, $nama2, $kelamin2, $tempatL2, $tgl2, $nos2, $email2){
            echo " <center>
                <p class='fs-2'>Data Diri Calon Pendaftar</p>
            </center>
            <center>
        <table>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>$jurusan2</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>$nama2</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>$kelamin2</td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td>:</td>
                <td>$tempatL2</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>$tgl2</td>
            </tr>
            <tr>
                <td>Nomor HP </td>
                <td>:</td>
                <td>$nos2</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>$email2</td>
            </tr>
        </table>
        </center>
        ";
        }

        public function dataAlamat($prov2, $kab2, $kec2, $desa2, $alamat2, $pos2){
            echo"
            <center>
                        <p class='fs-2'>Alamat Calon Pendaftar</p>
            </center>
            <center>
            <table>
                <tr>
                    <td>Provinsi</td>
                    <td>:</td>
                    <td>$prov2</td>
                </tr>
                <tr>
                    <td>Kab / Kota</td>
                    <td>:</td>
                    <td>$kab2</td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td>:</td>
                    <td>$kec2</td>
                </tr>
                <tr>
                    <td>Desa / Kelurahan</td>
                    <td>:</td>
                    <td>$desa2</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>$alamat2</td>
                </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td>:</td>
                    <td>$pos2</td>
                </tr>
            </table>
            </center>
                    ";
        }

        public function dataAsalSekolah($namasekolah2, $alamatsekolah2){
            echo"
            <center>
                        <p class='fs-2'>Data Asal Sekolah</p>
            </center>
            <center>
            <table>
                <tr>
                    <td>Nama Asal Sekolah</td>
                    <td>:</td>
                    <td>$namasekolah2</td>
                </tr>
                <tr>
                    <td>Alamat Sekolah</td>
                    <td>:</td>
                    <td>$alamatsekolah2</td>
                </tr>
            </table></center>
            ";
        }

        public function dataOrtu($wali2, $namawali2, $pekerjaan2, $nohp2, $alamatL2){
            echo"
              <center>
                <p class='fs-2'>Data Orang Tua</p>
                </center>
                <center>
                <table>
                    <tr>
                        <td>Nama Lengkap Ayah / Ibu / Wali</td>
                        <td>:</td>
                        <td>$wali2 - $namawali2</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ayah / Ibu / Wali</td>
                        <td>:</td>
                        <td>$pekerjaan2</td>
                    </tr>
                    <tr>
                        <td>Nomor HP</td>
                        <td>:</td>
                        <td>$nohp2</td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td>$alamatL2</td>
                    </tr>
                
                </table></center>
            
            ";
        }
    }

    $cetak = new data();
    echo $cetak->dataCalon($jurusan, $nama, $kelamin, $tempatL, $tgl, $nos, $email);
    echo $cetak->dataAlamat($prov, $kab, $kec, $desa, $alamat, $pos);
    echo $cetak->dataAsalSekolah($namasekolah, $alamatsekolah);
    echo $cetak->dataOrtu($wali, $namawali, $pekerjaan, $nohp, $alamatL);
}

?>

</div>
</div>
</div>
</div>
  </div>

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