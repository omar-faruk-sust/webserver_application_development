<?php

/** Example of constructor */
class BankAccountConstructor {
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

    public function deposit(float $amount): self {
        
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

// This is representing one account
$account = new BankAccountConstructor('2099900', 3000.9);

// Chaining method call
$account->deposit(5699)
->deposit(200)
->withdraw(500);

$account->withdraw(100);


echo "Account number is:". $account->getAccountNumber() 
." and balance is: ".$account->getBalance()." <br>";

?>