<?php

$org = [
    [
        "nama" => "Safitri",
        "daftar" =>[
            [
             "buah" => "Anggur",
             "jenis" => ["jenis1"=>"Anggur Ijo",
             "jenis2"=>"Anggur Putih"]
             ]
        ]
       
    ],
    [
        "nama" => "Rahman",
        
            
            "daftar" => [
                [
                "buah" => "Alpukat",
            "jenis" => [
            "jenis1" =>"Alpukat Mentega",
            "jenis2" => "Alpukat Biasa"
            ]
            ],
            [
                "buah" => "Apel",
               "jenis" => [
                  "jenis1" => "Apel Merah",
                 "jenis2" => "Apel Hijau",
            ]
               
            ]
            ],
           
             

    
    ]
            ];

    foreach($org as $orang){
        echo"Nama Pemilik : ".$orang["nama"]."<br>";
        echo"Daftar Buah Kesukaan : <ul>";
        foreach ($orang["daftar"] as $buah) {
            echo"<li>".$buah["buah"]."</li>";
            foreach ($buah["jenis"] as $jenis) {
                echo"<ol>-".$jenis."</ol>";
            }
        };
        echo"</ul>";
        echo"<hr>";
       
    };

// $org = [
//     [
//         "nama" => "Safitri",
//         "buah" => [
//             "buaha" => "Anggur"
//         ]
        
//     ],
//     [
//         "nama" => "Rahman",
//         "buah" => "Alpukat",
//         "jenis" => ["Anggur Ijo","Anggur Putih"]
//     ]
//     ];

//     foreach($org as $orang){
//         echo"Nama Pemilik : ".$orang["nama"]."<br>";
//         echo"Daftar Buah Kesukaan <ul><li>".$orang["buah"]."</ul></li><br>";
//     }