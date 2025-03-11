<?php 

    namespace Cafetaria\Repository;

    use \Cafetaria\Entity\Detail;

    class DetailRepositoryImpl implements DetailRepository
    {
        private \PDO $connection;

        public function __construct(\PDO $connection)
        {
            $this->connection = $connection;
        }

        public function findAll(): array
        {
            $sql = "SELECT code, name, price, qty, sub_total FROM details";
            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $details = [];

            foreach($statement as $row)
            {
                $detail = new Detail();
                $detail->setCode($row['code']);
                $detail->setName($row['name']);
                $detail->setPrice($row['price']);
                $detail->setQty($row['qty']);
                $detail->setSubTotal($row['sub_total']);
                $details[] = $detail;
            }

            return $details;
        }

        public function save(Detail $detail): void
        {
            
        }
    }