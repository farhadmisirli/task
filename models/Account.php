<?php
namespace App\models;

class Account
{
    private int $id;
    private string $name;
    private float $balance;

    public function __construct($name, $balance = 0)
    {
        $this->generateId();
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function setBalance(float $amount): void
    {
        $this->balance = $amount;
    }

    private function generateId(): void
    {
        $this->id = random_int(1000, 9999);
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return "{id: {$this->id}, name: {$this->name}, balance: {$this->getBalance()}}\n";
    }
}

