<?php

interface TransactionalOperation
{
    public function makeTransaction();
}

class WithdrawOperation implements TransactionalOperation
{
    public function makeTransaction()
    {
        // TODO: Implement makeTransaction() method.
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