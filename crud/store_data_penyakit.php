<?php
session_start();
include "../config/connection.php";
$nama_penyakit = $_POST['nama_penyakit'];
$id_user = $_SESSION['id_user'];

try {
    $stmt = $koneksi->prepare("INSERT INTO penyakit (nama_penyakit, id_user) VALUES (?, ?)");
    $stmt->bind_param("si", $nama_penyakit, $id_user);
    $stmt->execute();
    echo json_encode(["status" => true]);
} catch (Exception $e) {
    echo json_encode(["status" => false, "message" => $e->getMessage()]);
}