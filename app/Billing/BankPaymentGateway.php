<?php


namespace App\Billing;


class BankPaymentGateway implements PaymentGatewayContract
{
    private $currency;
    private $discount;

    public function __construct($currency)
    {
        $this->currency = $currency;
    }

    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }

    public function charge($amount)
    {
        return [
            'amount' => $amount - $this->discount,
            'transcationNumber' => '1234567890',
            'currency' => $this->currency,
            'discount' => $this->discount
        ];
    }
}
