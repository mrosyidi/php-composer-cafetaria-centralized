<?php 

    require_once __DIR__ . '/../../vendor/autoload.php';

    use \Cafetaria\Config\Database;
    use \Cafetaria\Entity\Order;
    use \Cafetaria\Repository\OrderRepositoryImpl;  
    use \Cafetaria\Service\OrderServiceImpl;

    function testShowOrder(): void
    {
        $connection = Database::getConnection();
        $orderRepository = new orderRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $orderService->showOrder();
    }

    function testAddOrder(): void 
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $orderService->showOrder();
        $orderService->addOrder(1, "Soto Ayam", 12000, 1);
        $orderService->showOrder();
    }

    function testGetOrder(): void 
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $orders = $orderService->getOrder();
        var_dump($orders);
    }

    testGetOrder();
