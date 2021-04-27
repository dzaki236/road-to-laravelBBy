<?php 
class Makanan {
    public $nama,$rasa,$satuan;
     public function getMakanan(){
         return "$this->nama,$this->rasa,$this->satuan";
     }
     public function __construct($nama,$rasa,$satuan)
     {
         $this->nama=$nama;
         $this->rasa=$rasa;
         $this->satuan=$satuan;
     }
}
$burger = new Makanan('burger','pedes','Box');
echo $burger->getMakanan();?>