<?php 
class connect_mysql{
    public $host=null,$username=null,$password=null,$database=null;
    public function __construct($host,$username,$password,$database)
    {
        mysqli_connect($this->host=$host,$this->username=$username,$this->password=$password,$this->database=$database)or die("gagal menghubungkan");
    }

}
$connection = new connect_mysql("localhost","root","abcd5dasar","sekolah");
?>