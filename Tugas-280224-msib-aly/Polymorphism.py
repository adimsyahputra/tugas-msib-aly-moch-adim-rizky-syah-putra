class Binatang:
    def suara(self):
        pass

class Kucing(Binatang):
    def suara(self):
        return "Meow!"

class Anjing(Binatang):
    def suara(self):
        return "Guk Guk"


# Fungsi yang menggunakan polimorfisme
def dengarkan_suara(binatang):
    print(binatang.suara())

# Membuat instance dari kelas-kelas yang berbeda
kucing = Kucing()
anjing = Anjing()

# Memanggil fungsi dengan berbagai instance
dengarkan_suara(kucing)  # Output: Meow!
dengarkan_suara(anjing)  # Output: Woof!