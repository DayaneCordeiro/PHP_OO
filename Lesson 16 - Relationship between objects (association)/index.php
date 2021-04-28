<?php

class Order {
	public $number;
	public $client;
}

class Client {
	public $name;
	public $address;
}

$client = new Client();
$client->name = "Dayane Cordeiro";
$client->address = "Rua A, 01";

$order = new Order();
$order->number = 1;
$order->client = $client;

$data = arra(
	'number'         => $order->number,
	'client_name'    => $order->client->name,
	'client_address' => $order->client->address
);

var_dump($data);