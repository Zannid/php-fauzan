<?php

$siswa = [
    [
        "nama" => "Rido",
        "kelas" => "XI RPL 1",
        "ekskul" => ["Seni Tari", "Karawitan", "Futsal"]
    ],
    [
        "nama" => "Sandi",
        "kelas" => "XI RPL 1",
        "ekskul" => ["Futsal"]
    ]
    ] 
        ;

foreach ($siswa as $murid) {
    echo"Nama : " .$murid["nama"]."<br>";
    echo"Kelas : " .$murid["kelas"]."<br>";
    
         echo"Ekskul:<ul>";
       foreach ($murid["ekskul"] as $ekskul) {
        echo"
        <li>" .$ekskul. "</li>
        ";
       }
    echo"</ul><hr>";
    
   
} 


