<?php 

    namespace Cafetaria\Repository;

    use \Cafetaria\Entity\Payment;
    use \Cafetaria\Repository\PaymentRepository;

    class PaymentRepositoryImpl implements PaymentRepository
    {
        private \PDO $connection;

        public function __construct(\PDO $connection)
        {
            $this->connection = $connection;
        }

        public function findAll(): array 
        {
            $sql = "SELECT code,total,pay,changes FROM payments";
            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $payments = [];

            foreach($statement as $row)
            {
                $payment = new Payment();
                $payment->setCode($row['code']);
                $payment->setTotal($row['total']);
                $payment->setPay($row['pay']);
                $payment->setChange($row['changes']);
                $payments[] = $payment;
            }

            return $payments;
        }

        public function save(Payment $payment): void 
        {
            $sql = "INSERT INTO payments(code,total,pay,changes) VALUES(?,?,?,?)";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$payment->getCode(),$payment->getTotal(),$payment->getPay(),$payment->getChange()]);
        }
    }