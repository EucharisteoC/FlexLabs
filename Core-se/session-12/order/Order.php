<?php
    class Order{
        public $customerName;
        public $menuName;
        public $menuPrice;
        public $quantity;

        public function countTotalPrice(){
            return $this->menuPrice * $this->quantity;
        }

        public function showDetailOrder(){
            echo "Customer name: ". $this->customerName . "<br>";
            echo "Menu: ". $this->menuName . "<br>";
            echo "Price: Rp ". number_format($this->menuPrice). "<br>";
            echo "Quantity: ".$this->quantity."<br>";

            echo "<hr>";
            echo "Total: ".number_format($this->countTotalPrice())."<br>";
        }
    }
?>