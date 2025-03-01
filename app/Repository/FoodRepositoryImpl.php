<?php 

    namespace Cafetaria\Repository;

    use \Cafetaria\Entity\Food;
    use \Cafetaria\Repository\FoodRepository;

    class FoodRepositoryImpl implements FoodRepository
    {
        private \PDO $connection;

        public function __construct(\PDO $connection)
        {
            $this->connection = $connection;
        }

        public function findAll(): array 
        {
            $sql = "SELECT name, price FROM foods";
            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $foods = [];

            foreach($statement as $row)
            {
                $food = new Food();
                $food->setName($row['name']);
                $food->setPrice($row['price']);
                $foods[] = $food;
            }

            return $foods;
        }

        public function save(Food $food): void
        {
            $sql = "INSERT INTO foods(name,price) VALUES(?,?)";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$food->getName(),$food->getPrice()]);
        }

        public function remove(string $name): bool
        {
            $sql = "SELECT name FROM foods WHERE name=?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$name]);

            if($statement->fetch())
            {
                $sql = "DELETE FROM foods WHERE name=?";
                $statement = $this->connection->prepare($sql);
                $statement->execute([$name]);
                return true;
            }else
            {
                return false;
            }
        }
    }