class Mobil:
    def __init__(self, merk, tahun, harga):
        self.merk = merk
        self.tahun = tahun
        self.harga = harga

    def info(self):
        return f"Mobil {self.merk} tahun {self.tahun} dengan harga {self.harga}"


class Matic(Mobil):
    def __init__(self, merk, tahun, harga, transmisi):
        super().__init__(merk, tahun, harga)
        self.transmisi = transmisi

    def info(self):
        return f"{super().info()} dan transmisi {self.transmisi}"


class Manual(Mobil):
    def __init__(self, merk, tahun, harga, transmisi):
        super().__init__(merk, tahun, harga)
        self.transmisi = transmisi

    def info(self):
        return f"{super().info()} dan transmisi {self.transmisi}"


# Contoh penggunaan
mobil_matic = Matic("Toyota", 2022, 250000000, "otomatis")
mobil_manual = Manual("Honda", 2020, 200000000, "manual")

print(mobil_matic.info())  # Output: Mobil Toyota tahun 2022 dengan harga 250000000 dan transmisi otomatis
print(mobil_manual.info())  # Output: Mobil Honda tahun 2020 dengan harga 200000000 dan transmisi manual
