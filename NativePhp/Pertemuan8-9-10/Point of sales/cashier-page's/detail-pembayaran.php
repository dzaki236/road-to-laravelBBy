<?php
require "../conectionandfunctions/function_connection.php";
//logic detail transaction
if (isset($_POST['id_transaksi'])) {
  $nama_produk = $_POST["nama_product"];
  $foto_produk = $_POST["foto_product"];
  $quantity = $_POST["quantity"];
  $total_belanja = $_POST["total_belanja"];
  $total_bayar = $_POST["total_bayar"];
  $kode_produk = $_POST["kode_product"];
} else {
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Kesalahan</strong> Pembelian kosong
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo "<script>document.location.href = 'index.php'</script>";
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

  <title>Detail Payment</title>
</head>

<body>

  <div class="container-fluid">
    <a href="./index.php" class="m-5">Kembali halaman utama</a>
    <table class="text-center table table-bordered">
      <thead>
        <tr>
          <th>no</th>

          <th>Foto</th>
          <th>Kode Produk</th>
          <th>Produk</th>
          <th>Quantity</th>
          <th>Total Belanja</th>
        </tr>
      </thead>
      <form action="cekoutsukses.php" method="post">
        <tbody>
          <?php
          $no = 1;
          for ($detail = 0; $detail < count($_POST['id_transaksi']); $detail++) : ?>
            <tr>
              <td><?= $no++; ?></td>

              <td class="w-25 ms-5 ps-5"><img src="<?= $foto_produk["$detail"]; ?>" alt="" class="img-fluid w-25"></td>
              <td><?= $kode_produk["$detail"]; ?></td>

              <td><?= $nama_produk["$detail"]; ?></td>

              <td><?= $quantity["$detail"]; ?></td>
              <td><?= $total_belanja["$detail"]; ?></td>
            </tr>
            <!-- Invisible form -->
            <div class="container" style="display: none;">
              <div class="mb-3 mt-5">
                <label class="form-label">Kode Product</label>
                <input type="text" name="kode_product[]" value="<?= $kode_produk["$detail"]; ?>" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Nama Product</label>
                <input type="text" name="nama_product[]" value="<?= $nama_produk["$detail"]; ?>" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="text" name="quantity[]" value="<?= $quantity["$detail"]; ?>" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Total bayar</label>
                <input type="text" name="total_bayar[]" value="<?= $total_bayar; ?>" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Total belanja</label>
                <input type="text" name="total_belanja[]" value="<?= $total_belanja["$detail"]; ?>" class="form-control">
              </div>
            </div>
          <?php endfor; ?>
          <tr>
            <td class="h4" colspan="5">Total Belanja <sub class="text-secondary fs-6"> Sudah termasuk PPN 10% & <span class="fw-light">diskon 15% setiap pembelian di atas 30000</span> </sub></td>
            <td class="h4" colspan="1"><?= $total_bayar; ?></td>
          </tr>
        </tbody>


    </table>

    <div class="mb-5 mt-5">
      <label class="form-label">Nama lengkap</label>
      <input type="text" class="form-control" name="nama_pembeli" required>
    </div>
    <div class="mb-5">
    <label class="form-label">Metoda pembayaran</label>
      <select class="form-select" required name="jenis_pembayaran">
        <option selected value="Cash">Cash</option>
        <option value="BCA">BCA</option>
        <option value="MANDIRI">MANDIRI</option>
        <option value="BCI">BCI</option>
        <option value="LINKAJA">LINKAJA</option>
      </select>
    </div>
    <button type="submit" name="suksespayment" value="sukses" class="btn mt-5 mb-5 btn-primary">Bayar sekarang</button>
    </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>