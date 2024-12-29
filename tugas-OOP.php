<?php

// Class Buku
class Buku {
    protected $judul;
    protected $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function infoBuku() {
        return "Judul: {$this->judul}, Penulis: {$this->penulis}";
    }
}

// Class BukuDigital (Turunan dari Buku)
class BukuDigital extends Buku {
    private $ukuranFile;

    public function __construct($judul, $penulis, $ukuranFile) {
        parent::__construct($judul, $penulis);
        $this->ukuranFile = $ukuranFile;
    }

    public function infoBuku() {
        return parent::infoBuku() . ", Ukuran File: {$this->ukuranFile} MB";
    }
}

// Contoh Penggunaan
$bukuCetak = new Buku("Pemrograman PHP", "John Doe");
echo $bukuCetak->infoBuku(); // Output: Judul: Pemrograman PHP, Penulis: John Doe

echo "\n";

$bukuDigital = new BukuDigital("Pemrograman PHP", "John Doe", 5);
echo $bukuDigital->infoBuku(); // Output: Judul: Pemrograman PHP, Penulis: John Doe, Ukuran File: 5 MB

?>
