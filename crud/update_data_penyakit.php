<?php
include "../config/connection.php";

try {
    $nama_penyakit = $_POST['nama_penyakit'];
    $id = $_POST['id'];

    $stmt = $koneksi->prepare("UPDATE `penyakit` SET `nama_penyakit` = ? WHERE `penyakit`.`id_penyakit` = ?");
    $stmt->bind_param("si", $nama_penyakit, $id);
    $stmt->execute();

    echo json_encode(["status" => true, "message" => "Data penyakit berhasil diperbarui"]);
} catch (Exception $e) {
    echo json_encode(["status" => false, "message" => $e->getMessage()]);
    exit();
}