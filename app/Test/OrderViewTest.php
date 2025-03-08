<?php 

    require_once __DIR__ . '/../../vendor/autoload.php';

    use \Cafetaria\Config\Database;
    use \Cafetaria\Repository\FoodRepositoryImpl;
    use \Cafetaria\Service\FoodServiceImpl;
    use \Cafetaria\Repository\DrinkRepositoryImpl;
    use \Cafetaria\Service\DrinkServiceImpl;
    use \Cafetaria\Repository\OrderRepositoryImpl;
    use \Cafetaria\Service\OrderServiceImpl;
    use \Cafetaria\View\OrderView;

    function testViewShowOrder(): void 
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $orderView = new OrderView($orderService);
        $orderView->showOrder();
    }

    function testViewAddOrder(): void 
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foodService = new FoodServiceImpl($foodRepository);
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkService = new DrinkServiceImpl($drinkRepository);
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $orderView = new OrderView($foodService, $drinkService, $orderService);
        $orderView->addOrder(2, true);
        $orderService->showOrder();
    }

    testViewAddOrder();