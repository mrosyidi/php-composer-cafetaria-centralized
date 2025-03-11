<?php 

    namespace Cafetaria\Service;

    use \Cafetaria\Repository\DetailRepository;

    interface DetailService
    {
        public function showDetail(int $code): void;
        public function addDetail(array $items): void;
    }