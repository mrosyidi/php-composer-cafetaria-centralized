<?php 

    require_once __DIR__ . "/../vendor/autoload.php";

    class Order 
    {
        private int $code;
        public function __construct(int $code){ $this->code = $code; }
        public function getCode(): int { return $this->code; }
    }

    function testDuplicateHelperDataNotExist(): void 
    {
        $orders = [];
        $elements = \Cafetaria\Helper\DuplicateHelper::duplicate($orders, 2);
        var_dump($elements);
    }

    function testDuplicateHelperDataExist(): void 
    {
        $orders[] = new Order(1);
        $orders[] = new Order(1);
        $orders[] = new Order(2);
        $elements = \Cafetaria\Helper\DuplicateHelper::duplicate($orders, 1);
        var_dump($elements);
    }

    testDuplicateHelperDataExist();