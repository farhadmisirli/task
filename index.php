<?php

class Operation
{
    private TransactionalOperation $operation;

    public function __construct(TransactionalOperation $operation)
    {
        $this->operation = $operation;
    }

    function performOperation(): void
    {
        $this->operation->makeTransaction();
    }
}

$operation = new Operation(new WithdrawOperation());
$operation->performOperation();
