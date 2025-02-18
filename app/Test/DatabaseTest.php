<?php 

    require_once __DIR__ . "/../../vendor/autoload.php";

    use \Cafetaria\Config\Database;

    $db = Database::getConnection();
    echo "Sukses membuat koneksi ke database" . PHP_EOL;