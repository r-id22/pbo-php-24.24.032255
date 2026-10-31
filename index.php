<?php
// Pendekatan Prosedural untuk Data 3 Buku

$buku_prosedural = [
    ["judul" => "Belajar Pemrograman PHP", "penulis" => "Andi Prasetyo", "tahun" => 2021],
    ["judul" => "Pemrograman Berorientasi Objek", "penulis" => "Budi Raharjo", "tahun" => 2022],
    ["judul" => "Algoritma dan Struktur Data", "penulis" => "Siti Aminah", "tahun" => 2020]
];

echo "<h3>Daftar Buku (Pendekatan Prosedural)</h3>";
foreach ($buku_prosedural as $buku) {
    echo "Judul: " . $buku['judul'] . " | Penulis: " . $buku['penulis'] . " | Tahun: " . $buku['tahun'] . "<br>";
}
?>

