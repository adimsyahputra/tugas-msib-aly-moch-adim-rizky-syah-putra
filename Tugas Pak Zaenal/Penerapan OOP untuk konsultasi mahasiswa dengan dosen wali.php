<?php
// Kelas Orang
class Orang {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

// Kelas Mahasiswa yang mewarisi dari kelas Orang
class Mahasiswa extends Orang {
    private $nim;

    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    public function konsultasiDosenWali($dosenWali) {
        return "Mahasiswa " . $this->nama . " dengan NIM " . $this->nim . " sedang berkonsultasi dengan Dosen Wali " . $dosenWali->getNama() . " untuk mengurus KRS di kampus di gedung Teknologi Informasi, kelas 3.3.";
    }
}

// Kelas Dosen
class Dosen {
    private $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

// Membuat objek Mahasiswa dan Dosen
$mahasiswa = new Mahasiswa("Moch. Adim Rizky Syah Putra", "E31222699");
$dosenWali = new Dosen("Khafidurrahman S.Kom");

// Mahasiswa berkonsultasi dengan Dosen Wali
echo $mahasiswa->konsultasiDosenWali($dosenWali);
?>
