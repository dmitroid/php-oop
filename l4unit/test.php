<?php

require_once ('Cart.php');
require_once ('Item.php');

use Shop\Cart;
use Shop\Item;


$cart = new Cart();

$cart->add(new \Shop\Item(1, "orange", 15));
$cart->add(new \Shop\Item(2, "juice", 25));
//
//var_dump($cart);
//
//echo count($cart);

foreach ($cart as $item) {
    echo "id: " . $item->id . ", name: " . $item->name . ", price: " . $item->price . PHP_EOL;
}