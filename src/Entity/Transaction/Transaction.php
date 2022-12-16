<?php declare(strict_types=1);

namespace Task\Entity\Transaction;

use DateTimeInterface;
use Task\Entity\Account\Account;

/**
 *
 */
class Transaction
{
    /**
     * @var Account
     */
    protected Account $account;

    /**
     * @var string
     */
    protected string $comment;
    /**
     * @var int
     */
    protected int $amount;
    /**
     * @var DateTimeInterface
     */
    protected DateTimeInterface $due;

    /**
     * @var string
     */
    protected string $type;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return Account
     */
    public function getAccount(): Account
    {
        return $this->account;
    }

    /**
     * @param Account $account
     * @return Transaction
     */
    public function setAccount(Account $account): Transaction
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return Transaction
     */
    public function setComment(string $comment): Transaction
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return Transaction
     */
    public function setAmount(int $amount): Transaction
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getDue(): DateTimeInterface
    {
        return $this->due;
    }

    /**
     * @param DateTimeInterface $due
     * @return Transaction
     */
    public function setDue(DateTimeInterface $due): Transaction
    {
        $this->due = $due;
        return $this;
    }

}