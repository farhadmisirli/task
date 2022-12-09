<?php

enum OrderType
{
    case ASC;
    case DESC;
}

interface TransactionDao
{
    public function getAllAccountTransactionsSortedByComment(OrderType $orderType);

    public function getAllAccountTransactionsSortedByDate(OrderType $orderType);
}

class TransactionDaoImpl implements TransactionDao
{
    public function getAllAccountTransactionsSortedByComment(OrderType $orderType)
    {
        // TODO: Implement getAllAccountTransactionsSortedByComment() method.
    }

    public function getAllAccountTransactionsSortedByDate(OrderType $orderType)
    {
        // TODO: Implement getAllAccountTransactionsSortedByDate() method.
    }
}