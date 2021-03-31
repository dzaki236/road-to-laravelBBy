<?php
//required func php
require "../conectionandfunctions/function_connection.php";
$id_produk = $_GET["id_product"];


//query data produk
$produk = queries("SELECT * FROM product WHERE id_product = $id_produk")[0];
// if cek is checked


if (isset($_POST["ubah_product"])) {

    // cek element tambah data dan methodnya
    if (ubahdataproduct($_POST) > 0) {
        echo '<div class="alert container alert-success alert-dismissible fade show" role="alert">
    <strong>Selamat</strong> Data kamu berhasil di ubah
    <button type="button" class="btn" onclick="link()" data-bs-dismiss="alert" aria-label="Close"><i class="text-success ml-5 mdi mdi-close h1" onclick="link()"></i></button>
  </div>'; // > 0 == berhasil
    } else {
        echo '<div class="alert container alert-danger alert-dismissible fade show" role="alert">
        <strong>Maaf</strong> Data gagal di ubah
        <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close"><i class="text-danger ml-5 mdi mdi-close h1" onclick="link()"></i></button>
      </div>';
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

        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <?php //include "./component/logo_POS.php"; ?>
            <ul class="nav">

                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item menu-items mt-2 active">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-database"></i>
                        </span>
                        <span class="menu-title">Database</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                        <li class="nav-item text-white"> <a class="nav-link text-white" href="products.php">Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="stocks.php">Stock</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Transaksi</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Kode Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Kategori</a></li>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php include "./component/navbar.php"; ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                <div class="card p-5">
<h1 class="text-center text-white mb-3 ">Detail Produk</h1>
        <form action="" method="POST" class="text-white">
            <input type="hidden" name="id_product" value="<?= $produk['id_product'];?>">
            <div class="mb-3">
                <label for="namaproduk" class="form-label h5">Nama Produk</label>
                <p class="text-secondary fs-5 fw-bolder"><?= $produk["nama_product"];?></p>
                
            </div>
            <div class="mb-3 mt-5">
                <label for="namaproduk" class="form-label h5">Kategori Produk</label>
                <p class="text-secondary fs-5 fw-bolder"><?= $produk["kategori_product"];?></p>
            </div>
            <div class="mb-3 mt-5">
                <label for="namaproduk" class="form-label h5">Kode Produk</label>
                <p class="text-white fs-5 fw-bolder"><?= $produk["kode_product"];?></p>
            </div>
            <div class="mb-3 mt-5">
                <label for="foto" class="form-label h5">Foto Produk</label>
                <p class="text-secondary fs-5 fw-bolder"><img src="<?= $produk["foto_product"];?>" alt="" class="img-fluid ms-5 ps-5 w-50 d-flex justify-content-center"> </p>
                
            </div>
            <div class="mb-3 mt-5">
                <label for="harga" class="form-label h5">Deskripsi produk</label>
                <p class="text-secondary fs-5 fw-bolder"><?= $produk["deskripsi_product"];?></p>
            </div>
            <div class="mb-3 mt-5">
                <label for="harga" class="form-label h5">Harga Produk</label>
                <p class="text-secondary fs-5 fw-bolder"><?= $produk["harga_product"];?></p>
                
            </div>
            <div class="mb-3 mt-5">
                <label for="stok" class="form-label h5">Stock Produk</label>
                <p class="text-secondary fs-5 fw-bolder"><?= $produk["stock"];?></p>
            </div>
            <div class="mt-5 d-grid gap-2">
                <a href="products.php" class="btn shadow btn-outline-info btn-block">back</a>
            </div>

        </form>
    </div>
    
                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Page's
                                admin</span>
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
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script>
        function link() {
            document.location.href = 'products.php';
        }
    </script>
        <!-- End custom js for this page -->
</body>

</html>