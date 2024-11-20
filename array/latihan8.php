<?php
 
$dataJSON = '[
    {
       "no": "1001",
       "judul": "Harry Potter and the Sorcerers Stone",
       "genre": "Fantasi",
       "penulis": "J.K. Rowling",
       "penerbit": "Bloomsbury",
       "tahun_rilis": "1997"
    },
    {
       "no": "1002",
       "judul": "The Great Gatsby",
       "genre": "Fiksi Klasik",
       "penulis": "F. Scott Fitzgerald",
       "penerbit": "Charles Scribners Sons",
       "tahun_rilis": "1925"
    },
    {
       "no": "1003",
       "judul": "To Kill a Mockingbird",
       "genre": "Fiksi Klasik",
       "penulis": "Harper Lee",
       "penerbit": "J.B. Lippincott & Co.",
       "tahun_rilis": "1960"
    },
    {
       "no": "1004",
       "judul": "1984",
       "genre": "Dystopian",
       "penulis": "George Orwell",
       "penerbit": "Secker & Warburg",
       "tahun_rilis": "1949"
    },
    {
       "no": "1005",
       "judul": "The Catcher in the Rye",
       "genre": "Fiksi Klasik",
       "penulis": "J.D. Salinger",
       "penerbit": "Little, Brown and Company",
       "tahun_rilis": "1951"
    },
    {
       "no": "1006",
       "judul": "Pride and Prejudice",
       "genre": "Romantis",
       "penulis": "Jane Austen",
       "penerbit": "T. Egerton",
       "tahun_rilis": "1813"
    },
    {
       "no": "1007",
       "judul": "The Lord of the Rings: The Fellowship of the Ring",
       "genre": "Fantasi",
       "penulis": "J.R.R. Tolkien",
       "penerbit": "Allen & Unwin",
       "tahun_rilis": "1954"
    },
    {
       "no": "1008",
       "judul": "The Alchemist",
       "genre": "Fiksi Spiritual",
       "penulis": "Paulo Coelho ",
       "penerbit": "HarperCollins",
       "tahun_rilis": "1988 "
    },
    {
       "no": "1009",
       "judul": "The Diary of a Young Girl",
       "genre": "Non-Fiksi",
       "penulis": "Anne Frank",
       "penerbit": "Contact Publishing",
       "tahun_rilis": "1947"
    },
    {
       "no": "1010",
       "judul": "The Hobbit",
       "genre": "Fantasi",
       "penulis": "J.R.R. Tolkien",
       "penerbit": "George Allen & Unwin",
       "tahun_rilis": "1937"
    },
    {
       "no": "1011",
       "judul": "Brave New World",
       "genre": "Dystopian",
       "penulis": "Aldous Huxley",
       "penerbit": "Chatto & Windus",
       "tahun_rilis": "1932"
    },
    {
       "no": "1012",
       "judul": "The Picture of Dorian Gray",
       "genre": "Fiksi Klasik",
       "penulis": "Oscar Wilde",
       "penerbit": "Lippincotts Monthly Magazine",
       "tahun_rilis": "1890"
    },
    {
       "no": "1013",
       "judul": "The Fault in Our Stars",
       "genre": "Romantis, Drama",
       "penulis": "John Green",
       "penerbit": " Dutton Books",
       "tahun_rilis": "2012"
    },
    {
       "no": "1014",
       "judul": "The Hunger Games",
       "genre": "Dystopian",
       "penulis": "Suzanne Collins",
       "penerbit": " Scholastic",
       "tahun_rilis": "2008"
    },
    {
       "no": "1015",
       "judul": "The Kite Runner",
       "genre": "Drama",
       "penulis": "Khaled Hosseini",
       "penerbit": "Riverhead Books",
       "tahun_rilis": "2003"
    },
    {
       "no": "1016",
       "judul": "The Road",
       "genre": "Dystopian",
       "penulis": "Cormac McCarthy",
       "penerbit": "Knopf",
       "tahun_rilis": "2006"
    },
    {
       "no": "1017",
       "judul": "Little Women",
       "genre": "Fiksi Klasik",
       "penulis": "Louisa May Alcott",
       "penerbit": "Roberts Brothers",
       "tahun_rilis": "1868"
    },
    {
       "no": "1018",
       "judul": "The Hitchhikers Guide to the Galaxy",
       "genre": "Sci-Fi, Komed",
       "penulis": "Douglas Adams",
       "penerbit": "Pan Books",
       "tahun_rilis": "1979"
    },
    {
       "no": "1019",
       "judul": "Life of Pi",
       "genre": "Fiksi Spiritual",
       "penulis": "Yann Martel",
       "penerbit": "Knopf",
       "tahun_rilis": "2001"
    },
    {
       "no": "1020",
       "judul": "The Girl with the Dragon Tattoo",
       "genre": "Misteri, Thriller",
       "penulis": "Stieg Larsson",
       "penerbit": "Norstedts Förlag",
       "tahun_rilis": "2005"
    }
]';

$data = json_decode($dataJSON);
echo"
<center><h2>Kumpulan Novel Terbaru</h2></center>
<center><table border=1 cellspacing=0 cellspading=0 width=80%>
    <tr>
        <td>No</td>
        <td>Judul</td>
        <td>Genre</td>
        <td>Penulis</td>
        <td>Penerbit</td>
        <td>Tahun Rilis</td>
    </tr>";
foreach ($data as $novel) {
echo"
    <tr>
        <td>{$novel->no}</td>
        <td>{$novel->judul}</td>
        <td>{$novel->genre}</td>
        <td>{$novel->penulis}</td>
        <td>{$novel->penerbit}</td>
        <td>{$novel->tahun_rilis}</td>";
    

    // echo"No : {$novel->no} <br>";
    // echo"Judul : {$novel->judul} <br>";
    // echo"Genre: {$novel->genre} <br>";
    // echo"Penulis : {$novel->penulis} <br>";
    // echo"Penerbit : {$novel->penerbit} <br>";
    // echo"Tahun Rilis : {$novel->tahun_rilis} <br>";
    // echo"<hr>";
};
echo"</tr>
</table></center>
";
?>



