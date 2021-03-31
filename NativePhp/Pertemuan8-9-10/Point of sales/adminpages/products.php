<?php
require "../conectionandfunctions/function_connection.php";
$products = queries("SELECT * FROM product ORDER BY id_product ASC");
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
          <div class="table-responsive card mt-4">
            <table class="table table-bordered text-white table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Kode Produk</th>
                    <th>Foto Produk</th>
                    <th>Deskripsi Produk</th>
                    <th><a class="text-white" href="../adminpages/kategori.php"> Kategori Produk</a></th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1;
                foreach ($products as $product) : ?>
                    <tr>
                        <td style="width: 3em;"><?= $i++; ?></td>
                        <td style="width: 12em;"><?= $product["nama_product"]; ?></td>
                        <td style="width: 12em;"><?= $product["kode_product"]; ?></td>
                        <td style="width: 12em;height:10em; background-position: center; background-size:80%; background-repeat: no-repeat; background-image:url('<?= $product["foto_product"]; ?>');"></td>
                        <td style="width: 30em;"><?= $product["deskripsi_product"]; ?></td>
                        <td style="width: 30em;"><?= $product["kategori_product"]; ?></td>
                        <td style="width: 10em;"><?= $product["harga_product"]; ?></td>
                        <td style="width: 5em;"><?= $product["stock"]; ?></td>
                      <td style="width: 15em;">
                        <a href="./edit_products.php?id_product=<?= $product["id_product"]; ?>" class="btn ml-2 mt-2 btn-warning btn-sm"><i class="mdi mdi-lead-pencil pl-1"></i>
                      </a>
                      <button onclick='konfirmasi(event,<?= $product["id_product"]; ?>)' class="btn ml-2 mt-2 btn-danger btn-sm"><i class="mdi mdi-trash-can pl-1"></i>
                      
                      </button><a href="./detail_products.php?id_product=<?= $product["id_product"]; ?>" class="btn ml-2 mt-2 btn-outline-success btn-sm"><i class="mdi mdi-information pl-1"></i></a>
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
