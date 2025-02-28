<?php 

    require_once __DIR__ . "/../../vendor/autoload.php";

    use \Cafetaria\Config\Database;
    use \Cafetaria\Repository\FoodRepositoryImpl;

    function testFindAll(): void 
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $food = $foodRepository->findAll();
        var_dump($food);
    }
    
    testFindAll();