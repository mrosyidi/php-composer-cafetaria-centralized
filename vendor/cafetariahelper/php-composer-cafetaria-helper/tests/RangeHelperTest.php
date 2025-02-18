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

    function testRangeHelperOutOfRangeMinus(): void 
    {
        $foods[] = new Food("Mie Ayam");
        $foods[] = new Food("Soto Ayam");
        $foods[] = new Food("Rawon");
        $result = \Cafetaria\Helper\RangeHelper::range($foods, -1);
        var_dump($result);
    }

    function testRangeHelperOutOfRangePlus(): void 
    {
        $foods[] = new Food("Pastel");
        $foods[] = new Food("Donat");
        $foods[] = new Food("Gado-Gado");
        $result = \Cafetaria\Helper\RangeHelper::range($foods, 5);
        var_dump($result);
    }

    function testRangeHelperInRange(): void 
    {
        $drinks[] = new Drink("Es Oyen");
        $drinks[] = new Drink("Es Campur");
        $drinks[] = new Drink("Jus Wortel");
        $result = \Cafetaria\Helper\RangeHelper::range($drinks, 1);
        var_dump($result);
    }

    testRangeHelperInRange();