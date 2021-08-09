<?php
    require_once 'model/product.php';
    require_once 'DAO/userDAO.php';

    class ProductController{
        
        private $productdao;

        public function __construct(){
            $this->productdao = new ProductDAO;
        }

        public function add(){
            $p = new Product("test", "t", "12.3");
            $this->productdao->insert($p);
        }

        public function search(){
            $this->productdao->search(1);
        }

        public function delete(){
            $this->productdao->delete(1);
        }

        public function listAll(){
            $productdao = new Product();
            
        }

    }
?>