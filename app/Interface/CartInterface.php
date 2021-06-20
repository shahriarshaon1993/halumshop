<?php

namespace App\Interface;

interface CartInterface
{
    public function showCart();
    public function updateCartItem($request);
    public function removeCart($rowId);
}
