<?php

// Kelas dasar Mahasiswa
class Mahasiswa {
    private $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function konsultasiDosenWali($dosen, $kampus) {
        return "Mahasiswa {$this->nama} berkonsultasi dengan dosen bapak {$dosen} di kampus {$kampus}.";
    }
}

// Kelas turunan DosenWali dari kelas Mahasiswa
class DosenWali extends Mahasiswa {
    private $kodeDosen;

    public function __construct($nama, $kodeDosen) {
        parent::__construct($nama);
        $this->kodeDosen = $kodeDosen;
    }

    public function getKodeDosen() {
        return $this->kodeDosen;
    }

    public function konsultasiDosenWali($dosen, $kampus) {
        return "Mahasiswa {$this->getNama()} berkonsultasi dengan dosen wali bapak {$dosen} di kampus {$kampus}.";
    }

    public function urusKRS() {
        return "Dosen wali {$this->getKodeDosen()} mengurus Kartu Rencana Studi (KRS).";
    }
}

// Penggunaan
$mahasiswa1 = new Mahasiswa("Moch. Adim Rizky Syah Putra");
echo $mahasiswa1->konsultasiDosenWali("Khafidurrahman", "Politeknik Negeri Jember");

$dosenWali1 = new DosenWali("Khafidurrahman", "DW001");
echo "<br>";
echo $dosenWali1->konsultasiDosenWali("Khafidurrahman", "Politeknik Negeri Jember");
echo "<br>";
echo $dosenWali1->urusKRS();
?>