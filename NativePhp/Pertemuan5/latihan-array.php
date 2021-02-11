<?php 
/**menampilkan data array untuk user */
$angka = [0,1,2,3,4,5,6,7,8,9];
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <!-- cara pertama (for) -->
  <div class="row container-fluid d-flex justify-content-center text-center">
    <?php for ($i=0; $i < count($angka); $i++):?>
    <div class="p-5 w-25 m-3 mt-3 col-6 bg-primary text-white h1"><?= $angka[$i]; ?></div>
<?php endfor;?>
  </div>
<br><br><br>
<div class="mt-5"></div>
<!-- cara kedua (foreach) -->
<!-- gak perlu pusing mikirin index keberapanya -->
<div class="row container-fluid d-flex justify-content-center text-center">
    <?php foreach ($angka as $nomor): //($array mana yang mau dilooping) ?>
    <div class="p-5 w-25 m-3 mt-3 col-6 bg-danger text-white h1"><?= $nomor; //artinya untuk setiap,untuk setiap element yang di dalam array lakukan sesuatu?></div>
<?php endforeach;//ambil satu element simpan ke variable lalu tampilkan?>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>