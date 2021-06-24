@extends('frontend.layouts.master')

@section('content')

    @include('backend.partials._message')

    @php
        $vat = $setting->vat;
        $shipping_charge = $setting->shipping_charge;
    @endphp

    <section class="checkout spad">
        <div class="container">
            <div class="card customCard">
                <div class="card-header customCard__header">
                    Checkout
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Your cart</span>
                                <span class="badge badge-success badge-pill">
                                    {{ $cart->count() }}
                                </span>
                            </h4>
                            <ul class="list-group mb-3 checkout-list-group">
                                @foreach ($cart as $product)
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                        <div>
                                            <h6 class="my-0">{{ $product->name }}</h6>
                                            <small class="text-muted">Quantity: {{ $product->qty }}</small>
                                        </div>
                                        <span class="text-muted">৳{{ $product->price*$product->qty }}</span>
                                    </li>
                                @endforeach
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Shipping Charge</h6>
                                    </div>
                                    <span class="text-muted">৳{{ $shipping_charge }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Vat</h6>
                                    </div>
                                    <span class="text-muted">৳{{ $vat }}</span>
                                </li>

                                @if (Session::has('coupon'))
                                    <li class="list-group-item d-flex justify-content-between bg-light">
                                        <div class="text-success">
                                            <h6 class="my-0">Promo code</h6>
                                            <small style="text-transform: uppercase">
                                                {{ Session::get('coupon')['name'] }}
                                            </small>
                                        </div>
                                        <span class="text-success">
                                            -৳{{ Session::get('coupon')['discount'] }}
                                        </span>
                                    </li>
                                @endif

                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total (BDT)</span>
                                    @if (Session::has('coupon'))
                                        <strong>
                                            ৳{{ Session::get('coupon')['balance'] + $shipping_charge + $vat}}
                                        </strong>
                                    @else
                                        <strong>৳{{ Cart::subtotal() + $shipping_charge + $vat}}</strong>
                                    @endif
                                </li>
                            </ul>

                            @if (!Session::has('coupon'))
                                {{ Form::open(['route' => 'apply.coupon', 'class' => 'card p-2']) }}
                                    <div class="input-group">
                                        {{ Form::text('coupon', null, ['class' => 'form-control', 'placeholder' => 'Promo code']) }}
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-success">Redeem</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                            @endif
                        </div>
                        <div class="col-md-8 order-md-1">
                            <h4 class="mb-3">Billing address</h4>
                            <form action="{{ route('payment.proccess') }}" method="POST" class="needs-validation" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <div class="input-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
                                </div>

                                <div class="mb-3">
                                    <label for="phone">Phone</span></label>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Your phone number">
                                </div>

                                <div class="mb-3">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control" id="address" placeholder="Your Address" required>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="state">City</label>
                                        <select name="city" class="custom-select d-block w-100" id="state" required>
                                            <option value="">Choose...</option>
                                            <option value="dhaka">Dhaka</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <label for="zip">Post Code</label>
                                        <input type="text" name="post_code" class="form-control" id="zip" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Your post code
                                        </div>
                                    </div>
                                </div>

                                <hr class="mb-4">
                                <h4 class="mb-3">Payment</h4>

                                <div class="d-block my-3">
                                    <div class="custom-control custom-radio">
                                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" value="mastercard" checked required>
                                        <label class="custom-control-label" for="credit">Mastercard</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" value="cashon" required>
                                        <label class="custom-control-label" for="debit">Cash On</label>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
