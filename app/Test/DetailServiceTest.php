<?php 

    require_once __DIR__ . "/../../vendor/autoload.php";

    use \Cafetaria\Config\Database;
    use \Cafetaria\Repository\OrderRepositoryImpl;
    use \Cafetaria\Repository\DetailRepositoryImpl;
    use \Cafetaria\Service\DetailServiceImpl;

    function testShowDetail(): void
    {
        $connection = Database::getConnection();
        $detailRepository = new DetailRepositoryImpl($connection);
        $detailService = new DetailServiceImpl($detailRepository);
        $detailService->showDetail(2);
    }
    
    function testAddDetail(): void 
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $detailRepository = new DetailRepositoryImpl($connection);
        $detailService = new DetailServiceImpl($detailRepository);
        $orders = $orderRepository->findAll();
        $detailService->addDetail($orders);
        $detailService->showDetail(2);
    }

    testAddDetail();