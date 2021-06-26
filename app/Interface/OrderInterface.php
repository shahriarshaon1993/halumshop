<?php

namespace App\Interface;

interface OrderInterface
{
    public function orderPandding();
    public function order($id);
    public function shipping($id);
    public function details($id);
}
