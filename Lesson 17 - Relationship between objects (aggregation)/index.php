<?php

class Product {
	public $name;
	public $value;

	function __construct($name, $value) {
		$this->name  = $name;
		$this->value = $value;
	}
}

class ShoppingCart {
	public $products;

	// Will receive a instace of class Product as parameter
	public function add(Product $product) {
		$this->products[] = $product;
	}

	public function show() {
		foreach ($this->products as $product) {
			echo $product->name . "<br>" . $product->value . "<hr>";
		}
	}
}

$product1 = new Product("Notebook", "4500");
$product2 = new Product("Mouse", "50");

$cart = new ShoppingCart();
$cart->add($product1);
$cart->add($product2);
$cart->show();