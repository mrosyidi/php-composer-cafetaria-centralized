<?php   

    namespace Cafetaria\Service;
    
    use \Cafetaria\Repository\PaymentRepository;

    class PaymentServiceImpl implements PaymentService
    {
        private PaymentRepository $paymentRepository;

        public function __construct(PaymentRepository $paymentRepository)
        {
            $this->paymentRepository = $paymentRepository;
        }

        public function showPayment(): void
        {
            echo "DAFTAR PEMBAYARAN" . PHP_EOL;

            $payments = $this->paymentRepository->findAll();

            if(empty($payments))
            {
                echo "Tidak ada daftar pembayaran" . PHP_EOL;
            }else
            {
                $counter = 0;
                foreach($payments as $payment)
                {
                    $counter++;
                    echo "$counter. Kode: " . $payment->getCode() . "  Total: " . $payment->getTotal() .
                    "  Jumlah Bayar: " . $payment->getPay() . "  Kembalian: " . $payment->getChange() . PHP_EOL;
                }
            }
        }

        public function addPayment(int $code, int $total, int $pay): void
        {
            
        }

        public function getPayment(): array
        {
            
        }
    }