<?php

require_once 'vendor/autoload.php';

$product = new \App\Model\Product();
$product->setName("Notebook DELL");
$product->setDescription("i7, 8GB");

$productDao = new \App\Model\ProductDao();
$productDao->create($product);