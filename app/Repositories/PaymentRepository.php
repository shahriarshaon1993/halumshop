<?php

namespace App\Repositories;

use App\Interface\PaymentInterface;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Setting;
use App\Models\Shipping;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PaymentRepository implements PaymentInterface
{
    public function payment($request)
    {
        $charge = Setting::select('shipping_charge', 'vat')->first();
        $total = Cart::Subtotal() + $charge->shipping_charge + $charge->vat;

        $order = new Order();
        $order->user_id = Auth::id();
        $order->shipping = $charge->shipping_charge;
        $order->vat = $charge->vat;
        $order->total = $total;
        $order->payment_type = $request->paymentMethod;
        $order->status_code = mt_rand(1000000, 9999999);

        if (Session::has('coupon')) {
            $order->subtotal = Session::get('coupon')['balance'];
        } else {
            $order->subtotal = Cart::Subtotal();
        }
        $order->save();
        $order_id = $order->id;

        // Insert Shipping Table
        $shipping = new Shipping();

        $shipping->order_id = $order_id;
        $shipping->ship_name = $request->name;
        $shipping->ship_phone = $request->phone;
        $shipping->ship_email = $request->email;
        $shipping->ship_address = $request->address;
        $shipping->ship_city = $request->city;
        $shipping->post_code = $request->post_code;

        $shipping->save();

        // Insert Order Details Table

        $content = Cart::content();
        $order_details = new OrderDetails();

        foreach ($content as $row) {
            $order_details->order_id = $order_id;
            $order_details->product_id = $row->id;
            $order_details->product_name = $row->name;
            $order_details->color = $row->options->color;
            $order_details->size = $row->options->size;
            $order_details->quantity = $row->qty;
            $order_details->singleprice = $row->price;
            $order_details->totalprice = $row->qty * $row->price;
            $order_details->save();
        }

        Cart::destroy();
        if (Session::has('coupon')) {
            Session::forget('coupon');
        }
    }

    public function stripe($request)
    {
        $email = Auth::user()->email;
        $db_charge = Setting::select('shipping_charge', 'vat')->first();
        $total = Cart::Subtotal() + $db_charge->shipping_charge + $db_charge->vat;

        \Stripe\Stripe::setApiKey('sk_test_51IZ4h3DAuvR6KSdrAtEE0IhiMONzHhrlITaj6jmAxzcUtMmRIz5mSFsETrkW8KClj07t04zppJxl5fBDaydRLMOB00h7PKeKoH');

        $token = $_POST['stripeToken'];

        $charge = \Stripe\Charge::create([
            'amount' => $total * 100,
            'currency' => 'usd',
            'description' => 'Halumshop Store',
            'source' => $token,
            'metadata' => ['order_id' => uniqid()],
        ]);

        $order = new Order();
        $order->user_id = Auth::id();
        $order->payment_id = $charge->payment_method;
        $order->paying_amount = $charge->amount;
        $order->blnc_transection = $charge->balance_transaction;
        $order->stripe_order_id = $charge->metadata->order_id;
        $order->shipping = $db_charge->shipping_charge;
        $order->vat = $db_charge->vat;
        $order->total = $total;
        $order->payment_type = $request->paymentMethod;
        $order->status_code = mt_rand(1000000, 9999999);

        if (Session::has('coupon')) {
            $order->subtotal = Session::get('coupon')['balance'];
        } else {
            $order->subtotal = Cart::Subtotal();
        }
        $order->save();
        $order_id = $order->id;

        // Insert Shipping Table
        $shipping = new Shipping();

        $shipping->order_id = $order_id;
        $shipping->ship_name = $request->name;
        $shipping->ship_phone = $request->phone;
        $shipping->ship_email = $request->email;
        $shipping->ship_address = $request->address;
        $shipping->ship_city = $request->city;
        $shipping->post_code = $request->post_code;

        $shipping->save();

        // Insert Order Details Table

        $content = Cart::content();
        $order_details = new OrderDetails();

        foreach ($content as $row) {
            $order_details->order_id = $order_id;
            $order_details->product_id = $row->id;
            $order_details->product_name = $row->name;
            $order_details->color = $row->options->color;
            $order_details->size = $row->options->size;
            $order_details->quantity = $row->qty;
            $order_details->singleprice = $row->price;
            $order_details->totalprice = $row->qty * $row->price;
            $order_details->save();
        }

        Cart::destroy();
        if (Session::has('coupon')) {
            Session::forget('coupon');
        }
    }
}
