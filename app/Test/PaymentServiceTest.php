<?php 

    require_once __DIR__ . '/../../vendor/autoload.php';

    use \Cafetaria\Config\Database;
    use \Cafetaria\Repository\PaymentRepositoryImpl;
    use \Cafetaria\Service\PaymentServiceImpl;

    function testShowPayment(): void
    {
        $connection = Database::getConnection();
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $paymentService->showPayment();
    }

    testShowPayment();