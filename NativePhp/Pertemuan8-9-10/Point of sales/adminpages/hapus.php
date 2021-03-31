<?php 
require "../conectionandfunctions/function_connection.php";
$id_product = $_GET["id_product"];


    // cek element tambah data dan methodnya
    if (hapusproduct($id_product) > 0) {
        echo '<script>document.location.href="products.php";</script>'; // > 0 == berhasil
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Maaf</strong> Data gagal di tambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
?>