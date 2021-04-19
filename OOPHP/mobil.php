<?php 
class Mobil {
    public $pemilik,
    $warna,
    $merk,
    $kecepatanMaksimal,
    $jumlahPenumpang;

    public function tambahKecepatan($cepat){

        return "Tambah Kecepatan $cepat Km";

    }
    public function kurangiKecepatan(){

        return "Kecepatan di kurangi";

    }
    public function gantiTransmisi(){

        return "Ganti transmisi";

    }
}
$mobil = new Mobil();
$mobil->pemilik = "Iwan";
$mobil->warna="merah";
$mobil->merk="Toyota";
$mobil->kecepatanMaksimal=120;
$mobil->jumlahPenumpang="10 orang";
var_dump($mobil);
echo "Mobil milik pak $mobil->pemilik, berwarna $mobil->warna, merek $mobil->merk <br>";
echo $mobil->tambahKecepatan(10);
echo "<br>";
echo $mobil->gantiTransmisi();