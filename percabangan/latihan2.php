<?php

$nama = "Fauzan";
$jenisk = "Laki-laki";
$jenism = "Makanan";
$menu = "Mie Goreng";
$jumlah = 1;

 

if ($jenism == "Makanan") {
    if ($menu == "Nasi Goreng") {
        $harga = 10000;
        $total = $jumlah * $harga;
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
                            <td>: $harga</td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>: $jumlah</td>
                        </tr>
                    </table>
                    ---------------------------------";

        if ($total >= 50000) {
            $diskon = $total * 0.20;
            $bayar = $total - $diskon;
            echo" 
            
            <table>
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
            </table>
        ";
        }else {
            echo" <table>
                <tr>
                    <td>Total Bayar</td>
                    <td>: $total</td>
                </tr>
            </table>";
        }
    }elseif ($menu == "Mie Goreng") {
        $harga = 15000;
        $total = $jumlah * $harga;
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
                    <td>: $harga</td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>: $jumlah</td>
                </tr>
            </table>
            ---------------------------------";

        if ($total >= 50000) {
        $diskon = $total * 0.20;
        $bayar = $total - $diskon;
        echo"

        <table>
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
        </table>
        ";
        }else {
        echo"<table>
                <tr>
                    <td>Total Bayar</td>
                    <td>: $total</td>
                </tr>
            </table>";
        }

    }elseif ($menu == "Ayam Goreng") {
        $harga=20000;
        $total = $jumlah * $harga;
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
                    <td>: $harga</td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>: $jumlah</td>
                </tr>
            </table>
            ---------------------------------";

        if ($total >= 50000) {
        $diskon = $total * 0.20;
        $bayar = $total - $diskon;
        echo"

        <table>
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
        </table>
        ";
        }else {
        echo"<table>
                <tr>
                    <td>Total Bayar</td>
                    <td>: $total</td>
                </tr>
            </table>";
        }
    }else{
        echo"Menu tidak ada";
    }
}elseif ($jenism == "Minuman") {
    echo"$jenism";
    if ($menu == "Air Mineral") {
       $harga = 5000;
       $total = $jumlah * $harga;

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
                <td>: $harga</td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>: $jumlah</td>
            </tr>
        </table>
        ---------------------------------";

        if ($total >= 50000) {
        $diskon = $total * 0.20;
        $bayar = $total - $diskon;
        echo"

        <table>
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
        </table>
        ";
        }else {
        echo"<table>
                <tr>
                    <td>Total Bayar</td>
                    <td>: $total</td>
                </tr>
            </table>";
        }
    }elseif ($menu == "Fresh Tea") {
        $harga = 7000;
        $total = $jumlah * $harga;

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
                    <td>: $harga</td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>: $jumlah</td>
                </tr>
            </table>
            ---------------------------------";

        if ($total >= 50000) {
        $diskon = $total * 0.20;
        $bayar = $total - $diskon;
        echo"

        <table>
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
        </table>
        ";
        }else {
        echo"<table>
                <tr>
                    <td>Total Bayar</td>
                    <td>: $total</td>
                </tr>
            </table>";
        }
    }elseif ($menu == "Jus") {
        $harga = 12000;
        $total = $jumlah * $harga;

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
                    <td>: $harga</td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>: $jumlah</td>
                </tr>
            </table>
            ---------------------------------";

        if ($total >= 50000) {
        $diskon = $total * 0.20;
        $bayar = $total - $diskon;
        echo"

        <table>
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
        </table>
        ";
        }else {
        echo"<table>
                <tr>
                    <td>Total Bayar</td>
                    <td>: $total</td>
                </tr>
            </table>";
        }
    }
}else{
    echo"Menu tidak ada";
}

      
        ?>