<?php

namespace App\operations;

use App\exceptions\UnsupportedTransactionType;
use App\models\Account;

enum TransactionType
{
    case WITHDRAW;
    case DEPOSIT;
    case TRANSFER;
}

interface TransactionalOperation
{
    public function makeTransaction();
}

class WithdrawOperation implements TransactionalOperation
{
    public function makeTransaction(Account $account = null, float $amount = 0)
    {
        // TODO: Implement makeTransaction() method.
        $account->setBalance($account->getBalance() - $amount);
    }
}

class DepositOperation implements TransactionalOperation
{
    public function makeTransaction()
    {
        // TODO: Implement makeTransaction() method.
    }
}

class TransferOperation implements TransactionalOperation
{
    public function makeTransaction()
    {
        // TODO: Implement makeTransaction() method.
    }
}

