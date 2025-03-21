<?php

require_once("Logger.php");

class BankAccount {
    // This is how you include a trait
    use Logger;

    private string $accountNumber;
    private float $balance;

    public function __construct(String $acNumber, float $amount)
    {
        $this->accountNumber = $acNumber;
        $this->balance = $amount;

        $this->log("A new bank account is created and it's number is: ". $acNumber);
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

    public final function getMyBalance()
    {
        return $this->getBalance();
    }
}