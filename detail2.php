<?php
require_once "app.php";
$id = $_GET['id'];
$d = findMenuByID($conn, $id);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Menu</title>
    <link rel="stylesheet" href="style/menu.css">
</head>
<body>
    <div class="detail">
        <h1 class="heading"><Span>Detail</Span> Menu</h1>

        <div class="row">
            
            <div class="image">
                <img src="asset/6316f6976a2f8.jpg" alt="">
            </div>

            <div class="content">
                <h3>Nama Menu : <?= $d['nama_menu'] ?></h3>
                <p>Jenis : <?= $d['jenis'] ?></p>
                <p>Harga : <?= $d['harga'] ?></p>
                <p>Created At : <?= $d['created_at'] ?></p>
                <p>Updated At : <?= $d['updated_at'] ?></p>

            <a href="data.php" class="btn">Kembali ke Data Menu</a>
            </div>
        </div>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>