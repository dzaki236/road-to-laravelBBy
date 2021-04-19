<?php
class Product
{
    // Properti,member variable
    # Representasi data / keadaan dari sebuah object,dengan tambah visibility di depannya,default:public
    public $judul="Default",
        $penerbit, $harga;
    // Method : function di dalam class
    #  Represntasi perilaku,dengan tambah visibility di depannya,default:public
    public function __construct($judul,$penerbit,$harga)
    {
        // Method yang di jalankan pertama kali pada saat sebuah class di instansiasi
        #  Magic method
         $this->judul=$judul;
         $this->penerbit=$penerbit;
         $this->harga=$harga;
    }
    public function getLabel()
    {
        return "$this->judul, $this->penerbit,$this->harga";
        // $this->namapropertinya,kalau tidak,dia membuat variable baru
        // berfungsi untuk mengambil properti dari class yang bersangkutan
    }
}
$produk1 = new Product("Naruto","Test",2000);
echo "Film :" . $produk1->getLabel();
echo "<br>";
$produk2 = new Product("ancharted","Idk",2000);
echo "Game :" . $produk2->getLabel();