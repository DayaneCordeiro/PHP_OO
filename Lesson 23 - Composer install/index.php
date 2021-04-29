<?php

require_once 'vendor/autoload.php';

// Defining a namespace to Slug
use Cocur\Slugify\Slugify;

// Instantiating Slugify class
$slugify = new Slugify();
echo $slugify->slugify("Hello world!");      // hello-world
echo "<br>";
echo $slugify->slugify("Hello world!", "_"); // hello_world
echo "<br>";

$slugify->addRule("i", "ey");
echo $slugify->slugify("hiiiiiiiii");        // heyeyeyeyeyeyeyeyey