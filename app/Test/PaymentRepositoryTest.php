<?php 

    require_once __DIR__ . '/../../vendor/autoload.php';

    use \Cafetaria\Config\Database;
    use \Cafetaria\Entity\Payment;
    use \Cafetaria\Repository\PaymentRepositoryImpl;

    function testFindAll(): void 
    {
        $connection = Database::getConnection();
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $payments = $paymentRepository->findAll();
        var_dump($payments);
    }

    function testSave(): void 
    {
        $connection = Database::getConnection();
        $payment = new Payment(2,45000,50000,5000);
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentRepository->save($payment);
        $payments = $paymentRepository->findAll();
        var_dump($payments);
    }

    testSave();