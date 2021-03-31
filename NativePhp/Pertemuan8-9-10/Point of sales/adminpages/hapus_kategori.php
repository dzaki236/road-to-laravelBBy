<?php 
require "../conectionandfunctions/function_connection.php";
$kategori = $_GET["kategori"];
if(apuskategori($kategori) > 0){
    echo '<script>alert("data berhasil di hapus");
    document.location.href="kategori.php";
    </script>'; // > 0 == berhasil
} else {
    echo '<script>alert("data gagal di hapus");
    document.location.href="kategori.php";</script>';
}

?>