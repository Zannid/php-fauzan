<?php

$nama = "Fauzan";
$jenisk = "Laki-laki";
$jenism = "Makann";
$menu = "Nasi Goreng";
$jumlah = 5;

if ($jenism == "Makanan") {
    if ($menu == "Nasi Goreng") {
        $harga = 10000;
    }elseif ($menu == "Mie Goreng") {
        $harga = 15000;
    }elseif ($menu == "Ayam Goreng") {
        $harga = 20000;
    }else {
        $harga = 0;
    }
}elseif ($jenism == "Minuman") {
    if ($menu = "Air Mineral") {
        $harga = 5000;
    }elseif ($menu = "Fresh Tea") {
        $harga = 7000;
    }elseif ($menu == "Jus") {
        $harga = 12000;
    }else {
        $harga= 0;
    }
}

$total = $harga * $jumlah;
echo" <table>
<tr>
    <td>Nama</td>
    <td>: $nama</td>
</tr>
<tr>
    <td>Jenis Kelamin</td>
    <td>: $jenisk</td>
</tr>
<tr>
    <td>Jenis</td>
    <td>: $jenism</td>
</tr>
<tr>
    <td>Menu</td>
    <td>: $menu</td>
</tr>
<tr>
    <td>Harga</td>
    <td>: $total</td>
</tr>
<tr>
    <td>Jumlah</td>
    <td>: $jumlah</td>
</tr>
</table>
---------------------------------

";
if ($total >= 50000) {
    $diskon = $total * 0.20;
} else {
   $diskon = 0;
}
$bayar = $total - $diskon;
echo"<table>
<tr>
<td>Total</td>
<td>: $total</td>
</tr>
<tr>
<td>Diskon 20%</td>
<td>: $diskon</td>
</tr>
</table>
---------------------------------
<table>
<tr>
<td>Total Bayar</td>
<td>: $bayar</td>
</tr>
</table>";

