<?php
// Jualan Produk
// Makanan
// Minuman
class Produk
{
    public $nama_produk, $rasa, $harga, $satuan;

    public function getLabel()
    {
        return "$this->rasa,$this->satuan";
    }
    public function __construct($nama_produk='nama_produk',$rasa='rasa',$harga='harga',$satuan='satuan')
    {
        $this->nama_produk=$nama_produk;
        $this->rasa=$rasa;
        $this->harga=$harga;
        $this->satuan=$satuan;
    }
}
class CetakInfoProduk{
    public function Cetak(Produk $produk)
    {
        # code...
        $str = "{$produk->nama_produk} | {$produk->getLabel()} (RP.{$produk->harga})";
        return $str;
    }
}
$produk1 = new Produk('Nyamnyam', 'Stroberi',5000,'cup');
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->Cetak($produk1);
echo "\n";
$produk2 = new Produk('Susu','Coklat',1000,'botol');
echo "\n";
