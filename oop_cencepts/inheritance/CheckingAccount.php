<?php

class CheckingAccount extends BankAccount {
    private float $minBalance;

    public function __construct(string $accountNo, float $amount, float $minBalance)
    {
        if ($minBalance >= 100 && $amount >= $minBalance) {
            parent::__construct($accountNo, $amount);

            $this->minBalance = $minBalance; 

        } else {
            throw new InvalidArgumentException("Minimum amount has to be 100$ in order to open a checking account");
        }
    }

    public function withdraw(float $amount): bool
    {
        $currentBalance = $this->getBalance();

        if ($currentBalance >= 1000 && $amount < $currentBalance) {
            return parent::withdraw($amount);
        }
        
        return throw new \Exception("Can not widthaw the amount" . $amount);   
    }

}