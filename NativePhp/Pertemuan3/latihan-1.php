<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<?php function tampilhtml(){?>
<body class="container-fluid">
    <!-- standar -->
    <table class="table table-bordered">
        <?php for($i=0;$i <= 5;$i++){
      echo "<tr>";
      for ($j=0; $j <= 3; $j++) { 
          echo "<td>$i,$j</td>";
      }
      echo "</tr>";
      }?>
    </table>
    <!-- templating -->
    <table class="table table-bordered table-striped container">
        <?php for ($a=0; $a < 5; $a++) :?>
        <?php if($a%2==0):?>
        <tr class="table-secondary">
            <?php else:?>
            <tr>
                <?php endif;?>
                <?php for ($b=0; $b < 3; $b++) :?>


            <td><?= "$a,$b"; ?></td>
            <?php endfor;?>
        </tr>
        <?php endfor;?>
    </table>
    <?php for($for = 0; $for < 2; $for++):?>
    <div class="row">
<?php $while = 0; while($while < 6) : ?>
<?php if($while %2 ==0):?> 
    <div class="card col-1 mt-5 bg-secondary mx-auto mr-5" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-white">Card title</h5>
    <h6 class="card-subtitle mb-2 ">Card subtitle</h6>
    <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link text-info">Card link</a>
    <a href="#" class="card-link text-info">Another link</a>
  </div>
</div>
<?php else: ?>
    <div class="card col-1 mt-5 mx-auto mr-5" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<?php endif;?>
<?php $while++; endwhile;?>
</div>
<?php endfor;?>
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
<?php } tampilhtml();?>
</html>