<?php 

    require_once __DIR__ . '/../../vendor/autoload.php';

    use \Cafetaria\Config\Database;
    use \Cafetaria\Repository\PaymentRepositoryImpl;

    function testFindAll(): void 
    {
        $connection = Database::getConnection();
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $payments = $paymentRepository->findAll();
        var_dump($payments);
    }

    testFindAll();