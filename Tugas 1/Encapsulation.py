class Mobil:
    def __init__(self, merk, tahun_produksi, warna):
        self.merk = merk
        self.tahun_produksi = tahun_produksi
        self.warna = warna

    # Getter untuk mendapatkan nilai property private
    def get_merk(self):
        return self.merk

    def get_tahun_produksi(self):
        return self.tahun_produksi

    def get_warna(self):
        return self.warna

    # Setter untuk mengubah nilai property private
    def set_merk(self, merk):
        self.merk = merk

    def set_tahun_produksi(self, tahun_produksi):
        self.tahun_produksi = tahun_produksi

    def set_warna(self, warna):
        self.warna = warna

# Membuat objek Mobil
mobil = Mobil("Toyota", 2020, "Merah")

# Menggunakan getter untuk mendapatkan nilai property private
print("Merk:", mobil.get_merk())
print("Tahun Produksi:", mobil.get_tahun_produksi())
print("Warna:", mobil.get_warna())

# Menggunakan setter untuk mengubah nilai property private
mobil.set_merk("Honda")
mobil.set_tahun_produksi(2022)
mobil.set_warna("Biru")

# Menggunakan getter lagi untuk memastikan perubahan nilai property
print("Merk:", mobil.get_merk())
print("Tahun Produksi:", mobil.get_tahun_produksi())
print("Warna:", mobil.get_warna())