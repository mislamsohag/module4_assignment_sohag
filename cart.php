<?php

class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    // You can add setters if needed

    public function __toString() {
        return "Product ID: " . $this->id . ", Name: " . $this->name . ", Price: $" . number_format($this->price, 2);
    }
}

// Usage example:
$product1 = new Product(1, "Example Product 1", 19.99);
echo $product1 . "\n";
