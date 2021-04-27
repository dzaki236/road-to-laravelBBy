<?php
// Jualan Produk
// Makanan
// Minuman
class Produk
{
    public $nama_produk=NULL, $rasa=NULL, $harga=NULL, $satuan=NULL;

    public function getLabel()
    {
        return "$this->nama_produk,$this->rasa";
    }
    public function __construct($nama_produk=NULL,$rasa=NULL,$harga=NULL,$satuan=NULL)
    {
        $this->nama_produk=$nama_produk;
        $this->rasa=$rasa;
        $this->harga=$harga;
        $this->satuan=$satuan;
    }
}
$produk1 = new Produk('Nyamnyam', 'Stroberi',5000,'cup');
// echo "Makanan : {$produk1->getLabel()}";
var_dump($produk1);
echo "\n";
$produk2 = new Produk('Susu','Coklat');
// $produk2->nama_produk = 'Susu';
// $produk2->rasa = 'Coklat';
// $produk2->harga = 12000;
// $produk2->satuan = 'cup';
// echo "Minuman : {$produk2->getLabel()}";
var_dump($produk2);
echo "\n";

