<?php 

    require_once __DIR__ . "/../../vendor/autoload.php";

    use \Cafetaria\Config\Database;
    use \Cafetaria\Entity\Food;
    use \Cafetaria\Repository\FoodRepositoryImpl;

    function testFindAll(): void 
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $food = $foodRepository->findAll();
        var_dump($food);
    }

    function testSave(): void 
    {
        $food = new Food("Ayam Panggang", 15000);
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foodRepository->save($food);
        $foods = $foodRepository->findAll();
        var_dump($foods);
    }
    
    testSave();