<?php 
$perusahaan = [
    "pt.1" => ["Nama-pt"=>"Pt.test","dibutuhkan"=>"front end dev","lamawaktu"=>"6 bulan","gaji"=>"5juta","link"=>"Perusahaan-test3.com","pp"=>"https://ecs7.tokopedia.net/img/cache/700/product-1/2019/1/5/42164186/42164186_abd49369-460e-4163-b355-96cf75803f21_1000_1000.png","deskripsi"=>" Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, molestiae. Laudantium vero aut veniam voluptatem! Voluptatum assumenda molestiae quo, obcaecati rem quisquam impedit quia, officiis, perferendis facere accusantium vitae pariatur!","syarat" => "<li>syarat 1</li><li>syarat 2</li><li>syarat 3</li>"],

    "pt.2" => ["Nama-pt"=>"Pt.test2","dibutuhkan"=>"back end end dev","lamawaktu"=>"8 bulan","gaji"=>"10juta","link"=>"Perusahaan-test2.com","pp"=>"https://cdn.idntimes.com/content-images/post/20160710/p3-a2d6cf867ed1b50085aceb629fa38b1d.jpg","deskripsi"=>" Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, molestiae. Laudantium vero aut veniam voluptatem! Voluptatum assumenda molestiae quo, obcaecati rem quisquam impedit quia, officiis, perferendis facere accusantium vitae pariatur!","syarat" => "<li>syarat 1</li><li>syarat 2</li><li>syarat 3</li>"],

    "pt.3"=>["Nama-pt"=>"Pt.test3","dibutuhkan"=>"fullstack dev","lamawaktu"=>"12 bulan","gaji"=>"10juta","link"=>"Perusahaan-test1.com","pp"=>"https://s.kaskus.id/images/fjb/2015/04/16/jasa_pembuatan_desain_logo_perusahaan_murah_tidak_murahan_1157447_1429123045.JPG","deskripsi"=>" Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, molestiae. Laudantium vero aut veniam voluptatem! Voluptatum assumenda molestiae quo, obcaecati rem quisquam impedit quia, officiis, perferendis facere accusantium vitae pariatur!","syarat" => "<li>syarat 1</li><li>syarat 2</li><li>syarat 3</li>"]
];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        .img-thumbnail {
            max-height: 20vh;
            object-fit: contain;
            border: none;
        }

        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
    </style>
    <title>Hello, world!</title>
</head>

<body class="container">

    <?php foreach($perusahaan as $key => $lamaran):?>
    <div class="row m-4 p-4 shadow-sm">
        <div class="col-2">
            <img src=<?=$lamaran["pp"];?> class="img-thumbnail w-100" alt="...">
        </div>
        <div class="col-10">
            <div class="row">
                <h4 class="col-10"><?= $lamaran["Nama-pt"]; ?></h4>
                <div class="col-2"><span class="badge rounded-pill bg-secondary"><?=$lamaran["lamawaktu"]?></span></div>
            </div>
            <div class="row w-50"><i class="bi bi-globe col-1"></i> <a style="font-size:12px;" class="h6 col-11 text-secondary" href=""><?= $lamaran["link"]; ?></a></div>
            <div class="row w-50"><i class="bi bi-cash-stack col-1"></i> <a style="font-size:12px;" class=" h6 col-11 text-muted text-decoration-none"><?= "Gaji : ".$lamaran["gaji"]; ?></a></div>
            <div class="row mt-4">
                <p style="font-size:14px;" class="fw-light text-secondary"><i class="bi bi-info h5"></i>
                    <?= " <b> Profile perusahaan </b>: <br>".$lamaran["deskripsi"]; ?></p>
            </div>
            <a href = "./detailperusahaan.php?perusahaan=<?= $lamaran["Nama-pt"]?>&butuh=<?= $lamaran["dibutuhkan"]?>&desk=<?= $lamaran["deskripsi"]?>&syarat=<?= $lamaran["syarat"]?>&lamanya=<?= $lamaran["lamawaktu"]?>&profile=<?= $lamaran["pp"]?>" class="btn btn-link row mt-4">Lihat detail>></a>
        </div>
    </div>
    <?php endforeach;?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>