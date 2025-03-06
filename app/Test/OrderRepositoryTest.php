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

    function testSave(): void 
    {
        $connection = Database::getConnection();
        $order = new Order(5, "Jus Anggur", 6000, 2);
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderRepository->save($order);
        $orders = $orderRepository->findAll();
        var_dump($orders);
    }

    testSave();