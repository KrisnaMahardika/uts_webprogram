<?php
session_start();
require_once "app.php";

$p = getAllData($conn);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="style/menu.css">
</head>
<body>
    <main>
        <h1 class="heading">Our <span>Menu</span></h1>
        
        <div class="container">
            <?php foreach ($p as $k => $v) : ?>
            <div class="box">
                <h3><?= $v['nama_menu'] ?></h3>
                <div class="harga"><?= $v['harga'] ?></div>
                <a href="<?= "/detail.php?id={$v['id']}" ?>" class="btn">Detail</a>
            </div>
            <?php endforeach; ?>

            <!-- <div class="box">
                <img src="asset/4919-img_6848.jpeg.webp" alt="">
                <h3>Nasi goreng</h3>
                <div class="harga">Rp 10.000</div>
                <a href="detail.php" class="btn">Detail</a>
            </div>

            <div class="box">
                <img src="asset/4919-img_6848.jpeg.webp" alt="">
                <h3>Nasi goreng</h3>
                <div class="harga">Rp 10.000</div>
                <a href="detail.php" class="btn">Detail</a>
            </div> -->
            
        </div>
    </main>
    <footer>
        <a href="index.php" class="button">Back to home</a>
    </footer>
</body>
</html>

<?php
mysqli_close($conn);
?>