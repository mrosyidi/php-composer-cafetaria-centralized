<?php 

    require_once __DIR__ . "/../../vendor/autoload.php";

    use \Cafetaria\Config\Database;
    use \Cafetaria\Entity\Detail;
    use \Cafetaria\Repository\DetailRepositoryImpl;

    function testFindAll(): void 
    {
        $connection = Database::getConnection();
        $detailRepository = new DetailRepositoryImpl($connection);
        $details = $detailRepository->findAll();
        var_dump($details);
    }

    function testSave(): void 
    {
        $connection = Database::getConnection();
        $detailRepository = new DetailRepositoryImpl($connection);
        $detail = new Detail(1,"Es Oyen",1,12000,12000);
        $detailRepository->save($detail);
        $details = $detailRepository->findAll();
        var_dump($details);
    }

    testSave();