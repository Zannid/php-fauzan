<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$nama = "Fauzan Muhamad ILham";
$kelas = "XI RPL 1";
$indo = 80;
$inggris = 70;
$matematika = 80;
$produktif = 90;
$hasil = $indo + $inggris + $matematika + $produktif;
$hasil /=4;

echo"
<table>
    <tr>
        <td>Nama </td>
        <td>: $nama</td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>: $kelas</td>
    </tr>
</table>
<table>
    <tr>
        <td>Nilai B.Indonesia</td>
        <td>: $indo</td>
    </tr>
    <tr>
        <td>Nilai B.Inggris</td>
        <td>: $inggris</td>
    </tr>
    <tr>
        <td>Matematika</td>
        <td>: $matematika</td>
    </tr>
    <tr>
        <td>Produktif</td>
        <td>: $produktif</td>
    </tr>
    <tr>
        <td>Rata-rata</td>
        <td>: $hasil</td>
    </tr>
</table>
";

echo"------------------------------";

if ($hasil >= 75) {
    echo"<table>
    <tr>
    <td>Status : Anda Lulus</td>
    <td></td>
    </tr>
    </table>";
}else {
    echo"<td>Status : Anda Tidak Lulus</td>";
}
?>



</body>
</html>