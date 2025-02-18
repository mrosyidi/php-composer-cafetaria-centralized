<?php 
    
    require_once __DIR__ . "/../vendor/autoload.php";

    class Food
    {
        private string $name;
        public function __construct(string $name){ $this->name = $name; }
        public function getName(): string{ return $this->name; }
    }

    class Drink 
    {
        private string $name;
        public function __construct(string $name){ $this->name = $name; }
        public function getName(): string{ return $this->name; }
    }

    function testCheckHelperFoodNotFound(): void 
    {
        $foods[] = new Food("Mie Ayam");
        $foods[] = new Food("Ayam Goreng");
        $result = \Cafetaria\Helper\CheckHelper::check($foods, "Rawon");
        var_dump($result);
    }

    function testCheckHelperFoodFound(): void 
    {
        $foods[] = new Food("Pastel");
        $foods[] = new Food("Ayam Goreng");
        $result = \Cafetaria\Helper\CheckHelper::check($foods, "Pastel");
        var_dump($result);
    }

    function testCheckHelperDrinkNotFound(): void 
    {
        $drinks[] = new Drink("Es Campur");
        $drinks[] = new Drink("Es Oyen");
        $result = \Cafetaria\Helper\CheckHelper::check($drinks, "Es Teh");
        var_dump($result);
    }

    function testCheckHelperDrinkFound(): void 
    {
        $drinks[] = new Drink("Es Coklat");
        $drinks[] = new Drink("Jus Wortel");
        $result = \Cafetaria\Helper\CheckHelper::check($drinks, "Jus Wortel");
        var_dump($result);
    }

    testCheckHelperDrinkFound();