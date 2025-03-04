<?php 

    namespace Cafetaria\View;

    use \Cafetaria\Service\DrinkService;
    use \Cafetaria\Helper\CheckHelper;
    use \Cafetaria\Helper\InputHelper;

    class DrinkView 
    {
        private DrinkService $drinkService;

        public function __construct(DrinkService $drinkService)
        {
            $this->drinkService = $drinkService;
        }

        public function showDrink(): void 
        {
            while(true)
            {
                $this->drinkService->showDrink();

                echo "Menu Minuman" . PHP_EOL;
                echo "1. Tambah Minuman" . PHP_EOL;
                echo "2. Hapus Minuman" . PHP_EOL;
                echo "x. Kembali" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih");

                if($pilihan == "1")
                {
                    $this->addDrink();
                }else if($pilihan == "2")
                {
                    $this->removeDrink();
                }else if($pilihan == "x")
                {
                    break;
                }else 
                {
                    echo "Pilihan tidak dimengerti" . PHP_EOL;
                }
            }
        }

        public function addDrink(): void 
        {
            $drinks = $this->drinkService->getDrink();

            echo "MENAMBAH MINUMAN" . PHP_EOL;

            $name = InputHelper::input("Nama minuman (x untuk batal)");

            if($name == "x")
            {
                echo "Batal menambah minuman" . PHP_EOL;
            }else
            {
                $price = InputHelper::input("Harga price (x untuk batal)");

                if($price == "x")
                {
                    echo "Batal menambah minuman" . PHP_EOL;
                }else if(!is_numeric($price))
                {
                    echo "Gagal menambah minuman, harga minuman harus bilangan" . PHP_EOL;
                }else if($price <= 0)
                {
                    echo "Gagal menambah minuman, harga harus bilangan positif" . PHP_EOL;
                }else if(CheckHelper::check($drinks, $name))
                {
                    echo "Gagal menambah minuman, nama minuman sudah ada" . PHP_EOL;
                }else
                {
                    $this->drinkService->addDrink($name, $price);
                }
            }
        }

        function removeDrink(): void 
        {
            echo "MENGHAPUS MINUMAN" . PHP_EOL;

            $number = InputHelper::input("Nomor minuman (x untuk batal)");

            if($number == "x")
            {
                echo "Batal menghapus minuman" . PHP_EOL;
            }else if(!is_numeric($number))
            {
                echo "Gagal menghapus minuman, nomor harus bilangan" . PHP_EOL;
            }else if(count($this->drinkService->getDrink()) < $number || $number <= 0)
            {
                echo "Gagal menghapus minuman nomor $number" . PHP_EOL;
            }else 
            {
                $name = $this->drinkService->getDrink()[$number-1]->getName();
                $success = $this->drinkService->removeDrink($name);

                if($success)
                {
                    echo "Sukses menghapus minuman nomor $number" . PHP_EOL;
                }else
                {
                    echo "Gagal menghapus minuman nomor $number" . PHP_EOL;
                }
            }
        }
    }