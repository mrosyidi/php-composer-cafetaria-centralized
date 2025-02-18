<?php 

    require_once __DIR__ . "/../vendor/autoload.php";

    class Order 
    {
        private int $code;
        public function __construct(int $code){ $this->code = $code; }
        public function getCode(): int { return $this->code; }
    }

    class Payment 
    {
        private int $code;
        public function __construct(int $code){ $this->code = $code; }
        public function getCode(): int { return $this->code; }
    }

    function testCodeHelperEmpty(): void 
    {
        $orders = [];
        $payments = [];
        $code = \Cafetaria\Helper\CodeHelper::code($orders, $payments, false);
        var_dump($code);
    }

    function testCodeHelperSameCode(): void 
    {
        $orders[] = new Order(1);
        $payments = [];
        $code = \Cafetaria\Helper\CodeHelper::code($orders, $payments, false);
        var_dump($code);
    }

    function testCodeHelperDifferentCode(): void 
    {
        $orders[] = new Order(1);
        $payments = [];
        $code = \Cafetaria\Helper\CodeHelper::code($orders, $payments, true);
        var_dump($code);
    }

    function testCodeHelperPaymentNotEmpty(): void 
    {
        $orders = [];
        $payments[] = new Order(1);
        $code = \Cafetaria\Helper\CodeHelper::code($orders, $payments, true);
        var_dump($code);
    }

    function testCodeHelperOrderGreaterThanPaymentSameCode(): void 
    {
        $orders[] = new Order(2);
        $payments[] = new Payment(1);
        $code = \Cafetaria\Helper\CodeHelper::code($orders, $payments, false);
        var_dump($code);
    }

    function testCodeHelperOrderGreaterThanPaymentDifferentCode(): void 
    {
        $orders[] = new Order(2);
        $payments[] = new Payment(1);
        $code = \Cafetaria\Helper\CodeHelper::code($orders, $payments, true);
        var_dump($code);
    }

    function testCodeHelperOrderLowerThanPayment(): void 
    {
        $orders[] = new Order(1);
        $payments[] = new Payment(2);
        $code = \Cafetaria\Helper\CodeHelper::code($orders, $payments, true);
        var_dump($code);
    }

    testCodeHelperOrderLowerThanPayment();