<?php 

require "../conectionandfunctions/function_connection.php";
$id_keranjang = $_GET["id_keranjang"];


    // cek element tambah data dan methodnya
    if (hapussemuacekout($id_keranjang) > 0) {
        echo '<script>document.location.href="index.php";</script>'; // > 0 == berhasil
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Maaf</strong> Data gagal di hapus
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }

?>