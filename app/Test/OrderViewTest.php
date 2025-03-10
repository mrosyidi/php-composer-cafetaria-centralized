<?php 

    require_once __DIR__ . '/../../vendor/autoload.php';

    use \Cafetaria\Config\Database;
    use \Cafetaria\Repository\FoodRepositoryImpl;
    use \Cafetaria\Service\FoodServiceImpl;
    use \Cafetaria\Repository\DrinkRepositoryImpl;
    use \Cafetaria\Service\DrinkServiceImpl;
    use \Cafetaria\Repository\OrderRepositoryImpl;
    use \Cafetaria\Service\OrderServiceImpl;
    use \Cafetaria\Repository\PaymentRepositoryImpl;
    use \Cafetaria\Service\PaymentServiceImpl;
    use \Cafetaria\View\OrderView;

    function testViewShowOrder(): void 
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foodService = new FoodServiceImpl($foodRepository);
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkService = new DrinkServiceImpl($drinkRepository);
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $orderView = new OrderView($foodService, $drinkService, $orderService, $paymentService);
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
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $orderView = new OrderView($foodService, $drinkService, $orderService, $paymentService);
        $orderView->addOrder(2, true);
        $orderService->showOrder();
    }

    testViewAddOrder();