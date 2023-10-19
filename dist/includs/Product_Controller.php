<?php

class Product_Controller extends Product_Model
{
    private $name;
    private $description;
    private $price;
    private $img;

    public function __construct($name=null, $description = null, $price = null, $img=null)
    {
        parent::__construct();

        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->img = $img;
    }

    public function add_product(){
        //Error handlers
        if (!$this->isEmptyInputAdd()) {
            header("location: /task7/index.php?error-add=EmptyInput");
            exit();
        }

        $this->addProduct($this->name,$this->description,$this->price,$this->img);
    }

    public function get_products($number_of_product){
       return $this->getProducts($number_of_product);
    }
    public function get_product_by_id($id){
        return $this->getProductById($id);
    }

    public function update_product($name, $description, $price, $image_url,$id){
        return $this->updateProductById($name, $description, $price, $image_url,$id);
    }
    public function delete_product($id){
        return $this->deleteProductById($id);
    }

    private function isEmptyInputAdd()
    {
        $flag = true;
        if (empty($this->name) || empty($this->description)||empty($this->img)||empty($this->price)) {
            $flag = false;
        }
        return $flag;
    }
}