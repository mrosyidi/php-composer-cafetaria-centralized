<?php 

    namespace Cafetaria\Service;

    interface OrderService
    {
        public function showOrder(): void;
        public function addOrder(int $code, string $name, int $price, int $qty): void;
        public function removeOrder(int $code): void;
        public function getOrder(): array;
    }