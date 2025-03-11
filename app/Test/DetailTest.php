<?php 

    require_once __DIR__ . "/../../vendor/autoload.php";

    use \Cafetaria\Entity\Detail;

    function testDetailCostruct(): void
    {
        $detail = new Detail(1, "Mie Goreng", 6000, 2);
        var_dump($detail);
    }

    testDetailCostruct();
