<?php 

    require_once __DIR__ . "/../vendor/autoload.php";

    class Food
    {
        private string $name;
        private int $price;

        public function __construct(string $name, int $price)
        { 
            $this->name = $name;
            $this->price = $price; 
        }

        public function getName(): string{ return $this->name; }
        public function getPrice(): int{ return $this->price; }
    }

    class Drink 
    {
        private string $name;
        private int $price;

        public function __construct(string $name, int $price)
        { 
            $this->name = $name; 
            $this->price = $price;
        }

        public function getName(): string{ return $this->name; }
        public function getPrice(): int{  return $this->price; }
    }

    function testDataHelperFood(): void 
    {
        $foods[] = new Food("Mie Ayam", 6000);
        $foods[] = new Food("Rawon", 12000);
        $foods[] = new Food("Soto Ayam", 10000);
        $data = \Cafetaria\Helper\DataHelper::data($foods, 1);
        var_dump($data);
    }

    function testDataHelperDrink(): void 
    {
        $drinks[] = new Drink("Es Oyen", 12000);
        $drinks[] = new Drink("Es Campur", 12000);
        $drinks[] = new Drink("Jus Wortel", 6000);
        $data = \Cafetaria\Helper\DataHelper::data($drinks, 2);
        var_dump($data);
    }

    testDataHelperDrink();