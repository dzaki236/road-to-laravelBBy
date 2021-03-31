<?php 

require "../conectionandfunctions/function_connection.php";
$kategories = queries("SELECT * FROM kategori_product");
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
    <?php include "../adminpages/component/sidebar.php";?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <?php include "./component/navbar.php"; ?>
      <!-- partial -->
     
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row"><h1><a href="./add_kategori.php" class="text-white">[+]</a></h1>
            <div class="container-fluid text-center">
            
            <div class="table-responsive card">
            <table class="table table-bordered text-white table-striped">
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1;
                foreach ($kategories as $kategori) : ?>
                    <tr>
                        <td style="width: 5em;"><?= $i++; ?></td>
                        <td style="width: 50em;"><?= $kategori["kategori"]; ?></td>
                        <td><a href="hapus_kategori.php?kategori=<?= $kategori["kategori"]; ?>" class="btn ml-2 mt-2 btn-danger btn-sm"><i class="mdi mdi-trash-can pl-1"></i>
                      </a>
                    </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
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