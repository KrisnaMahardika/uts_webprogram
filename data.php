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
    <title>Data Menu</title>
    <link rel="stylesheet" href="style/menu.css">
</head>
<body>
    <h1 class="heading"><span>Data</span> Menu</h1>

    <?php if (isset($_SESSION['BERHASIL_TAMBAH_MENU'])) : ?> 
            <?= $_SESSION['BERHASIL_TAMBAH_MENU'] ?>
            <?php session_unset(); ?>
    <?php endif; ?>
    <table>
        <thead>
            <tr>
                <th>Nama menu</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($p as $k => $v) : ?>
            <tr>
                <td><?= $v['nama_menu'] ?></td>
                <td><?= $v['jenis'] ?></td>
                <td><?= $v['harga'] ?></td>
                <td>
                    <a href="<?= "/detail2.php?id={$v['id']}" ?>" class="btn_data"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M12 9h.01" /><path d="M11 12h1v4h1" /></svg></a>
                    <a href="<?= "/menu-edit.php?id={$v['id']}" ?>" class="btn_data"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg></a>
                    <a href="<?= "/menu-hapus.php?id={$v['id']}" ?>" class="btn_data" onclick="return confirm('Yakin ingin menghapus <?= $v['nama_menu'] ?> dari menu?');"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
         <?php if (isset($_SESSION['BERHASIL_HAPUS_MENU'])) : ?> 
            <?= $_SESSION['BERHASIL_HAPUS_MENU'] ?>
            <?php session_unset(); ?>
        <?php endif; ?>
    </table>
    <div class="tombol">
        <a href="<?= "/tambah.php?id={$v['id']}" ?>" class="button">Tambah Menu?</a>
        <a href="index.php" class="button">Kembali ke Home</a>
    </div>
</html>

<?php
mysqli_close($conn);
?>