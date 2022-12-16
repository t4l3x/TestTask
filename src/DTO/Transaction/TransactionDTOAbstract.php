<?php

namespace Task\DTO\Transaction;

use Cassandra\Date;
use DateTimeInterface;
use Task\Entity\Account\Account;

abstract class TransactionDTOAbstract
{
    private int $amount;

    private Account $account;

    private string $comment;

    private DateTimeInterface $dueDate;

    private string $type;

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return TransactionDTOAbstract
     */
    public function setComment(string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getDueDate(): DateTimeInterface
    {
        return $this->dueDate;
    }

    /**
     * @param DateTimeInterface $dueDate
     * @return TransactionDTOAbstract
     */
    public function setDueDate(DateTimeInterface $dueDate): self
    {
        $this->dueDate = $dueDate;
        return $this;
    }


    /**
     * @return int $amount
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return TransactionDTOAbstract
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return \Task\Entity\Account\Account
     */
    public function getAccount(): Account
    {
        return $this->account;
    }

    /**
     * @param mixed $account
     */
    public function setAccount(Account $account): self
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return TransactionDTOAbstract
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

}