<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Interface\OrderInterface;
use App\Models\Order;
use Illuminate\Http\Request;

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

    public function orderAccept(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = 1;
        $order->update();

        $notification = array(
            'message' => 'Order Accept',
            'alert-type' => 'success'
        );
        return Redirect()->route('orders.pandding')->with($notification);
    }

    public function orderCancel(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = 4;
        $order->update();

        $notification = array(
            'message' => 'Order Accept',
            'alert-type' => 'success'
        );
        return Redirect()->route('orders.pandding')->with($notification);
    }
}
