<?php 

    require_once __DIR__ . "/../vendor/autoload.php";

    use \Cafetaria\Config\Database;
    use \Cafetaria\Helper\InputHelper;

    $connection = Database::getConnection();

    echo "Cafetaria App" . PHP_EOL;

    while(true)
    {
        echo "MENU UTAMA" . PHP_EOL;
        echo "1. Daftar Makanan" . PHP_EOL;
        echo "2. Daftar Minuman" . PHP_EOL;
        echo "3. Pemesanan" . PHP_EOL;
        echo "4. Pembayaran" . PHP_EOL;
        echo "5. Detail" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = InputHelper::input("Pilih");

        if($pilihan == "1")
        {
            
        }else if($pilihan == "2")
        {

        }else if($pilihan == "3")
        {

        }else if($pilihan == "4")
        {

        }else if($pilihan == "5")
        {

        }else if($pilihan == "x")
        {
            break;
        }else 
        {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;