<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "uts_cafe";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Gagal konek ke database: " . mysqli_connect_error());
}

function getAllData($conn) {
    $sql = "SELECT * FROM menu";
    $result = mysqli_query($conn, $sql);

    $data = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }

    return $data;
}

function findMenuByID($conn, $id) {
    $sql = "SELECT * FROM menu WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    }

    return null;
}

function menuBaru($conn, $data){
    $sql = "INSERT INTO menu
    (nama_menu, jenis, harga, created_at, updated_at)
    VALUES (
        '{$data['nama_menu']}',
        '{$data['jenis']}',
        '{$data['harga']}',
        NOW(),
        NOW()
    );";

    if (mysqli_query($conn, $sql)) {
        return mysqli_insert_id($conn);
    }
    
    return null;
}

function menuEdit($data){
    global $conn;
    // Ambil data dari formulir
    $id = $data['id'];
    $nama_menu = $data['nama_menu'];
    $jenis = $data['jenis'];
    $harga = $data['harga'];

    // Query untuk mengupdate data
    $sql = "UPDATE menu SET 
        nama_menu='$nama_menu',
        jenis='$jenis', 
        harga='$harga', 
        updated_at=NOW()
        WHERE id = $id";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);

}

// test