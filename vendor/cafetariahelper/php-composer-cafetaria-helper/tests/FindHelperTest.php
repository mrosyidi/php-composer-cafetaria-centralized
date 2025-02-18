<?php 

    require_once __DIR__ . "/../vendor/autoload.php";

    class Order 
    {
        private int $code;
        public function __construct(int $code){ $this->code = $code; }
        public function getCode(): int { return $this->code; }
    }

    function testFindHelperNotFound(): void 
    {
        $orders = [];
        $result = \Cafetaria\Helper\FindHelper::find($orders, 2);
        var_dump($result);
    }

    function testFindHelperFound(): void 
    {
        $orders[] = new Order(1);
        $orders[] = new Order(2);
        $orders[] = new Order(3);
        $result = \Cafetaria\Helper\FindHelper::find($orders, 2);
        var_dump($result);
    }

    testFindHelperFound();