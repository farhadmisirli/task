<?php

namespace App\operations;

use App\exceptions\UnsupportedTransactionType;

class OperationFactory
{
    /**
     * @throws UnsupportedTransactionType
     */
    public function getOperation(TransactionType $type): TransactionalOperation
    {
        if ($type === TransactionType::WITHDRAW) {
            return new WithdrawOperation();
        } else if ($type === TransactionType::DEPOSIT) {
            return new DepositOperation();
        } else if ($type === TransactionType::TRANSFER) {
            return new TransferOperation();
        } else {
            throw new UnsupportedTransactionType();
        }
    }
}