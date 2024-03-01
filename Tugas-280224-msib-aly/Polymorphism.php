<?php

// Interface
interface Binatang {
    public function bersuara();
}

// Kelas kucing yang mengimplementasikan interface Binatang
class Kucing implements Binatang {
    public function bersuara() {
        return "Meong";
    }
}

// Kelas anjing yang juga mengimplementasikan interface Binatang
class Anjing implements Binatang {
    public function bersuara() {
        return "Guk Guk";
    }
}

// Fungsi yang menerima objek Binatang sebagai parameter
function suaraHewan(Binatang $hewan) {
    echo $hewan->bersuara() . "<br>";
}

// Contoh penggunaan
$kucing = new Kucing();
$anjing = new Anjing();

suaraHewan($kucing); // Output: Meong
suaraHewan($anjing); // Output: Guk Guk

?>