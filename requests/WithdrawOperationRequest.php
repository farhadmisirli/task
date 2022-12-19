<?php

namespace App\requests;

class WithdrawOperationRequest
{
    private float $amount;

    public function __construct($amount)
    {
        $this->setAmount($amount);
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

}