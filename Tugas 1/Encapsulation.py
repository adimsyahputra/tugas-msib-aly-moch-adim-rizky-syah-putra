class Mobil:
    def __init__(self, merk, tahun_produksi, warna):
        self.merk = merk
        self.tahun_produksi = tahun_produksi
        self.warna = warna

    def get_merk(self):
        return self.merk

    def get_tahun_produksi(self):
        return self.tahun_produksi

    def get_warna(self):
        return self.warna

    def set_merk(self, merk):
        self.merk = merk

    def set_tahun_produksi(self, tahun_produksi):
        self.tahun_produksi = tahun_produksi

    def set_warna(self, warna):
        self.warna = warna

# Membuat objek Mobil
mobil = Mobil("Toyota", 2020, "Merah")

print("Merk:", mobil.get_merk())
print("Tahun Produksi:", mobil.get_tahun_produksi())
print("Warna:", mobil.get_warna())

mobil.set_merk("Honda")
mobil.set_tahun_produksi(2022)
mobil.set_warna("Biru")

print("Merk:", mobil.get_merk())
print("Tahun Produksi:", mobil.get_tahun_produksi())
print("Warna:", mobil.get_warna())