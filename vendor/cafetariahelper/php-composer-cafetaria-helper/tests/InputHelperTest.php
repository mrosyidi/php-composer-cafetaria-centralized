<?php 

    require_once __DIR__ . "/../vendor/autoload.php";

    $name = \Cafetaria\Helper\InputHelper::input("Nama");

    echo "Halo " . $name . PHP_EOL;