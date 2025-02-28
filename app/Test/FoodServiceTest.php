<?php 

    require_once __DIR__ . "/../../vendor/autoload.php";

    use \Cafetaria\Config\Database;
    use \Cafetaria\Repository\FoodRepositoryImpl;
    use \Cafetaria\Service\FoodServiceImpl;

    function testShowFood(): void
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foodService = new FoodServiceImpl($foodRepository);
        $foodService->showFood();
    }

    function testAddFood(): void 
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foodService = new FoodServiceImpl($foodRepository);
        $foodService->showFood();
        $foodService->addFood("Ayam Goreng", 9000);
        $foodService->showFood();
    }


    testAddFood();