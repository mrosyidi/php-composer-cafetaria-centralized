<?php 

    require_once __DIR__ . '/../../vendor/autoload.php';

    use \Cafetaria\Entity\Order;

    function testInstanceOrderCostruct(): void
    {
        $order = new Order(1, "Mie Goreng", 6000, 2);
        var_dump($order);
    }

    testInstanceOrderCostruct();

