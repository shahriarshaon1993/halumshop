<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Interface\OrderInterface;

class OrderController extends Controller
{
    protected $order;

    public function __construct(OrderInterface $order)
    {
        $this->middleware('auth:admin');
        $this->order = $order;
    }

    public function orderPandding()
    {
        $orders = $this->order->orderPandding();
        return view('backend.order.pandding', compact('orders'));
    }

    public function viewOrder($id)
    {
        $order = $this->order->order($id);
        $shipping = $this->order->shipping($id);
        $details = $this->order->details($id);

        return view('backend.order.view-order', compact('order', 'shipping', 'details'));
    }
}
