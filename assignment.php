<?php
class Product{
    public $id;
    public $name;
    public $price;

    public function __construct(int $id, string $name, $price){
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;       
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return number_format((float)$this->price,2,'.','');
    }


    public function showDetails() {
        return "Product Details: \n" . "ID: $this->id \n" . "Name: $this->name \n". "Price: $".$this->price; 
    }
}

$product=new Product(1, 'T-shirt', 19.99);
echo $product->showDetails();
