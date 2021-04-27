<?php 
class Kendaraan{
    public $merek,$ban,$warna,$mesin;
public function setkendaraan(){
    return "$this->merek,$this->ban,$this->warna,$this->mesin";
}
    public function __construct($merek,$ban,$warna,$mesin)
    {
        $this->merek = $merek;
        $this->ban=$ban;
        $this->warna=$warna;
        $this->mesin=$mesin;
    }
}

class InfoKendaraan {
    public function getInfo(Kendaraan $kendaraan,$type){
        $str = "$type : {$kendaraan->setkendaraan()}";
        return $str;
    }
}
$motorsport = new Kendaraan('CBR',2,'merah','1000cc');
$infomotorsport = new InfoKendaraan();
echo $infomotorsport->getInfo($motorsport,'motor');
?>