<?php
//required func php
require "../conectionandfunctions/function_connection.php";
// if cek is checked
if (isset($_POST["submit_product"])) {

    // cek element tambah data dan methodnya
    if (tambahdataproduct($_POST) > 0) {
        echo '<script>alert("data berhasil di tambahkan");
        document.location.href="products.php";</script>'; // > 0 == berhasil
    } else {
        echo '<script>alert("data gagal di tambahkan");
        document.location.href="products.php";</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>POS Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- End layout styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="./assets/images/favicon.png" />
</head>

<body>

    <div class="container-scroller">

    <?php include "../adminpages/component/sidebar.php"?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php include "./component/navbar.php"; ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container">
                        <h1 class="text-white h1 mb-5">Tambah data Product</h1>
                        <a href="./products.php">back</a>

                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="namaproduk" class="form-label">Nama Produk</label>
                                <input type="text" name="nama_product" class="form-control" id="namaproduk" required>
                            </div>

                            <div class="mb-3">
                                <label for="kodeproduk" class="form-label">Kode Produk</label>
                                <input type="text" name="kode_product" class="form-control" id="kodeproduk" required>
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori Produk</label>
                                <select class="form-control" name="kategori_product">
                                    <option value='takada' disabled selected class="text-white">Pilih kategori</option>
                                    <?php $opsi = queries("SELECT * FROM kategori_product"); 
                                    foreach($opsi as $kategori_opsi):?>
                                    <option value="<?= $kategori_opsi['kategori'];?>"><?= $kategori_opsi["kategori"];?>
                                    </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Produk</label>
                                <input type="text" name="foto_product" class="form-control" id="foto" required>
                            </div>
                            <div class="mb-3">
                                <label for="desk" class="form-label">Deskripsi produk</label>
                                <textarea class="form-control" id="desk" name="deskripsi_product" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga Produk</label>
                                <input class="form-control" type="number" name="harga_product" id="harga" required>
                            </div>
                            <div class="mb-3">
                                <label for="stok" class="form-label">Stock Produk</label>
                                <input class="form-control" type="number" name="stock" id="stok" required>
                            </div>
                            <div class="mt-5 d-grid gap-2">
                                <button type="submit" value="inputdata" name="submit_product"
                                    class="btn shadow btn-outline-info btn-block">Add Product</button>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Page's admin</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./assets/js/off-canvas.js"></script>
    <script src="./assets/js/hoverable-collapse.js"></script>
    <script src="./assets/js/misc.js"></script>
    <script src="./assets/js/settings.js"></script>
    <script src="./assets/js/todolist.js"></script>
    <script>
function link(){
    document.location.href='products.php';
}
    </script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
</body>

</html>