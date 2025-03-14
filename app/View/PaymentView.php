<?php 

    namespace Cafetaria\View;

    use \Cafetaria\Service\OrderService;
    use \Cafetaria\Service\PaymentService;
    use \Cafetaria\Service\DetailService;
    use \Cafetaria\Helper\FindHelper;
    use \Cafetaria\Helper\DuplicateHelper;
    use \Cafetaria\Helper\InputHelper;
    use \Cafetaria\Helper\PayHelper;

    class PaymentView
    {
        private OrderService $orderService;
        private PaymentService $paymentService;
        private DetailService $detailService;

        public function __construct(OrderService $orderService, PaymentService $paymentService, DetailService $detailService)
        {
            $this->orderService = $orderService;
            $this->paymentService = $paymentService;
            $this->detailService = $detailService;
        }

        public function showPayment(): void
        {
            while(true)
            {
                $this->orderService->showOrder();

                echo "Menu Pembayaran" . PHP_EOL;
                echo "1. Bayar Pesanan" . PHP_EOL;
                echo "x. Kembali" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih");

                if($pilihan == "1")
                {
                    $this->addPayment();
                }else if($pilihan == "x")
                {
                    break;
                }else
                {
                    echo "Pilihan tidak dimengerti" . PHP_EOL;
                }
            }
        }

        public function addPayment(): void 
        {
            echo "PEMBAYARAN PESANAN" . PHP_EOL;
            $code = InputHelper::input("Kode Pesanan (x untuk batal)");

            if($code == "x")
            {
                echo "Batal memproses pesanan" . PHP_EOL;
            }else
            {
                $orders = $this->orderService->getOrder();
                $codeOrder = FindHelper::find($orders, $code);

                if($codeOrder)
                {
                    $pay = PayHelper::pay($orders, $code);
                    echo "Total yang harus dibayar : Rp." . $pay . PHP_EOL;

                    $money = InputHelper::input("Jumlah uang (x untuk batal)");

                    if($money == "x")
                    {
                        echo "Batal memproses pesanan" . PHP_EOL;
                    }else if(!is_numeric($money))
                    {
                        echo "Gagal memproses pesanan, jumlah uang harus bilangan" . PHP_EOL;
                    }else if($money < $pay)
                    {
                        echo "Gagal memproses pesanan, jumlah uang yang digunakan tidak cukup" . PHP_EOL;
                    }else
                    {
                        $change = $money-$pay;
                        $elements = DuplicateHelper::duplicate($orders, $code);
                        $this->paymentService->addPayment($code, $pay, $money);
                        $this->orderService->removeOrder($code);
                        $this->detailService->addDetail($elements);

                        echo "Kembalian : Rp." . $change . PHP_EOL;
                    }
                }else
                {
                    echo "Kode pesanan tidak ditemukan" . PHP_EOL;
                }
            }
        }
    }
