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

    function testSave(): void 
    {
        $connection = Database::getConnection();
        $drink = new Drink("Jus Melon", 7000);
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkRepository->save($drink);
        $drinks = $drinkRepository->findAll();
        var_dump($drinks);
    }

    function testRemove(): void 
    {
        $connection = Database::getConnection();
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $result = $drinkRepository->remove("Es Campur");
        var_dump($result);
        $drinks = $drinkRepository->findAll();
        var_dump($drinks);
    }

    testRemove();