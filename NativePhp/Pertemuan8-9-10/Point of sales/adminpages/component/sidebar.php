    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <?php include "./component/logo_POS.php"; ?>
      <ul class="nav">

        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="./dashboard.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item menu-items mt-2">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-database"></i>
            </span>
            <span class="menu-title">Database</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item text-white"> <a class="nav-link" href="products.php">Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="./stocks_harga.php">Stock</a></li>
                <li class="nav-item"> <a class="nav-link" href="transaksi.php">Transaksi</a></li>
                <li class="nav-item"> <a class="nav-link" href="./kategori.php">Kategori</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>