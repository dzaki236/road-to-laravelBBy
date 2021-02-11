<?php 
$kajian_perusahaan = [["Pt.test","front end dev","6 bulan","5juta"],["Pt.testKetiga","back end dev","3 bulan","10juta"],["Pt.testKedua","fullstack dev","12 bulan","10juta"]];
?>



<!DOCTYPE html>
<html lang="en">
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body class="container">

<!-- foreach -->
<ul class="list-group">
<?php foreach($kajian_perusahaan as $need_perusahaan):?>
  <li class="list-group-item active">Nama perusahaan : <?= $need_perusahaan[0]; ?></li>
  <li class="list-group-item bg-secondary text-white">Skill yang di butuhkan : <?= $need_perusahaan[1]; ?></li>
  <li class="list-group-item bg-secondary text-white">Lama magang : <?= $need_perusahaan[2]; ?></li>
  <li class="list-group-item bg-secondary text-white">Gaji : <?= $need_perusahaan[3]; ?></li>
  <?php endforeach;?>
</ul>

<!-- for -->
<ul class="list-group">
<?= count($kajian_perusahaan);?>
<?php for ($i=0; $i < count($kajian_perusahaan); $i++):?>
<?php for($j=0;$j< count($kajian_perusahaan[0]);$j++):?>
  <li class="list-group-item bg-light"><?= $kajian_perusahaan[$i][$j];?></li>
<?php endfor;?>
<?php endfor;?>
</ul>
   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>