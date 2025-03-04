<?php 

    namespace Cafetaria\Service;

    use \Cafetaria\Entity\Drink;
    use \Cafetaria\Repository\DrinkRepository;
    use \Cafetaria\Service\DrinkService;
    
    class DrinkServiceImpl implements DrinkService 
    {
        private DrinkRepository $drinkRepository;

        public function __construct(DrinkRepository $drinkRepository)
        {
            $this->drinkRepository = $drinkRepository;
        }

        public function showDrink(): void
        {
            echo "DAFTAR MINUMAN" . PHP_EOL;

            $drinks = $this->drinkRepository->findAll();

            if(empty($drinks))
            {
                echo "Tidak ada daftar minuman" . PHP_EOL;
            }else
            {
                foreach($drinks as $number => $drink)
                {
                    $number++;
                    echo "$number. " . $drink->getName() . "  Rp." . $drink->getPrice() . PHP_EOL;
                }
            }
        }

        public function addDrink(string $name, int $price): void
        {
            $drink = new Drink($name, $price);
            $this->drinkRepository->save($drink);
        }

        public function getDrink(): array
        {
            $drinks = $this->drinkRepository->findAll();
            return $drinks;
        }

        public function removeDrink(string $name): bool
        {

        }
    }