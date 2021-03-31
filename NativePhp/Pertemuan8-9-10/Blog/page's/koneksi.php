<?php 
$koneksi = mysqli_connect("localhost", "root", "abcd5dasar", "blog");

function kueri($kueri){
    global $koneksi;
    $hasil = mysqli_query($koneksi,$kueri);
    $places_datas = [];//array kosong
    while($place_data = mysqli_fetch_assoc($hasil)){
        $places_datas[]=$place_data;
    }
    return $places_datas;
}

function tambah($data_post){
    global $koneksi;
       //ambil data dari halaman setiap form
       $author = $data_post["author"];
       $judul = $data_post["judul_postingan_blog"];
       $postingan = $data_post["isi_postingan_blog"];
       $kategori = $data_post["kategori"];
       $tgl = date('Y-m-d H:i:s');
       
       $kuery = " INSERT INTO postingan (`author`,`judul_postingan_blog`,`isi_postingan_blog`,`tanggal_publish`,`kategori`)
       VALUES 
       ('$author','$judul','$postingan','$tgl','$kategori')";
       mysqli_query($koneksi,$kuery);
       var_dump($kuery);
   return mysqli_affected_rows($koneksi);
}

