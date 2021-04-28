<?php

require 'classes/product.php';
require 'models/product.php';

$product = new \classes\Product();
$product->showDetails();
echo "<br>";

// Another way to use namespaces
use models\Product();

$product = new Product();
$product->showDetails();
echo "<br>";

// Another way to use namespaces
use classes\Product() as productClasses;

$product = new productClasses();
$product->showDetails();