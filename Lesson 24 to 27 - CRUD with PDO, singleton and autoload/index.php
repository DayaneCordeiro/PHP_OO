<?php

require_once 'vendor/autoload.php';

$productDao = new \App\Model\ProductDao();

$products = array();
$products = $productDao->read();

echo "<pre>";
    print_r($products);
echo "</pre>";

$product = new \App\Model\Product();
$product->setId(1);
$product->setName("Notebook Samsung");
$product->setDescription("i3, 4GB");

$productDao->update($product);
$productDao->delete(1);

