<?php

namespace App\Http\Controllers;

use MercadoPago\Payment;
use MercadoPago\Preference;
use MercadoPago\SDK;

class PaymentController extends Controller
{
    private $payment;
    private $preference;

    public function __construct()
    {
        SDK::setAccessToken('TEST-5734803031239198-051323-31ae5c45c0588aec7da627261b91712b__LA_LD__-176978574');
        $this->payment = new Payment();
        $this->preference = new Preference();
    }

    public function index()
    {
        $preference = 1;

        return view('payment', compact('preference'));
    }

    public function store()
    {
        $this->payment->transaction_amount = 141;
        $this->payment->token = "YOUR_CARD_TOKEN";
        $this->payment->description = "Ergonomic Silk Shirt";
        $this->payment->installments = 1;
        $this->payment->payment_method_id = "visa";
        $this->payment->payer = array(
            "email" => "juanblariza@gmail.com"
        );

        $this->payment->save();

        return $this->payment->status;
    }
}
