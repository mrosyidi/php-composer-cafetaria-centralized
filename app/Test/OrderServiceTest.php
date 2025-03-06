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

    testShowOrder();
