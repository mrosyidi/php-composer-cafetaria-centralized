<?php 

    namespace Cafetaria\Service;

    use \Cafetaria\Entity\Order;
    use \Cafetaria\Repository\OrderRepository;
    use \Cafetaria\Service\OrderService;

    class OrderServiceImpl implements OrderService
    {
        private OrderRepository $orderRepository;

        public function __construct(OrderRepository $orderRepository)
        {
            $this->orderRepository = $orderRepository;
        }

        public function showOrder(): void
        {
            $orders = $this->orderRepository->findAll();

            echo "DAFTAR PESANAN" . PHP_EOL;

            if(empty($orders))
            {
                echo "Tidak ada daftar pesanan" . PHP_EOL;
            }else
            {
                foreach($orders as $number => $order)
                {
                    $number++;
                    echo "$number. " . $order->getCode() . " " . $order->getName() . " Rp." . $order->getPrice() .
                    " (x" . $order->getQty() . ") Rp." . $order->getSubTotal() . PHP_EOL;
                }
            }
        }

        public function addOrder(int $code, string $name, int $price, int $qty): void 
        {
            $order = new Order($code, $name, $price, $qty);
            $this->orderRepository->save($order);
        }

        public function removeOrder(int $code): void
        {
            $this->orderRepository->remove($code);
        }

        public function getOrder(): array
        {
            $orders = $this->orderRepository->findAll();
            return $orders;
        }
    }