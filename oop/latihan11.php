<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <center>
        <form action="hlat11.php" method="post">
        <h2>Rapot Siswa</h2>

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
        <td></td>
        <td></td>
        <td><h3>Nilai Matematika</h3></td>
       </tr>
        
        
            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td><input type="number" name="nhm"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="number" name="ntm"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input type="number" name="num"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="number" name="nam"></td>
            </tr>
        <tr>
        <td></td>
        <td></td>
        <td><h3>Nilai Bahasa Indonesia</h3></td>
       </tr>
        
        
        <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td><input type="number" name="nhi"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="number" name="nti"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input type="number" name="nui"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="number" name="nai"></td>
            </tr>
        <tr>
        <td></td>
        <td></td>
        <td><h3>Nilai Bahasa Inggris</h3></td>
       </tr>
        
       
        <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td><input type="number" name="nhb"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="number" name="ntb"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input type="number" name="nub"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="number" name="nab"></td>
            </tr>
         <tr>
        <td></td>
        <td></td>
        <td><h3>Nilai Produktif</h3></td>
       </tr>
        
    
        <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td><input type="number" name="nhp"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="number" name="ntp"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input type="number" name="nup"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="number" name="nap"></td>
            </tr>
            <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="hitung" value="Hitung"></td>
       </tr>
        </table>
        </form>
     </center>
</body>
</html>