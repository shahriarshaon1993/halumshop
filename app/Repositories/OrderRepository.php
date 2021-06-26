<?php

namespace App\Repositories;

use App\Interface\OrderInterface;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Shipping;

class OrderRepository implements OrderInterface
{
    public function orderPandding()
    {
        return Order::where('status', 0)->paginate(10);
    }

    public function order($id)
    {
        return Order::with('user')->where('id', $id)->first();
    }

    public function shipping($id)
    {
        return Shipping::with('order')->where('id', $id)->first();
    }

    public function details($id)
    {
        return OrderDetails::with('product', 'order')->where('order_id', $id)->get();
    }
}
