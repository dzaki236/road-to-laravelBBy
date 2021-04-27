<?php 
class Siswa{
public $namaLengkap="jhon doe",$kelas,$jurusan;
public function __construct($namaLengkap,$kelas,$jurusan)
{
    $this->namaLengkap=$namaLengkap;
    $this->kelas=$kelas;
    $this->jurusan=$jurusan;
}
public function tampilSiswa(){
    return " <br> Nama : $this->namaLengkap, Kelas : $this->kelas, Jurusan : $this->jurusan <br>";
}
}
class CetakInfoSiswa{
    public function cetak(Siswa $siswa){
        $str = "{$siswa->tampilSiswa()} (Jurusan. {$siswa->jurusan})";
        return $str;
    }
}
$siswa1=new Siswa("Dzaki",11,"RPL");
echo "Siswa :" . $siswa1->tampilSiswa();
$siswa2=new Siswa("Test2",11,"RPL");
echo "Siswa :" . $siswa2->tampilSiswa();
$siswa3=new Siswa("Test",11,"RPL");
echo "Siswa :" . $siswa3->tampilSiswa();

$infoSiswa = new CetakInfoSiswa();
echo $infoSiswa->cetak($siswa1);
?>