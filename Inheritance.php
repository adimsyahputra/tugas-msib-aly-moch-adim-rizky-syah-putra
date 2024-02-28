<?php

class Mobil {
    public $merk;
    public $tahun;
    public $harga;

    public function __construct($merk, $tahun, $harga) {
        $this->merk = $merk;
        $this->tahun = $tahun;
        $this->harga = $harga;
    }

    public function info() {
        return "Mobil ".$this->merk." tahun ".$this->tahun." dengan harga ".$this->harga;
    }
}

class Matic extends Mobil {
    private $transmisi;

    public function __construct($merk, $tahun, $harga, $transmisi) {
        parent::__construct($merk, $tahun, $harga);
        $this->transmisi = $transmisi;
    }

    public function info() {
        return parent::info()." dan transmisi ".$this->transmisi;
    }
}

class Manual extends Mobil {
    private $transmisi;

    public function __construct($merk, $tahun, $harga, $transmisi) {
        parent::__construct($merk, $tahun, $harga);
        $this->transmisi = $transmisi;
    }

    public function info() {
        return parent::info()." dan transmisi ".$this->transmisi;
    }
}

// Contoh penggunaan
$mobil_matic = new Matic("Toyota", 2022, 250000000, "otomatis");
$mobil_manual = new Manual("Honda", 2020, 200000000, "manual");

echo $mobil_matic->info();  // Output: Mobil Toyota tahun 2022 dengan harga 250000000 dan transmisi otomatis
echo "<br>";
echo $mobil_manual->info();  // Output: Mobil Honda tahun 2020 dengan harga 200000000 dan transmisi manual

?>