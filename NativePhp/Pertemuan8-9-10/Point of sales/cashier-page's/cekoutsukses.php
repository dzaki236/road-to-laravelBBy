<?php
require "../conectionandfunctions/function_connection.php";

for ($a = 0; $a < count($_POST["kode_product"]); $a++) {
    $input = array(
        'nama_product' => $_POST["nama_product"][$a],
        'kode_product' => $_POST["kode_product"][$a],
        'nama_pembeli' => $_POST["nama_pembeli"],
        'jenis_pembayaran' => $_POST["jenis_pembayaran"],
        'jenis_pembayaran' => $_POST["jenis_pembayaran"],
        'quantity' => $_POST["quantity"][$a], 'total_belanja' => $_POST["total_belanja"][$a], 'total_bayar' => $_POST["total_bayar"][$a]
    );
    suksescekout($input);
}

function suksescekout($sukses)
{
    global $koneksi;
    // get data from form
    $nama_product = htmlspecialchars($sukses["nama_product"]);
    $kode_product = htmlspecialchars($sukses["kode_product"]);
    $quantity = htmlspecialchars($sukses["quantity"]);
    $jenis_pembayaran = htmlspecialchars($sukses["jenis_pembayaran"]);
    $total_bayar = htmlspecialchars($sukses["total_bayar"]);
    $total_belanja = htmlspecialchars($sukses["total_belanja"]);
    $nama_pembeli = htmlspecialchars($sukses["nama_pembeli"]);

    $insertquery = "INSERT INTO keranjang (`kode_product`,`nama_product`,`nama_pembeli`,`quantity`,`total_belanja`,`total_bayar`,`jenis_pembayaran`) VALUES ('$kode_product','$nama_product','$nama_pembeli',$quantity,'$total_belanja',$total_bayar,'$jenis_pembayaran')";
    mysqli_query($koneksi, $insertquery);
    return mysqli_affected_rows($koneksi);
}



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> Pembayaran kamu telah berhasil
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="container">
    <div id="struk">
    <div class="fs-5 mb-3">Atas nama : <?= $_POST["nama_pembeli"] ?></div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Product</th>
                <th>Nama Product</th>
                <th>Harga Product</th>
                <th>Quantity</th>
                <th>Total Bayar</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            
            <?php $struk = queries("SELECT * FROM keranjang");
            $totalnya = queries("SELECT SUM(total_bayar) FROM keranjang")[0]; ?>
            <?php foreach ($struk as $log) : ?>
                
                <tr>
                    <td><?= $log["kode_product"]; ?></td>
                    <td><?= $log["nama_product"]; ?></td>
                    <td><?= $log["total_belanja"]; ?></td>
                    </td>
                    <td><?= "X  " . $log["quantity"]; ?></td>
                    <td><?= ($log['total_belanja']*$log['quantity']); ?></td>
                    <td><a class="text-white" href="hapussemuacekout.php?id_keranjang=<?= $log['id_keranjang'];?>">Hapus</a></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4">Total + ppn 10% <?= $log["jenis_pembayaran"];?></td>
                <td><?= $totalnya[0];?></td>
                <td>-</td>
                
            </tr>
            
        </tbody>
    </table>
    </div>
<button type="button" onclick="takestruk()">Simpan</button><div class="mt-5" id="simpan"></div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script>
    function takestruk(){
    html2canvas(document.querySelector("#struk")).then(canvas => {
    document.getElementById("simpan").append(canvas)
});}</script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>