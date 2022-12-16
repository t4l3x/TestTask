<?php

namespace Task\DTO\Transaction;

use Task\Entity\Account\Account;

class TransferDTO extends TransactionDTOAbstract
{
    protected Account $receiver;
    private string $type = 'transfer';
    /**
     * @return Account
     */
    public function getReceiver(): Account
    {
        return $this->receiver;
    }

    /**
     * @param Account $receiver
     * @return TransferDTO
     */
    public function setReceiver(Account $receiver): self
    {
        $this->receiver = $receiver;
        return $this;
    }
}