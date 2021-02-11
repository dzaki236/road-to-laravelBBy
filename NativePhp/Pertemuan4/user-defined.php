<?php 
#user defined function
// ketika pada saat pemanggilan gak ada parameter yang dikirim,maka yuang di gunakan parameter default,ketika ada yang di kirim maka akan di abaikan
// ketika dikirim kan lengkap maka akan sesuai dengan apa yang di tambahkan
function salam($waktu = "datang",$user="Dzaki")
{
    // parameter berbentuk variable
    // fungsi harus mengembalikkan nilai
    return "Selamat $waktu $user";
}
date_default_timezone_set('Asia/Jakarta');
$jam = date("G");
echo $jam;
// echo date("H.i.s:u");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan function</title>
</head>
<body>
<?php if($jam >= 3 && $jam <= 10):?>
    <h1><?= salam("Pagi");?></h1>
    <?php elseif($jam >= 11&&$jam <= 15):?>
        <h1><?= salam("Siang");?></h1>
        <?php elseif($jam >= 16 && $jam <= 19): ?>
            <h1><?= salam("Sore");?></h1>
            <?php elseif($jam >= 20 || $jam <= 2): ?>
            <h1><?= salam("Malam");?></h1>
            <?php else:?>
                <h1><?= salam("Datang");?></h1>
    <?php endif;?>
</body>
</html>