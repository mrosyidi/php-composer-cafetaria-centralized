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

    function testAddPayment(): void 
    {
        $connection = Database::getConnection();
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $paymentService->addPayment(2, 60000, 100000);
        $paymentService->showPayment();
    }

    testAddPayment();