<?php 

    require_once __DIR__ . "/../../vendor/autoload.php";

    use \Cafetaria\Config\Database;
    use \Cafetaria\Entity\Drink;
    use \Cafetaria\Repository\DrinkRepositoryImpl;  
    use \Cafetaria\Service\DrinkServiceImpl;

    function testShowDrink(): void
    {
        $connection = Database::getConnection();
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkService = new DrinkServiceImpl($drinkRepository);
        $drinkService->showDrink();
    }

    function testAddDrink(): void 
    {
        $connection = Database::getConnection();
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkService = new DrinkServiceImpl($drinkRepository);
        $drinkService->showDrink();
        $drinkService->addDrink("Es Campur", 10000);
        $drinkService->showDrink();
    }

    function testGetDrink(): void 
    {
        $connection = Database::getConnection();
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkService = new DrinkServiceImpl($drinkRepository);
        $drinks = $drinkService->getDrink();
        var_dump($drinks);
    }

    testGetDrink();