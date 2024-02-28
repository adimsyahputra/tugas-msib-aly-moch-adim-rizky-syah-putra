<?php

class Mobil {
    public $merk;
    public $tahunProduksi;
    public $warna;

    // Constructor
    public function __construct($merk, $tahunProduksi, $warna) {
        $this->merk = $merk;
        $this->tahunProduksi = $tahunProduksi;
        $this->warna = $warna;
    }

    // Getter untuk mendapatkan nilai property private
    public function getMerk() {
        return $this->merk;
    }

    public function getTahunProduksi() {
        return $this->tahunProduksi;
    }

    public function getWarna() {
        return $this->warna;
    }

    // Setter untuk mengubah nilai property private
    public function setMerk($merk) {
        $this->merk = $merk;
    }

    public function setTahunProduksi($tahunProduksi) {
        $this->tahunProduksi = $tahunProduksi;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }
}

// Membuat objek Mobil
$mobil = new Mobil("Toyota", 2020, "Merah");

// Menggunakan getter untuk mendapatkan nilai property private
echo "Merk: " . $mobil->getMerk() . "<br>";
echo "Tahun Produksi: " . $mobil->getTahunProduksi() . "<br>";
echo "Warna: " . $mobil->getWarna() . "<br>";

// Menggunakan setter untuk mengubah nilai property private
$mobil->setMerk("Honda");
$mobil->setTahunProduksi(2022);
$mobil->setWarna("Biru");

// Menggunakan getter lagi untuk memastikan perubahan nilai property
echo "Merk: " . $mobil->getMerk() . "<br>";
echo "Tahun Produksi: " . $mobil->getTahunProduksi() . "<br>";
echo "Warna: " . $mobil->getWarna() . "<br>";

?>