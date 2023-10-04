<?php
class Product{
    private $id;
    private $name;
    private $price;

    public function __construct(int $id, string $name, $price){
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;       
    }

    public function getFormattedPrice() {
       return number_format((float)$this->price,2);
         
    }


    public function showDetails() {
        return "Product Details: \n" . "ID: $this->id \n" . "Name: $this->name \n". "Price: $".$this->getFormattedPrice(); 
    }
}

$product=new Product(1, 'T-shirt', 19.99);
echo $product->showDetails();
