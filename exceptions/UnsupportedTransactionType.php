<?php

namespace App\exceptions;

use Exception;

class UnsupportedTransactionType extends Exception
{
    public function errorMessage(): string
    {
        return "Unsupported transaction type";
    }
}