<?php

class BankAccountExample {
    public string $accountNumber;
    public float $balance;
    public string $accountHolderName;

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
}

// This is representing one account
$account = new BankAccountExample();
$account->accountNumber = '2099900';
$account->balance = 3000.9;
$account->accountHolderName = "Emon Mahmud";

// Chaining method call
$account->deposit(5699)
->deposit(200)
->withdraw(500);

$account->withdraw(100);


echo "Accoutn holser is: $account->accountHolderName
Account number is: $account->accountNumber and balance is: ".$account->getBalance()." <br>";

$account2 = new BankAccountExample();
$account2->accountHolderName = "James Roy";
$account2->accountNumber = '11111111';
$account2->balance = 5555.09;
$account2->deposit(655);
$account2->withdraw(345);

echo "Accoutn holser is: $account2->accountHolderName
Account number is: $account2->accountNumber and balance is: $account2->balance";

?>