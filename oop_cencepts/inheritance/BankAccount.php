<?php

class BankAccount {
    private string $accountNumber;
    private float $balance;

    public function __construct(String $acNumber, float $amount)
    {
        $this->accountNumber = $acNumber;
        $this->balance = $amount;
    }

    public function getBalance() {
        return $this->balance;
    }

    protected function deposit(float $amount): self {
        
        if ($amount > 0) {
            $this->balance += $amount;
        }

        return $this;
    }

    public function withdraw(float $amount): bool {
        if ($amount < $this->balance) {
            $this->balance -= $amount;
            return true;
        }

        return false;
    }

    public function getAccountNumber(): string {
        return $this->accountNumber;
    }
}