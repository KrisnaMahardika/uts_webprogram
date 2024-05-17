<?php
require_once "app.php";
session_start();

$n = menuBaru($conn, $_POST);

mysqli_close($conn);

if (is_null($n)){
    $_SESSION['BERHASIL_TAMBAH_MENU'] = "
        <script>
            alert('GAGAL MENAMBAH MENU');
            document.location.href = 'data.php';
        </script>";
} else {$_SESSION['BERHASIL_TAMBAH_MENU'] = "
        <script>
            alert('BERHASIL MENAMBAH MENU');
            document.location.href = 'data.php';
        </script>";
}



header("Location: /data.php");
die();

