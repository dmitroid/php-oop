<?php
include ('Cart.php');
include ('Solution.php');
include ('Item.php');

use Shop\Cart;
use Shop\Item;
use function Solution\addToCart;
use function Solution\getCount;
use function Solution\getTotal;

$cart = new Cart();

addToCart($cart, new \Shop\Item('milk', 12));
addToCart($cart, new Item('water', 2));
addToCart($cart, new Item('sugar', 3));
var_dump($cart);

echo getCount($cart) . ' - количество товаров в корзине <br>';

echo getTotal($cart) . ' - сума товаров в корзине';
