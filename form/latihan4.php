<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="hasil.php" method="post">
        <h2>Nilai Ujian Nasional</h2>

        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><select name="jurusan" id="">
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
                    <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                </select></td>
            </tr>
            <tr>
                <td><br><b>Nilai Ujian</b></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Nilai B.Indonesia</td>
                <td>:</td>
                <td><input type="number" name="indo"></td>
            </tr>
            <tr>
                <td>Nilai Inggris</td>
                <td>:</td>
                <td><input type="number" name="ing"></td>
            </tr>
            <tr>
                <td>Nilai Matematika</td>
                <td>:</td>
                <td><input type="number" name="mtk"></td>
            </tr>
            <tr>
                <td>Nilai Produktif</td>
                <td>:</td>
                <td><input type="number" name="pro"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
            
</table>
</center> 
</form>
    

  
    
</body>
</html>