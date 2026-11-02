<?php
    require_once "Product.php";

    class Order{
        private $product;
        private $quantity;

        public function __construct(Product $product, $quantity){
            $this->product = $product;

            $this->setQuantity($quantity);
        }

        public function setQuantity($quantity){
            if(!is_numeric($quantity) || $quantity <1){
                echo "Jumlah pesanan harus berupa angka dan minimal 1";
            }

            $this->quantity = (int) $quantity;
        }

        public function getQuantity($quantity){
            return $this->$quantity;
        }

        public function countTotal(){
            return $this->product->getPrice() * $this->quantity;
        }

        public function showOrderSummary(){
            echo "Nama Product: ". $this->product->getName() . "<br>";
            echo "Harga Satuan: ". $this->product->getPrice() . "<br>";
            echo "Jumlah: ". $this->product->getQuantity(). "<br>";
            echo "Total harga:". number_format($this->countTotal);

        }

    }



?>