<?php

// konek ke database
$link = "localhost";
$user = "root";
$password ="abcd5dasar";
$db_name = "penjualan";
$koneksi = mysqli_connect("$link", "$user", $password, "$db_name");

// call queries("query mysql");
function queries($isi_kueriSQL)
{
    global $koneksi;
    $hasil = mysqli_query($koneksi, $isi_kueriSQL); //hasil dari query dan koneksi
    $baris_kosong = []; //mengisi baris kosong
    while ($baris = mysqli_fetch_array($hasil)) {
        $baris_kosong[] = $baris;
    }
    return $baris_kosong;
}

function tambahdataproduct($data_)
{
    global $koneksi;
    // get data from form
    $nama_product = htmlspecialchars($data_["nama_product"]);
    $kode_product = htmlspecialchars($data_["kode_product"]);
    $foto_product =htmlspecialchars( $data_["foto_product"]);
    $deskripsi_product =htmlspecialchars( $data_["deskripsi_product"]);
    $kategori_product =htmlspecialchars( $data_["kategori_product"]);
    $harga_product =htmlspecialchars($data_["harga_product"]);
    $stock = htmlspecialchars( $data_["stock"]);

    $insertquery = "INSERT INTO product (`kode_product`,`nama_product`,`kategori_product`,`foto_product`,`deskripsi_product`,`harga_product`,`stock`) VALUES ('$kode_product','$nama_product','$kategori_product','$foto_product','$deskripsi_product',$harga_product,$stock)";
    mysqli_query($koneksi, $insertquery);
    return mysqli_affected_rows($koneksi);
}

function tambahkategories($data_){
    global $koneksi;
    $kategories = htmlspecialchars($data_["kategori"]);
    $insertquery = "INSERT INTO kategori_product (`kategori`) VALUES ('$kategories')";
    mysqli_query($koneksi, $insertquery);
    return mysqli_affected_rows($koneksi);
}

function apuskategori($kategori){
global $koneksi;
mysqli_query($koneksi,"DELETE FROM kategori_product WHERE kategori = '$kategori'");
return mysqli_affected_rows($koneksi);
}

function hapusproduct($id_product){
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM product WHERE id_product =  $id_product");
    return mysqli_affected_rows($koneksi);
}

function ubahdataproduct($data_){
    global $koneksi;
    // get data from form
    $id_product = $data_["id_product"];
    $nama_product = htmlspecialchars($data_["nama_product"]);
    $foto_product =htmlspecialchars( $data_["foto_product"]);
    $deskripsi_product =htmlspecialchars( $data_["deskripsi_product"]);
$kategori_product = htmlspecialchars($data_["kategori_product"]);
    $insertquery = "UPDATE product SET nama_product = '$nama_product', kategori_product = '$kategori_product', foto_product='$foto_product', deskripsi_product='$deskripsi_product' WHERE id_product = $id_product";
    mysqli_query($koneksi, $insertquery);
    $condition = mysqli_affected_rows($koneksi);
    return $condition;
}
function ubahdatastock_harga($data_){
    global $koneksi;
    $id_product = $data_["id_product"];
    $kode_product = htmlspecialchars($data_["kode_product"]);
    $harga_product = htmlspecialchars($data_["harga_product"]);
    $stock_product = htmlspecialchars($data_["stock"]);
    $insertquery = "UPDATE product SET kode_product = '$kode_product', harga_product = $harga_product, stock = $stock_product WHERE id_product = $id_product";
    mysqli_query($koneksi, $insertquery);
    $condition = mysqli_affected_rows($koneksi);
    return $condition;
}

function deletecart($id_transaksi){
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM transaksi WHERE id_transaksi =  $id_transaksi");
    return mysqli_affected_rows($koneksi);
}


function editqty($data_1){
    global $koneksi;
    $id_transaksi = $data_1["id_transaksi"];
    $quantity =  $data_1["quantities"];
    $total = $data_1["total_belanja"];
    $sub_total = ($quantity * $total);
    $editqty = "UPDATE transaksi SET quantity = $quantity , total_belanja = $sub_total WHERE id_transaksi = $id_transaksi";
    mysqli_query($koneksi, $editqty);
    $condition = mysqli_affected_rows($koneksi);
    return $condition;
}

function hapussemuacekout($id_keranjang){
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM keranjang WHERE id_keranjang=$id_keranjang");
    $condition = mysqli_affected_rows($koneksi);
    return $condition;
}

function tambahdatatransaksi($data_)
{
    global $koneksi;
    // get data from form
    $nama_pembeli = htmlspecialchars($data_["nama"]);
    $dibayar = htmlspecialchars($data_["tunai"]);
    $total_belanja =htmlspecialchars( $data_["total_belanja"]);
    $jenis_pembayaran = htmlspecialchars( $data_["jenis_pembayaran"]);
    $kembalian = ($dibayar-$total_belanja);
    $insertquery = "INSERT INTO transaksi_detail (`nama`,`tunai`,`total_belanja`,`kembalian`,`jenis_pembayaran`) VALUES ('$nama_pembeli',$dibayar,$total_belanja,$kembalian,'$jenis_pembayaran')";
    mysqli_query($koneksi, $insertquery);
    return mysqli_affected_rows($koneksi);
}


function hapustransaksi($id){
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM transaksi_detail WHERE id =  $id");
    return mysqli_affected_rows($koneksi);
}