<?php

require 'BankAccount.php';

class SavingsAccount extends BankAccount {
    
    private float $interestRate;
    
    /*public function __construct(float $rate)
    {
        $this->interestRate = $rate;
    }*/

    public function __construct(String $acNumber, float $amount, float $rate)
    {
        parent::__construct($acNumber, $amount); // Call parent class constructor
        
        $this->interestRate = $rate;

        $this->log("The interest rate for saving account is: ". $rate);
    }

    /*public function setInterestRate(float $interestRate): void
	{
		$this->interestRate = $interestRate;
	}*/

	public function addInterest()
	{
		// calculate interest
		$interest = $this->interestRate * $this->getBalance();
		// deposit interest to the balance
		$this->deposit($interest);
	}
}