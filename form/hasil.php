<?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $indo = $_POST['indo'];
        $ing = $_POST['ing'];
        $mtk = $_POST['mtk'];
        $pro = $_POST['pro'];

        
        echo"
        <center>
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
        <tr>
                <td>Nilai B.Indonesia</td>
                <td>:</td>
                <td>$indo</td>
            </tr>
            <tr>
                <td>Nilai Inggris</td>
                <td>:</td>
                <td>$ing</td>
            </tr>
            <tr>
                <td>Nilai Matematika</td>
                <td>:</td>
                <td>$mtk</td>
            </tr>
            <tr>
                <td>Nilai Produktif</td>
                <td>:</td>
                <td>$pro</td>
            </tr>
       
        ";
        $rata = $indo + $ing + $mtk + $pro;
        $rata /=4;
        echo"
        <tr>
            <td>Rata-rata</td>
            <td>:</td>
            <td>$rata</td>
        </tr>
        ";

        if ($rata > 75) {
            echo"
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>Tuntas</td>
            </tr>
            
            ";
        }else {
            echo"<tr>
                <td>Status</td>
                <td>:</td>
                <td>Tidak Tuntas</td>
            </tr> </table>
    </center>
            ";
        }

    }
    ?>