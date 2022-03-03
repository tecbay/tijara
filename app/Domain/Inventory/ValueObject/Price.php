<?php

namespace App\Domains\Inventory\ValueObject;

class Price
{
    private float $amount;
    private string $currency;

    public function __construct()
    {
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getPrice()
    {
        return $this->amount.' '.$this->currency;
    }
}
