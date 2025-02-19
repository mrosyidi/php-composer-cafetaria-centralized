<?php 

    require_once __DIR__ . "/../../vendor/autoload.php";

    use \Cafetaria\Entity\Food;

    function testInstanceFoodConstruct(): void 
    {
        $food = new Food("Mie Goreng", 7000);
        echo "Nama : " . $food->getName() . PHP_EOL;
        echo "Harga : " . $food->getPrice() . PHP_EOL;
    }

    function testInstanceFoodEncapsulate(): void
    {
        $food = new Food();
        $food->setName("Soto Ayam");
        $food->setPrice(12000);
        echo "Nama : " . $food->getName() . PHP_EOL;
        echo "Harga : " . $food->getPrice() . PHP_EOL;
    }

    testInstanceFoodEncapsulate();