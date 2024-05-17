<?php
require_once "app.php";

$id = $_GET["id"];
$sql = "DELETE FROM menu WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "
         <script>
             alert('BERHASIL MENGHAPUS MENU');
             document.location.href = 'data.php';
         </script>";
} else {
    echo "Failed: " . mysqli_error($conn);
}

// if (is_null($result)){
//     $_SESSION['BERHASIL_HAPUS_MENU'] = "
//         <script>
//             alert('GAGAL MEBGHAPUS MENU');
//             document.location.href = 'data.php';
//         </script>";
// } else {
//     $_SESSION['BERHASIL_HAPUS_MENU'] = "
//     <script>
//         alert('BERHASIL MENGHAPUS MENU');
//         document.location.href = 'data.php';
//     </script>";
// }

mysqli_close($conn);
?>