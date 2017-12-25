<?php

namespace Solution;

use Shop\Cart;
use Shop\Item;


function addToCart(Cart $cart, Item $item)
{
    // BEGIN (write your solution here)
    $cart->items[] = $item;
    // END
}

function getCount (Cart $cart)
{
    return count($cart->items);
}

function getTotal (Cart $cart)
{
    $total = null;
    foreach ($cart->items as $value) {
        foreach ($value as $k => $v) {
            if ($k == 'price') {
                $total += $v;
            }
        }
    }
    return $total;
}