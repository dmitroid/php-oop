<?php
namespace Shop;

require_once ('Cart.php');
require_once ('Item.php');

use Shop\Cart;
use Shop\Item;

$cart = new Cart();

$cart->add(new \Shop\Item(1, "orange", 15));
$cart->add(new \Shop\Item(2, "milk", 9));
$cart->add(new \Shop\Item(3, "juice", 5));

var_dump($cart);
$cart->remove(1);
var_dump($cart);
//echo $cart->count();
//echo "<br>";
//
//echo $cart->total();
//
//echo "<br>";

//
//var_dump($cart);
//$cart->clear();
//var_dump($cart);
//echo $cart->count();
//echo "<br>";
//




