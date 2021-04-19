<?php
class Product
{
    // Properti,member variable
    # Representasi data / keadaan dari sebuah object,dengan tambah visibility di depannya,default:public
    public $judul="Default",
        $penerbit, $harga;
    // Method : function di dalam class
    # Represntasi perilaku,dengan tambah visibility di depannya,default:public
    public function sayhello()
    {
        return "Hello World!";
    }
    public function getLabel()
    {
        return "$this->judul, $this->penerbit,$this->harga";
        // $this->namapropertinya,kalau tidak,dia membuat variable baru
        // berfungsi untuk mengambil properti dari class yang bersangkutan
    }
}
// $produk1 = new Product(); 
// // Panggil objectnya->nama propertinya
// $produk1->judul="Naruto";
// var_dump($produk1);

// $produk2= new Product();
// $produk2->judul="Uncharted";
// $produk2->Judul=null;
// var_dump($produk2);

$produk3 = new Product();
$produk3->judul = "naruto";
$produk3->penerbit = "Masasikimnoto";
$produk3->harga = 10000;

$produk4 = new Product();
$produk4->judul = "Ancharted";
$produk4->penerbit = "Sony";
$produk4->harga = 30000;
$produk4->Harga = 100;
echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
echo "<br>";
echo var_dump($produk4);
