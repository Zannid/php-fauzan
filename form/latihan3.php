<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <img src="smk.png" alt="" width="15%">
    <form action="" method="post">
    <h2>Form Biodata Diri</h2>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="lahir"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
           
            <input type="radio" name="kelamin" value="Laki-laki">Laki-laki
        <input type="radio" name="kelamin" id="" value="Perempuan">Perempuan
        </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" id=""></textarea></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name="agama" id="">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
            </select></td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td><select name="pendidikan" id="">
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="SMK">SMK</option>
            </select></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><select name="status" id="">
                <option value="Sumdah Menikah">Sudah Menikah</option>
                <option value="Belum Menikah">Belum Menikah</option>
            </select></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>
               
            <input type="checkbox" name="hobi" id="" value="Membaca">Membaca
                <input type="checkbox" name="hobi" id="" value="Menulis">Menulis
                <input type="checkbox" name="hobi" id="" value="Ngepush">Ngepush
            
        </td>  
        </tr>
        <tr>
            <td>Cita-cita</td>
            <td>:</td>
            <td><select name="cita" id="">
                <option value="Programmer">Programmer</option>
            </select></td>
        </tr>
        <tr>
            <td>Kata-kata Bijak</td>
            <td>:</td>
            <td><textarea name="kata" id=""></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="KIRIM"></td>
        </tr>
    </table>
</form>
</center>   

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $lahir = $_POST['lahir'];
    $tanggal = $_POST['tanggal'];
    $kelamin = $_POST['kelamin'];
    $alamat = $_POST['alamat'];
    $pendidikan = $_POST['pendidikan'];
    $status = $_POST['status'];
    $agama = $_POST['agama'];
    $hobi = $_POST['hobi'];
    $cita = $_POST['cita'];
    $kata = $_POST['kata'];

echo"
<center>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>$nama</td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>$lahir</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>$tanggal</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>$kelamin</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>$alamat</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>$agama</td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td>$pendidikan</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td>$status</td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>$hobi</td>
        </tr>
        <tr>
            <td>Cita-cita</td>
            <td>:</td>
            <td>$cita</td>
        </tr>
        <tr>
            <td>Kata-kata Bijak</td>
            <td>:</td>
            <td>$kata</td>
        </tr>
    </table>
</center>
";
}
?>
</body>
</html>