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

    testShowDrink();