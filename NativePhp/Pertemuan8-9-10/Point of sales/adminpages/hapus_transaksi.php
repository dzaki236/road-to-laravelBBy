<?php 

require "../conectionandfunctions/function_connection.php";
$id = $_GET["id"];
if(hapustransaksi($id) > 0){
    echo '<script>alert("data berhasil di hapus");
    document.location.href="transaksi.php";
    </script>'; // > 0 == berhasil
} else {
    echo '<script>alert("data gagal di hapus");
    document.location.href="transaksi.php";</script>';
}


?>