<?php
// ==========================================
// 1. Pendekatan Prosedural untuk Data 3 Buku
// ==========================================
$buku_prosedural = [
    ["judul" => "Belajar Pemrograman PHP", "penulis" => "Andi Prasetyo", "tahun" => 2021],
    ["judul" => "Pemrograman Berorientasi Objek", "penulis" => "Budi Raharjo", "tahun" => 2022],
    ["judul" => "Algoritma dan Struktur Data", "penulis" => "Siti Aminah", "tahun" => 2020]
];

echo "<h3>Daftar Buku (Pendekatan Prosedural)</h3>";
foreach ($buku_prosedural as $buku) {
    echo "Judul: " . $buku['judul'] . " | Penulis: " . $buku['penulis'] . " | Tahun: " . $buku['tahun'] . "<br>";
}

echo "<hr>";

// ==========================================
// 2. Pendekatan Berorientasi Objek (OOP) untuk Data 3 Buku
// ==========================================
class Buku {
    public $judul;
    public $penulis;
    public $tahun;

    public function __construct($judul, $penulis, $tahun) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }

    public function tampilkanInfo() {
        return "Judul: " . $this->judul . " | Penulis: " . $this->penulis . " | Tahun: " . $this->tahun;
    }
}

$buku1 = new Buku("Belajar Pemrograman PHP", "Andi Prasetyo", 2021);
$buku2 = new Buku("Pemrograman Berorientasi Objek", "Budi Raharjo", 2022);
$buku3 = new Buku("Algoritma dan Struktur Data", "Siti Aminah", 2020);

echo "<h3>Daftar Buku (Pendekatan OOP)</h3>";
echo $buku1->tampilkanInfo() . "<br>";
echo $buku2->tampilkanInfo() . "<br>";
echo $buku3->tampilkanInfo() . "<br>";
?>
