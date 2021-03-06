<?php


namespace App\Billing;


class CreditPaymentGateway implements PaymentGatewayContract
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
        $fees = $amount * 0.03;
        return [
            'amount' => ($amount - $this->discount)+$fees,
            'transcationNumber' => '1234567890',
            'currency' => $this->currency,
            'discount' => $this->discount,
            'fees' => $fees
        ];
    }
}
