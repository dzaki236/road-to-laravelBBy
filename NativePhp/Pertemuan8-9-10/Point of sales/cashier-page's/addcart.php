<?php 
include "../conectionandfunctions/function_connection.php";
function beliproduct($keranjang){
    global $koneksi;
   // get data when click
   $kode_product = htmlspecialchars($keranjang["kode_product"]);
   $nama_product = htmlspecialchars($keranjang["nama_product"]);
   $harga_product = htmlspecialchars($keranjang["harga_product"]);
   $foto_product = htmlspecialchars($keranjang["foto_product"]);
   $quantity = htmlspecialchars($keranjang["quantity"]);
   $stock = htmlspecialchars($keranjang['stock']);
   $total_belanja = ($harga_product * $quantity);
   $beliquery = "INSERT INTO transaksi (`kode_product`,`nama_product`,`foto_product`,`harga`,`quantity`,`total_belanja`) VALUES ('$kode_product','$nama_product','$foto_product',$harga_product,$quantity,$total_belanja)";
    mysqli_query($koneksi, $beliquery);
    $condition = mysqli_affected_rows($koneksi);
    return $condition;

}
// if cek is beli masuk keranjang
if (isset($_POST["beli"])) {

    // cek element tambah data dan methodnya
    if (beliproduct($_POST) > 0) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Selamat</strong> Data kamu berhasil di tambahkan
    <button type="button" class="btn-close" onclick="link()" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>'; // > 0 == berhasil

  echo '<script>
        setTimeout(function(){ alert("Data sukses ditambahkan karena tersedia,silahkan cek kembali");document.location.href="./index.php"}, 500);</script>';
    } else {
        echo '<script>
        setTimeout(function(){ alert("Data Tak dapat di tambahkan karena sudah tersedia,silahkan cek kembali");document.location.href="./index.php"}, 500);</script>';
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Maaf</strong> Data gagal atau telah di tambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}


?>
<div class="d-flex justify-content-center m-5 p-5">
  <div class="spinner-border" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
<!-- CSS BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
