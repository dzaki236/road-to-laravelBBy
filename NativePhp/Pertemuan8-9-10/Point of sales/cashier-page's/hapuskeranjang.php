<?php

require "../conectionandfunctions/function_connection.php";
$id_transaksi = $_GET["id_transaksi"];


    // cek element tambah data dan methodnya
    if (deletecart($id_transaksi) > 0) {
        echo '<script>
        alert("data terhapus");
        document.location.href="products.php";
        </script>'; // > 0 == berhasil
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Maaf</strong> Data gagal di hapus
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }

?>