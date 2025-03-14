<?php 

    namespace Cafetaria\Service;
    
    use \Cafetaria\Entity\Food;
    use \Cafetaria\Repository\FoodRepository;
    use \Cafetaria\Service\FoodService;

    class FoodServiceImpl implements FoodService
    {
        private FoodRepository $foodRepository;

        public function __construct(FoodRepository $foodRepository)
        {
            $this->foodRepository = $foodRepository;
        }

        public function showFood(): void
        {
            echo "DAFTAR MAKANAN" . PHP_EOL;

            $foods = $this->foodRepository->findAll();

            if(empty($foods))
            {
                echo "Tidak ada daftar makanan" . PHP_EOL;
            }else
            {
                foreach($foods as $number => $food)
                {
                    $number++;
                    echo "$number. " . $food->getName() . "  Rp." . $food->getPrice() . PHP_EOL;
                }
            }
        }

        public function addFood(string $name, int $price): void
        {
            $food = new Food($name, $price);
            $this->foodRepository->save($food);
        }

        public function getFood(): array
        {
            $foods = $this->foodRepository->findAll();
            return $foods;
        }

        public function removeFood(string $name): bool
        {
            $result = $this->foodRepository->remove($name) ? true : false;
            return $result;
        }
    }