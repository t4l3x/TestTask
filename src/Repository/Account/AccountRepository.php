<?php

namespace Task\Repository\Account;

use Task\Entity\Account\Account;
use Task\Repository\RepositoryInterface;

class AccountRepository implements RepositoryInterface
{
    /**
     * @param Account $account
     * @return Account
     */
    public function getBalance(Account $account): Account
    {

    }

    public function getById($id) : Account
    {
        // TODO: Implement getById() method.
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function persist($entity)
    {
        // TODO: Implement persist() method.
    }

    public function begin()
    {
        // TODO: Implement begin() method.
    }

    public function commit()
    {
        // TODO: Implement commit() method.
    }
}