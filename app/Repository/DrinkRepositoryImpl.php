<?php 

    namespace Cafetaria\Repository;

    use \Cafetaria\Entity\Drink;
    use \Cafetaria\Repository\DrinkRepository;

    class DrinkRepositoryImpl implements DrinkRepository 
    {
        private \PDO $connection;

        public function __construct(\PDO $connection)
        {
            $this->connection = $connection;
        }

        public function findAll(): array
        {
            $sql = "SELECT name, price FROM drinks";
            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $drinks = [];

            foreach($statement as $row)
            {
                $drink = new Drink();
                $drink->setName($row['name']);
                $drink->setPrice($row['price']);
                $drinks[] = $drink;
            }

            return $drinks;
        }

        public function save(Drink $drink): void
        {
            
        }

        public function remove(string $name): bool
        {
            
        }
    }