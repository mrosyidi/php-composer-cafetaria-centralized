<?php 

    namespace Cafetaria\Service;

    interface DrinkService 
    {
        public function showDrink(): void;
        public function addDrink(string $name, int $price): void;
        public function getDrink(): array;
        public function removeDrink(string $name): bool;
    }