<?php
    class Product{
        private $id;
        private $name;
        private $price;

        public function __construct($id, $name, $price){
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($new_id){
            $this->id = $new_id;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($new_name){
            $this->name = $new_name;
        }

        public function getPrice(){
            return $this->price;
        }

        public function setPrice($new_price){
            $this->price = $new_price;
        }
    }
?>