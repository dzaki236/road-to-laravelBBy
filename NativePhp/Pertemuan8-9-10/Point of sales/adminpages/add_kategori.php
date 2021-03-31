<?php 

require "../conectionandfunctions/function_connection.php";

if (isset($_POST["submit_kategori"])) {

    // cek element tambah data dan methodnya
    if (tambahkategories($_POST) > 0) {
        echo '<script>alert("data berhasil di tambahkan");
        document.location.href="kategori.php";</script>'; // > 0 == berhasil
    } else {
        echo '<script>alert("data gagal di tambahkan");
        document.location.href="kategori.php";</script>';
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
 
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php include "./component/navbar.php"; ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="container-fluid">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="kodeproduk" class="form-label">Tambah kategori Produk</label>
                                <input type="text" name="kategori" class="form-control" id="kodeproduk" required>
                            </div>
                            <div class="mt-5 d-grid gap-2">
                                <button type="submit" value="inputdatakategori" name="submit_kategori"
                                    class="btn shadow btn-outline-info btn-block">Add kategori</button>
                            </div>

                        </form></div>
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
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
</body>

</html>