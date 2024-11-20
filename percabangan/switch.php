<?php

// $lampu = "";

// switch ($lampu) {
//     case "Merah":
//         echo"Berhenti";
//         break;
//     case "Kuning":
//         echo"Bersiap";
//         break;
//     case "Hijau":
//         echo"Maju";
//         break;
    
//     default:
//         echo"Lampu tidak ada";
//         break;
// }

// $suka = true;

//  echo  $suka ? "Aku juga suka kamu": "Baiklah!";

$umur = 17;
$menikah = false;

if ($umur > 18) {
    if ($menikah) {
        echo"Selamat datang pak!";
    }else {
        echo"Selamat datang wahai pemuda!";
    }
}else {
    echo"Maaf website ini hanya untuk yang sudah berumur 18+";
}
?>