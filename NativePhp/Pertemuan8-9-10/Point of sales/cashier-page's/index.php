<?php

require "../conectionandfunctions/function_connection.php";
$detail_produk = queries("SELECT * FROM product ORDER BY id_product ASC"); //function connection but with queries
//function search click button

function cari($katakunci)
{
    $query = "SELECT * FROM product 
    WHERE nama_product LIKE '%$katakunci' OR harga_product LIKE '%$katakunci'
    ";
    return queries($query);
}
//search click button
if (isset($_POST["submit_search"])) {
    $detail_produk = cari($_POST["search_product"]);
}

$keranjang = queries("SELECT * FROM transaksi ORDER BY id_transaksi ASC");

// if cek is editqty masuk keranjang
if (isset($_POST["editqty"])) {

    // cek element tambah data dan methodnya
    if (editqty($_POST) > 0) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Selamat</strong> Data kamu berhasil di tambahkan
    <button type="button" class="btn-close" onclick="link()" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>'; // > 0 == berhasil
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Maaf</strong> Data gagal di tambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}
//when refreshing
// if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){
//     $data = // processing codes here
//     unset $data;
//    }


// clear all cart
//   if (clearcart($id_transaksi_2) > 0) {
//     echo '<script>document.location.href="products.php";</script>'; // > 0 == berhasil
// } else {
//     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//     <strong>Maaf</strong> Data gagal di tambahkan
//     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//   </div>';
// }

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Custom styles for this template -->
    <link href="./css/simple-sidebar.css" rel="stylesheet">
    <style>
        .card-img-top {
            width: 100%;
            height: 25vh;
            object-fit: cover;
            object-position:top;
        }

        table {
            width: 200%;
        }

        .containerkeranjang {
            width: 30em;
            overflow-x: scroll;
            overflow-y: scroll;
        }

        input[type="number"] {
            -webkit-appearance: textfield;
            -moz-appearance: textfield;
            appearance: textfield;
        }
    </style>
</head>

<body>

    <div class="d-flex container-fluid" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper" style="width: 31em;">
            <div class="sidebar-heading">Cart</div>
            <div class="list-group list-group-flush m-3">
                <div class="containerkeranjang">
                    <table class="table table-bordered bg-white p-4">
                        <thead>
                            <tr style="font-size: 12px;">
                                <th scope="col">#</th>
                                <th scope="col">Product</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Quantity</th>
                                <th>Total item Prices</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <!-- Table for keranjang -->
                        <tbody style="font-size: 14px;"><?php $a = 1; ?>

                            <?php foreach ($keranjang as $carts) : ?>
                            <tr>
                                <th scope="row"><?= $a++; ?></th>
                                <input type="hidden" name="id_transaksi" class="pid"
                                    value="<?= $carts['id_transaksi']; ?>">
                                <td style="width: 100px;"><?= $carts["nama_product"] ?></td>
                                <td><?= number_format($carts['harga']); ?>
                                    <input type="hidden" name="harga_product" value="<?= $carts['harga'] ?>">
                                </td>

                                <td>
                                    <div class="d-flex justify-content-center">
                                        <div class="col">
                                            <input type="number" name="quantity" readonly disabled
                                                class="form-control bg-white border border-white"
                                                value="<?= $carts['quantity'] ?>" min="1" max="10" style="width:75px;">
                                        </div>
                                        <div class="col">
                                            <button type="button" class="h5 btn text-secondary" data-bs-toggle="modal"
                                                data-bs-target="#myModal<?= $carts['id_transaksi']; ?>"><i
                                                    class="bi bi-pencil-square"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p>
                                        <?= $total_belanja = $carts['harga'] * $carts['quantity'];
                                            ?></p>
                                </td>
                                <td><button onclick='konfirmasi(event,<?= $carts["id_transaksi"]; ?>)'
                                        class="btn btn-danger"><i class="bi bi-trash-fill text-white"></i></button>
                                </td>
                            </tr>

                            <!-- Modal Edit Qty/quantity-->
                            <div class="modal fade" id="myModal<?= $carts['id_transaksi']; ?>" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn" data-bs-dismiss="modal"><i
                                                    class="bi bi-x h1"></i></button>
                                            <h4 class="modal-title text-center">Update Product</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>kode Product</label>
                                                <p class="bg-light p-2 fw-bolder text-secondary">
                                                    <?= $carts['kode_product']; ?></p>
                                            </div>
                                            <form action="" method="POST">
                                                <input type="hidden" name="id_transaksi"
                                                    value="<?= $carts['id_transaksi']; ?>">


                                                <div class="form-group mt-3">
                                                    <label>Nama Product</label>
                                                    <p><?= $carts['nama_product']; ?></p>
                                                </div>
                                                <!-- Such important think -->
                                                <div class="form-group mt-3">
                                                    <label>Quantity</label>
                                                    <input type="number" min="0" max="20" name="quantities"
                                                        class="form-control bg-white border border-white"
                                                        value="<?= $carts['quantity']; ?>">
                                                    <!-- quantities di kali total belanja -->
                                                    <input type="hidden" min="0" max="20" name="total_belanja"
                                                        class="form-control bg-white border border-white"
                                                        value="<?= $carts['total_belanja']; ?>">

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" name="editqty" value="editquantity"
                                                        onclick="return foo();" class="btn btn-success">Update</button>
                                                    <button type="button" class="btn btn-default"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>

                            <!-- Total; belanja logic Berbeda dengan total bayar -->
                            <?php $total_belanja = queries("SELECT SUM(total_belanja) AS TotalItemsOrdered FROM transaksi")[0]; ?>
                            <!-- Total diskon -->
                            <?php if ($total_belanja[0] >= 30000) : ?>
                            <tr>
                                <td colspan="4">
                                    <h5 class="text-center">Diskon (15%) jika</h5>
                                    <p class="text-muted ms-5">Jika pembelian di atas 20000</p>
                                </td>
                                <td colspan="1"><?php
                                                        $t_diskon = ($total_belanja[0] * 0.15);
                                                        echo $t_diskon; ?>
                                </td>
                                <td>
                                    -
                                </td>
                            </tr>
                            <?php else : ?>

                            <td colspan="4">
                                <h5 class="text-center">Diskon (15%) jika</h5>
                                <p class="text-muted ms-5">Jika pembelian di atas 20000</p>
                            </td>
                            <td colspan="1"> <?php
                                                        $t_diskon = 0;
                                                        echo "–"; ?>
                            </td>
                            <td>
                                -
                            </td>
                            </tr>

                            <?php endif; ?>
                            <!-- PPN/Tax -->
                            <tr>
                                <td colspan="4">
                                    <h5 class="text-center">PPN (10%)</h5>
                                </td>
                                <td colspan="1">
                                    <?php
                                        $pajak = ($total_belanja[0] * 0.1);
                                        echo $pajak; ?>
                                </td>
                                <td>
                                    -
                                </td>
                            </tr>
                            <!-- Total bayar -->
                            <tr>
                                <td colspan="4">
                                    <h5 class="text-center">Total bayar</h5>
                                </td>
                                <td colspan="1">
                                    <?php
                                        $total_bayar = ($total_belanja[0] + $pajak - $t_diskon );
                                        echo $total_bayar;

                                        ?>
                                </td>
                                <td>
                                    -
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="detail-pembayaran.php" method="POST" >
                        <!-- query to select carts -->
                        <?php $belanjaan = queries("SELECT * FROM transaksi") ?>
                        <?php foreach ($belanjaan as $produkdibeli) : ?>

                        <div class="container" style="display:none">
                            <div class="mb-3 mt-5">
                                <label class="form-label">Id_transaksi</label>
                                <input type="hidden" name="id_transaksi[]" class="form-control bg-white"
                                    value="<?= $produkdibeli['id_transaksi']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kode_product</label>
                                <input type="hidden" class="form-control bg-white"
                                    value="<?= $produkdibeli['kode_product']; ?>" name="kode_product[]" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama_product</label>
                                <input type="hidden" class="form-control bg-white"
                                    value="<?= $produkdibeli['nama_product']; ?>" name="nama_product[]" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="hidden" name="harga[]" class="form-control bg-white"
                                    value="<?= $produkdibeli['harga']; ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto Product</label>
                                <input type="hidden" name="foto_product[]" class="form-control bg-white"
                                    value="<?= $produkdibeli['foto_product']; ?>" readonly>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Quantity</label>
                                <input type="hidden" name="quantity[]" class="form-control bg-white"
                                    value="<?= $produkdibeli['quantity']; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Total_belanja</label>
                                <input type="hidden" name="total_belanja[]" class="form-control bg-white"
                                    value="<?= $produkdibeli['total_belanja']; ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">PPN</label>
                                <input type="hidden" name="pajak" class="form-control bg-white" value="<?= $pajak; ?>"
                                    readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Total Bayar</label>
                                <input type="hidden" name="total_bayar" class="form-control bg-white"
                                    value="<?= $total_bayar; ?>" readonly>
                            </div>
                        </div>
                        </table> <?php endforeach; ?>
                        <div class="d-grid gap-2">
                            <button class="btn mt-3 btn-outline-info" name="pembayaran" type="submit"
                                value="bayar">Checkout</button>
                        </div>
                    </form>
                </div>



            </div>

        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn" id=""><i class="bi h2 bi-list"></i></button>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="../adminpages/dashboard.php">Admin <span
                                    class="sr-only">(product)</span></a>
                        </li>
                        <!-- Searching data (not work) -->
                        <form class="d-flex me-5" action="" method="POST">
                            <input class="form-control me-2" autofocus type="search"
                                placeholder="Search product or something..." aria-label="Search" name="search_product"
                                autocomplete="off">
                            <button class="btn btn-outline-success" value="search" type="submit" name="submit_search"><i
                                    class="bi bi-search"></i></button>
                        </form>
                </div>
            </nav>
            <div class="container-fluid">
                <h1 class="mt-4">Item List</h1>
                <div class="product p-4">
                    <div class="row gx-2 gy-5">
                        <!-- item on product -->
                        <?php foreach ($detail_produk as $produk_detail) : ?>
                        <div class="col-lg-4 d-flex justify-content-center ">
                            <div class="card border border-white" style="width: 15rem;">

                                <img src="<?= $produk_detail['foto_product']; ?>" class="card-img-top" alt="...">
                               
                                <div class="card-body">
                                    <form action="addcart.php" method="POST">
                                        <input type="hidden" readonly
                                            class="form-control card-text form-control-sm bg-white border border-white card-text fs-6 text-dark"
                                            name="kode_product" id="" value="<?= $produk_detail["kode_product"] ?>">
                                        <input type="text" readonly
                                            class="form-control card-text form-control-sm bg-white border border-white card-text fs-6 text-dark"
                                            name="nama_product" id="" value="<?= $produk_detail["nama_product"] ?>">
                                        <input type="hidden" name="foto_product"
                                            value="<?= $produk_detail['foto_product']; ?>">
                                        <input type="hidden" class="form-control card-text  form-control-sm"
                                            name="quantity" id="" value="1" min="1" max="10">
                                        </h5>
                                        <p class="card-text fw-bold text-primary">
                                            <input type="text" readonly
                                                class="form-control form-control-sm bg-white border border-white card-text fw-bold text-primary"
                                                name="harga_product" id=""
                                                value="<?= $produk_detail["harga_product"]; ?>">

                                        </p>
                                        <p class="card-text mb-3 fw-bold text-secondary">
                                            <?= $produk_detail["kategori_product"]; ?>
                                        </p>
                                        
                                        <?php $produk_detail['stock']; if($produk_detail['stock'] <= 0):?>
                                            <p class="fs-6 text-dark fw-bold">Stock : Habis</p>
                                            <div class="d-grid gap-2">
                                            <button class="btn btn-outline-secondary btn-sm" 
                                                role="button" disabled id="refresh">Stock Habis</button>
                                        <?php else:?>
                                            <p class="fs-6 text-dark fw-bold">Stock : <?=$produk_detail['stock'];?><input type="hidden" name="stock" value="<?=$produk_detail['stock'];?>"></p>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-outline-success btn-sm" name="beli" value="beli"
                                                role="button" id="refresh"><i class="bi bi-cart-plus-fill"></i></button>
                                        <?php endif;?>
                                    </form>
                                    
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#myModal<?= $produk_detail["id_product"]; ?>"><i
                                            class="bi bi-info-circle"></i></button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Product detail-->
                    <div class="modal fade" id="myModal<?= $produk_detail["id_product"] ?>" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn" data-bs-dismiss="modal"><i
                                            class="bi bi-x h1"></i></button>
                                    <h4 class="modal-title text-center">Detail Product</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>kode Product</label>
                                        <p class="bg-light p-2 fw-bolder text-secondary">
                                            <?= $produk_detail["kode_product"] ?></p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <!-- /#wrapper -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        function foo() {
            alert("Submit button clicked!");
            document.location.href = 'index.php';
            return true;
        }

        function konfirmasi(e, id_transaksi) {
            Swal.fire({
                title: '<h1 class = "text-dark">Do you want to save the changes?</h1>',
                showDenyButton: true,
                confirmButtonText: `Save`,
                denyButtonText: `Don't save`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    var http = new XMLHttpRequest(); // inisialitation
                    http.open("GET", "hapuskeranjang.php?id_transaksi=" + id_transaksi,
                        true); // tentukan server 
                    http.send(); // eksekusi
                    e.returnValue = true;
                    Swal.fire('<h1 class = "text-dark">Saved!</h1>', '', 'success');
                    setTimeout(function () {
                        location.reload("products.php");
                    }, 1000);
                } else if (result.isDenied) {
                    Swal.fire('<h1 class = "text-dark">Changes are not saved</h1>', '', 'info')
                }
            })
        }
    </script>
    </script>
    <!-- Bootstrap core JavaScript -->

    <script>
        /*$(document).ready(function() {

            // Change the item quantity
            $(".itemQty").on('change', function() {
                var $el = $(this).closest('tr');

                var pid = $el.find(".pid").val();
                var pprice = $el.find(".pprice").val();
                var qty = $el.find(".itemQty").val();
                location.reload(true);
                $.ajax({
                    url: 'index.php',
                    method: 'post',
                    cache: false,
                    data: {
                        qty: qty,
                        pid: pid,
                        pprice: pprice
                    },
                    success: function(response) {
                        console.log(response);
                    }
                });
            });

            // Load total no.of items added in the cart and display in the navbar
            load_cart_item_number();

            function load_cart_item_number() {
                $.ajax({
                    url: 'index.php',
                    method: 'get',
                    data: {
                        cartItem: "cart_item"
                    },
                    success: function(response) {
                        $("#cart-item").html(response);
                    }
                });
            }
        });*/
    </script>
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        $('#refresh').click(function () {
            document.location.href = 'index.php';
        });

        function link() {
            document.location.href = 'index.php';
        }
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

    <!--  -->
</body>

</html>