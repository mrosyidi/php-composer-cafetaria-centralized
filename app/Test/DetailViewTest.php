<?php   

    require_once __DIR__ . "/../../vendor/autoload.php";

    use \Cafetaria\Config\Database;
    use \Cafetaria\Repository\PaymentRepositoryImpl;
    use \Cafetaria\Repository\DetailRepositoryImpl;
    use \Cafetaria\Service\PaymentServiceImpl;
    use \Cafetaria\Service\DetailServiceImpl;
    use \Cafetaria\View\DetailView;

    function testViewShowDetail(): void 
    {
        $connection = Database::getConnection();
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $detailReposiory = new DetailRepositoryImpl($connection);
        $detailService = new DetailServiceImpl($detailReposiory);
        $detailView = new DetailView($detailService, $paymentService);
        $detailView->showDetail();
    }

    function testViewFilterDetail(): void 
    {
        $connection = Database::getConnection();
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $detailReposiory = new DetailRepositoryImpl($connection);
        $detailService = new DetailServiceImpl($detailReposiory);
        $detailView = new DetailView($detailService, $paymentService);
        $paymentService->showPayment();
        $detailView->filterDetail();
    }

    testViewFilterDetail();