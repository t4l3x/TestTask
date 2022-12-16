<?php

namespace Task\Services\Transaction;

use Exception;
use Task\DTO\Transaction\DepositDTO;
use Task\DTO\Transaction\TransferDTO;
use Task\DTO\Transaction\WithdrawDTO;
use Task\Entity\Account\Account;
use Task\Entity\Transaction\Transaction;
use Task\Repository\Account\AccountRepository;
use Task\Repository\Transaction\TransactionRepository;

class TransactionService
{

    protected TransactionRepository $transactionRepository;
    protected AccountRepository $accountRepository;


    public function __construct(TransactionRepository $transactionRepository, AccountRepository $accountRepository)
    {
        $this->transactionRepository = $transactionRepository;
        $this->accountRepository = $accountRepository;
    }


    public function deposit(DepositDTO $dto): void
    {
        try {
            $transaction = $this->doTransaction($dto);

            $account = $this->accountRepository->getBalance($dto->getAccount());

            $account->

        } catch (Exception $e) {

        }
    }

    public function withdraw(WithdrawDTO $dto): void
    {
        try {
            $transaction = $this->doTransaction($dto);
        } catch (Exception $e) {

        }
    }

    public function transfer(TransferDTO $dto): void
    {
        try {
            //some transaction begin
            $transaction = $this->doTransaction($dto);

            $sender = $this->accountRepository->getById($dto->getAccount());
            $sender->setBalance($sender->getBalance() - $dto->getAmount());
            $this->accountRepository->persist($sender);

            $receiver = $this->accountRepository->getById($dto->getReceiver());
            $receiver->setBalance($receiver->getBalance() + $dto->getAmount());
            $this->accountRepository->persist($receiver);

        } catch (Exception $e) {

        }
    }

    private function doTransaction($dto): Transaction
    {
        $transaction = new Transaction();
        $transaction->setAmount($dto->getAmount());
        $transaction->setComment($dto->getComment());
        $transaction->setDue($dto->getDueDate());
        $this->transactionRepository->persist($transaction);
        return $transaction;
    }

}