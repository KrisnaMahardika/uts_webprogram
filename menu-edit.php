<?php
require_once "app.php";
$id = $_GET['id'];

if (isset($_POST['submit']) > 0) {
    if (menuEdit($_POST)) {
        echo "
        <script>
            alert('BERHASIL MENGUBAH MENU!');
            document.location.href = 'data.php';
        </script>
        ";
    } else {
        echo "
            <script>
            alert('GAGAL MENGUBAH MENU!');
            document.location.href = 'data.php';
            </script>
        ";
    }
}
// function selectJenis($v, $m){
//     if ($v == $m){
//         return 'selected'; 
//     }
//     return '';
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu</title>
    <link rel="stylesheet" href="style/menu.css">
</head>
<body>
     <h1 class="heading"><span>Edit</span> menu</h1>
    <div class="tambah">
        <div class="container_tambah">
            <?php
                $sql = "SELECT * FROM menu WHERE id = $id LIMIT 1";
                $result = mysqli_query($conn, $sql);
                $e = mysqli_fetch_assoc($result);
            ?>
            <form action="" method="post">
                <input type="hidden" class="hidden" name="id" value="<?php echo $e['id']; ?>">
                <div>
                    <label>Nama Menu : </label>
                    <input type="text" name="nama_menu" value="<?php echo $e['nama_menu']; ?>">
                </div>
                <div>
                    <label>Jenis : </label>
                    <select name="jenis">
                        <option value="Coffee" <?php echo ($e['jenis'] == 'Coffee') ? 'Selected' : ''; ?>>Coffee</option>
                        <option value="Non Coffee" <?php echo ($e['jenis'] == 'Non Coffee') ? 'Selected' : ''; ?>>Non Coffee</option>
                        <option value="Food" <?php echo ($e['jenis'] == 'Food') ? 'Selected' : ''; ?>>Food</option>
                    </select>
                </div>
                <div>
                    <label>Harga : </label>
                    <input type="text" name="harga" placeholder="Contoh: Rp 10.000" value="<?php echo $e['harga']; ?>">
                </div>
                <div class="tombol">
                    <input type="submit" name="submit" value="Simpan">
                </div>
            </form>
        </div> 
    </div>
    <footer>
        <a href="data.php" class="button">Kembali ke data menu?</a>
    </footer>
</body>
</html>

<?php
mysqli_close($conn);
?>