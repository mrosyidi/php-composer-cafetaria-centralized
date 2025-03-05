<?php 

    require_once __DIR__ . '/../../vendor/autoload.php';

    use \Cafetaria\Config\Database;
    use \Cafetaria\Entity\Order;
    use \Cafetaria\Repository\OrderRepositoryImpl;

    function testFindAll(): void 
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $orders = $orderRepository->findAll();
        var_dump($orders);
    }

    testFindAll();