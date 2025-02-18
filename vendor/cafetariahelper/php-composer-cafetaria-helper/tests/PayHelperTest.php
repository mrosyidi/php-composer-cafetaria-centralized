<?php 

    require_once __DIR__ . "/../vendor/autoload.php";

    class Order 
    {
        private int $code;
        private int $subTotal;
        
        public function __construct(int $code, int $subTotal)
        { 
            $this->code = $code; 
            $this->subTotal = $subTotal;
        }

        public function getCode(): int { return $this->code; }
        public function getSubTotal(): int { return $this->subTotal; }
    }

    function testPayHelperDataNotExist(): void 
    {
        $orders = [];
        $total = \Cafetaria\Helper\PayHelper::pay($orders, 2);
        var_dump($total);
    }

    function testPayHelperDataExist(): void 
    {
        $orders[] = new Order(1, 45000);
        $orders[] = new Order(2, 12000);
        $orders[] = new Order(2, 20000);
        $total = \Cafetaria\Helper\PayHelper::pay($orders, 2);
        var_dump($total);
    }

    testPayHelperDataExist();