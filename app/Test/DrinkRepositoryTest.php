<?php 

    require_once __DIR__ . "/../../vendor/autoload.php";

    use \Cafetaria\Config\Database;
    use \Cafetaria\Entity\Drink;
    use \Cafetaria\Repository\DrinkRepositoryImpl;

    function testFindAll(): void 
    {
        $connection = Database::getConnection();
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinks = $drinkRepository->findAll();
        var_dump($drinks);
    }

    testFindAll();