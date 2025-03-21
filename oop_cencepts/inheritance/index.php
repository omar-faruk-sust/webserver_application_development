<?php
require "SavingsAccount.php";
require "CheckingAccount.php";

/** When you don't have any constructor in child class */
/*$savingsAccount = new SavingsAccount("3883833", 7989);
echo "My opening balance is: ". $savingsAccount->getBalance() . "<br>";
$savingsAccount->setInterestRate(0.2);
$savingsAccount->addInterest();
echo "After applying the interest the new balance is: ". $savingsAccount->getBalance() . "<br>";
*/

/** When you have a constructor in clild class where child class does not call the parent class constrctor */
//$account = new SavingsAccount(1.2);

$savingsAccount = new SavingsAccount("3883833", 7989, 0.2);
echo "My opening balance is: ". $savingsAccount->getBalance() . "<br>";
$savingsAccount->addInterest();
echo "After applying the interest the new balance is: ". $savingsAccount->getBalance() . "<br>";


$checkingAccount = new CheckingAccount('11111', 1200, 100);
echo "My opening balance is: ". $checkingAccount->getBalance() . "<br>";
$checkingAccount->withdraw(500);
echo "New banalnce after widrawal is: ". $checkingAccount->getBalance();
