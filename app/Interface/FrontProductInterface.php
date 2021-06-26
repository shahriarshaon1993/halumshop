<?php

namespace App\Interface;

interface FrontProductInterface
{
    public function productView($slug);
    public function addProductCart($request, $slug);
    public function category($slug);
}
