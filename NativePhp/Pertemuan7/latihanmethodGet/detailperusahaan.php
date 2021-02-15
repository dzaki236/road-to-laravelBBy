<?php 
if(
    !isset($_GET["perusahaan"])||
!isset($_GET["lamanya"])||
!isset($_GET["desk"])||
!isset($_GET["syarat"])||
!isset($_GET["profile"])
){
    header("Location: latihan-method.php");
    exit;
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
<style>
        .img-thumbnail {
            max-height: 20vh;
            object-fit: contain;
            border: none;
        }

        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="row mx-auto container p-5">
  <img src="<?= $_GET["profile"]?>" class="img-thumbnail" alt="..." >
  <h1 class="fs-1"><?= $_GET["perusahaan"];?></h1>
 
  <p> <i class="bi bi-clock-history"></i> lama kerja : <?= $_GET["lamanya"]?></p>
  <p>Deskripsi perusahaan : </p>
  <p class="text-secondary fw-lighter"><?= $_GET["desk"];?></p>
  <p>Syarat : </p>
  <ul class="fw-lighter">
  <?= $_GET["syarat"]?>
  </ul>
  <a href="latihan-method.php" class="btn btn-outline-warning">Kirim lamaran mu</a>
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