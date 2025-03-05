<?php 

    require_once __DIR__ . '/../../vendor/autoload.php';

    use \Cafetaria\Entity\Order;

    function testInstanceOrderCostruct(): void
    {
        $order = new Order(1, "Mie Goreng", 6000, 2);
        var_dump($order);
    }

    function testInstanceOrderEncapsulate(): void
    {
        $order = new Order();
        $order->setCode(1);
        $order->setName("Mie Goreng");
        $order->setPrice(6000);
        $order->setQty(2);
        $order->setSubTotal();
        var_dump($order);
    }

    testInstanceOrderEncapsulate();

