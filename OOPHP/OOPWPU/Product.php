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
}
$produk1 = new Produk();
$produk1->nama_produk = 'Roti';
$produk1->rasa = 'Stroberi';
$produk1->harga = 10000;
$produk1->satuan = 'plastik';
echo "Makanan : {$produk1->getLabel()}";
var_dump($produk1);
echo "\n";
$produk2 = new Produk();
$produk2->nama_produk = 'Susu';
$produk2->rasa = 'Coklat';
$produk2->harga = 12000;
$produk2->satuan = 'cup';
echo "Minuman : {$produk2->getLabel()}";
var_dump($produk2);
echo "\n";

