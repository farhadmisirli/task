<?php

use App\models\Account;

interface AccountDao
{
    public function getAllAccounts();

    public function getBalanceOfAccount(Account $account);
}

class AccountDaoIpl implements AccountDao
{
    public function getAllAccounts()
    {
        // TODO: Implement getAllAccounts() method.
    }

    public function getBalanceOfAccount(Account $account)
    {
        // TODO: Implement getBalanceOfAccount() method.
    }

}