<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu</title>
    <link rel="stylesheet" href="style/menu.css">
</head>
<body>
    <h1 class="heading">Tambah <span>menu</span></h1>
    <div class="tambah">
        <div class="container_tambah">
            <form action="menu-store.php" method="post">
                <div>
                    <label>Nama Menu : </label>
                    <input type="text" name="nama_menu">
                </div>
                <div>
                    <label>Jenis : </label>
                    <select name="jenis">
                        <option value="Coffee">Coffee</option>
                        <option value="Non Coffee">Non Coffee</option>
                        <option value="Food">Food</option>
                    </select>
                </div>
                <div>
                    <label>Harga : </label>
                    <input type="text" name="harga" placeholder="Contoh: Rp 10.000">
                </div>
                <div class="tombol">
                    <input type="submit" value="Simpan">
                </div>
            </form>
        </div> 
    </div>
    <footer>
        <a href="data.php" class="button">Kembali ke data menu?</a>
    </footer>
</body>
</html>

