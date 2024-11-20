<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="post">
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
            
            
        
</form>
    

    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $indo = $_POST['indo'];
        $ing = $_POST['ing'];
        $mtk = $_POST['mtk'];
        $pro = $_POST['pro'];

        switch ($jurusan) {
            case '':
                # code...
                break;
            
            default:
                # code...
                break;
        }

        if ($jurusan == "Rekayasa Perangkat Lunak") {
            if ($kelas == "X RPL 1") {
                echo"$kelas";
            }elseif ($kelas == "X RPL 2") {
                echo"$kelas";
            }elseif ($kelas == "X RPL 3") {
                echo"$kelas";
            }elseif ($kelas == "XI RPL 1") {
                echo"$kelas";
            }elseif ($kelas == "XI RPL 2") {
                echo"$kelas";
            }elseif ($kelas == "XI RPL 3") {
                echo"$kelas";
            }else {
                echo"jurusan tidak falid";
            }
        }elseif ($jurusan == "Teknik Bisnis Sepeda Motor") {
            if ($kelas == "X TBSM 1") {
                echo"$kelas";
            }elseif ($kelas == "XI TBSM 1") {
                echo"$kelas";
            }elseif ($kelas == "XI TBSM 2") {
                echo"$kelas";
            }else {
                echo"jurusan tidak falid";
            }
        }elseif ($jurusan == "Teknik Kendaraan Ringan Otomotif") {
            if ($kelas == "X TKRO 1") {
                echo"$kelas";
            }elseif ($kelas == "X TKRO 2") {
                echo"$kelas";
            }elseif ($kelas == "XI TKRO 1") {
                echo"$kelas";
            }else {
                echo"jurusan tidak falid";
            }
        }else {
            echo"jurusan tidak falid";
        }
    }
    ?>
    </table>
    </center>
</body>
</html>

<?php
//  if ($jurusan == "Rekayasa Perangkat Lunak") {
//     if ($kelas == "X RPL 1") {
//         echo"<tr>
//     <td>Kelas</td>
//     <td>:</td>
//     <td>$kelas</td>
// </tr>";
//     }elseif ($kelas == "X RPL 2") {
//         echo"<tr>
//     <td>Kelas</td>
//     <td>:</td>
//     <td>$kelas</td>
// </tr>";
//     }elseif ($kelas == "X RPL 3") {
//         echo"<tr>
//     <td>Kelas</td>
//     <td>:</td>
//     <td>$kelas</td>
// </tr>";
//     }elseif ($kelas == "XI RPL 1") {
//         echo"<tr>
//     <td>Kelas</td>
//     <td>:</td>
//     <td>$kelas</td>
// </tr>";
//     }elseif ($kelas == "XI RPL 2") {
//         echo"<tr>
//     <td>Kelas</td>
//     <td>:</td>
//     <td>$kelas</td>
// </tr>";
//     }elseif ($kelas == "XI RPL 3") {
//         echo"<tr>
//     <td>Kelas</td>
//     <td>:</td>
//     <td>$kelas</td>
// </tr>";
//     }else {
//         echo"<tr>
//     <td>Kelas</td>
//     <td>:</td>
//     <td>jurusan tidak falid</td>
// </tr>";
//     }
//     echo"
//     <tr>
//     <td>Jurusan</td>
//     <td>:</td>
//     <td>$jurusan</td>
//     </tr>";
// }elseif ($jurusan == "Teknik Bisnis Sepeda Motor") {
//     if ($kelas == "X TBSM 1") {
//         echo"<tr>
//     <td>Kelas</td>
//     <td>:</td>
//     <td>$kelas</td>
// </tr>";
//     }elseif ($kelas == "XI TBSM 1") {
//         echo"<tr>
//     <td>Kelas</td>
//     <td>:</td>
//     <td>$kelas</td>
// </tr>";
//     }elseif ($kelas == "XI TBSM 2") {
//         echo"<tr>
//     <td>Kelas</td>
//     <td>:</td>
//     <td>$kelas</td>
// </tr>";
//     }else {
//         echo"<tr>
//     <td>Kelas</td>
//     <td>:</td>
//     <td>jurusan tidak falid</td>
// </tr>";
//     }
//     echo"
//     <tr>
//     <td>Jurusan</td>
//     <td>:</td>
//     <td>$jurusan</td>
//     </tr>";
// }elseif ($jurusan == "Teknik Kendaraan Ringan Otomotif") {
//     if ($kelas == "X TKRO 1") {
//         echo"<tr>
//     <td>Kelas</td>
//     <td>:</td>
//     <td>$kelas</td>
// </tr>";
//     }elseif ($kelas == "X TKRO 2") {
//         echo"<tr>
//     <td>Kelas</td>
//     <td>:</td>
//     <td>$kelas</td>
// </tr>";
//     }elseif ($kelas == "XI TKRO 1") {
//         echo"<tr>
//     <td>Kelas</td>
//     <td>:</td>
//     <td>$kelas</td>
// </tr>";
//     }else {
//         echo"<tr>
//     <td>Kelas</td>
//     <td>:</td>
//     <td>jurusan tidak falid</td>
// </tr>";
//     }
//     echo"
//     <tr>
//     <td>Jurusan</td>
//     <td>:</td>
//     <td>$jurusan</td>
//     </tr>";
// }else {
//     echo"<tr>
//     <td>Kelas</td>
//     <td>:</td>
//     <td>jurusan tidak falid</td>
// </tr>";
// }