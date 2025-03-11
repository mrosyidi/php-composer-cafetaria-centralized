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

    testFindAll();