<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use App\Interface\PaymentInterface;

class PaymentController extends Controller
{
    protected $payment;

    public function __construct(PaymentInterface $payment)
    {
        $this->middleware('auth');
        $this->payment = $payment;
    }

    public function payment(PaymentRequest $request)
    {
        if ($request->paymentMethod == "cashon") {

            $this->payment->payment($request);

            $notification = array(
                'message' => 'Order process successfully done',
                'alert-type' => 'success'
            );

            return Redirect()->to('/')->with($notification);
        } elseif ($request->paymentMethod == "mastercard") {
            return 'MasterCard';
        } else {
            $notification = array(
                'message' => 'Please select the appropriate payment method',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
