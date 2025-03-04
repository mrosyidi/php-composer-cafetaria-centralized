<?php 

    require_once __DIR__ . "/../../vendor/autoload.php";

    use \Cafetaria\Config\Database;
    use \Cafetaria\Repository\DrinkRepositoryImpl;
    use \Cafetaria\Service\DrinkServiceImpl;
    use \Cafetaria\View\DrinkView;

    function testViewShowDrink(): void 
    {
        $connection = Database::getConnection();
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkService = new DrinkServiceImpl($drinkRepository);
        $drinkView = new DrinkView($drinkService);
        $drinkView->showDrink();
    }

    function testViewAddDrink(): void 
    {
        $connection = Database::getConnection();
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkService = new DrinkServiceImpl($drinkRepository);
        $drinkView = new DrinkView($drinkService);
        $drinkService->showDrink();
        $drinkView->addDrink();
        $drinkService->showDrink();
    }

    function testViewRemoveDrink(): void 
    {
        $connection = Database::getConnection();
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkService = new DrinkServiceImpl($drinkRepository);
        $drinkView = new DrinkView($drinkService);
        $drinkService->showDrink();
        $drinkView->removeDrink();
        $drinkService->showDrink();
    }

    testViewShowDrink();