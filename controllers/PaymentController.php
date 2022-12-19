<?php

namespace App\controllers;

use App\exceptions\UnsupportedTransactionType;
use App\operations\TransactionType;
use App\requests\WithdrawOperationRequest;
use App\Models\Account;
use App\operations\OperationFactory;

require "models/Account.php";
require "operations/TransactionalOperations.php";
require "operations/OperationFactory.php";

class PaymentController
{
    /**
     * @throws UnsupportedTransactionType
     */
    public function withdraw(WithdrawOperationRequest $request): void
    {
        $account = new Account("John Doe", 1000);
        $amount = $request->getAmount();

        $operationFactory = new OperationFactory();
        $operation = $operationFactory->getOperation(TransactionType::WITHDRAW);
        $operation->makeTransaction($account, $amount);
        echo $account;
    }
}