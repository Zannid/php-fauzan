<?php

$artikel = [
    "judul" => "Belajar Pemrograman PHP",
    "penulis" => "Petani Kode",
    "view" => 128,
    "tanggal" => "20 Juni 2005"

];

echo"<p>" .$artikel["judul"]. "</p>";
echo"<p>oleh:" .$artikel["penulis"]. "</p>";
echo"<p>View:" .$artikel["view"]. "</p>";
echo"<p> Tanggal:" .$artikel["tanggal"]. "</p>";
