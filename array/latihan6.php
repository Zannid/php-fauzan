<?php

$novel = [
    [
        "judul" => "Dilan 1991",
        "penulis" => "Pidi baik",
        "tanggal_rilis" => "20 November 2017",
        "penerbit" => "Airlangga"
    ],
    [
        "judul" => "Laskar Pelangi",
        "penulis" => "Andrea Hirata",
        "tanggal_rilis" => " 28 september 2008.",
        "penerbit" => "Bentang Pustaka"
    ],
    [
        "judul" => "Light Novel The Eminence in Shadow 1",
        "penulis" => "Daisuke Aizawa",
        "tanggal_rilis" => "26 September 2024",
        "penerbit" => "Phoenix Gramedia Indonesia"
    ],
    [
        "judul" => "Dunia Sophie",
        "penulis" => "Jostein Gaarder",
        "tanggal_rilis" => "15 Agustus 2024",
        "penerbit" => "Mizan"
    ],
    [
        "judul" => "Tidak Jatuh Cinta",
        "penulis" => "PRayni M. Massardi & Erby S",
        "tanggal_rilis" => "26 Januari 2024",
        "penerbit" => "Penerbit Buku Kompas"
    ]
    ];

    foreach ($novel as $buku) {
        echo"Judul : " .$buku["judul"]."<br>";
        echo"Penulis : " .$buku["penulis"]."<br>";
        echo"Tanggal Rilis : " .$buku["tanggal_rilis"]."<br>";
        echo"Penerbit : " .$buku["penerbit"]."<br>";
       echo"<hr>";
    }