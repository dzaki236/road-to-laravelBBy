<?php
require "../conectionandfunctions/function_connection.php";
$detail_bayars = queries("SELECT * FROM transaksi_detail ORDER BY id ASC");

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
    <link rel="shortcut icon" href="./assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
    <?php include "../adminpages/component/sidebar.php";?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <?php include "./component/navbar.php";?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper"> 
         <a href="./add_transaksi.php" class="text-white h3">[+]</a>
          <div class="table-responsive card mt-4">
         
            <table class="table table-bordered text-white table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama pembeli</th>
                    <th>Tunai</th>
                    <th>Total belanja</th>
                    <th>Kembalian</th>
                    <th>Jenis pembayaran</th>
<th>Action</th>
                </tr>
                <?php $i = 1;
                foreach ($detail_bayars as $detail_bayar) : ?>
                    <tr>
                        <td style="width: 3em;"><?= $i++; ?></td>
                        <td style="width: 12em;"><?= $detail_bayar["nama"]; ?></td>
                        <td style="width: 12em;"><?= $detail_bayar["tunai"]; ?></td>
                        <td style="width: 30em;"><?= $detail_bayar["total_belanja"]; ?></td>
                        <td style="width: 30em;"><?= $detail_bayar["kembalian"]; ?></td>
                        <td style="width: 10em;"><?= $detail_bayar["jenis_pembayaran"]; ?></td>
                      <td style="width: 15em;">
                      </a>
                      <a href="hapus_transaksi.php?id=<?=$detail_bayar['id'];?>" class="btn ml-2 mt-2 btn-danger btn-sm"><i class="mdi mdi-trash-can pl-1"></i>
                      
                </a>
                    </td>
                    </tr>
                <?php endforeach; ?>
            </table>
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
        <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
    <script>
        function konfirmasi(e, id_product) {
            Swal.fire({
                title: '<h1 class = "text-dark">Do you want to save the changes?</h1>',
                showDenyButton: true,
                confirmButtonText: `Save`,
                denyButtonText: `Don't save`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    var http = new XMLHttpRequest(); // inisialitation
                        http.open("GET", "hapus.php?id_product=" + id_product, true); // tentukan server 
                        http.send(); // eksekusi
                        e.returnValue = true;
                    Swal.fire('<h1 class = "text-dark">Saved!</h1>', '', 'success');
                    setTimeout(function() {
                            location.reload("products.php");
                        }, 1000);
                } else if (result.isDenied) {
                    Swal.fire('<h1 class = "text-dark">Changes are not saved</h1>', '', 'info')
                }
            })
        }
    </script>
    <!-- End custom js for this page -->


  </body>
</html>
