<!-- 

-->
<?php

$nama_tabel = "penyakit";

$sql = "
    CREATE TABLE `shecare_native`.`penyakit` (
        `id_penyakit` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        `nama_penyakit` VARCHAR(255) NOT NULL, 
        `id_user` INT NOT NULL, 
        `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, 
        `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, 
    );
    ALTER TABLE `shecare_native`.`penyakit` ADD FOREIGN KEY (`id_user`) REFERENCES `shecare_native`.`users`(`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
";

if ($koneksi->query($sql) === true) {
    echo "Tabel dibuat!: $nama_tabel <br>";
} else {
    echo "Error: saat membuat tabel $nama_tabel<br>";
}