<?php

namespace solutions;

// Define a class called 'BankAccount'
class BankAccount {
    // Private properties to represent sensitive data
    private $accountNumber;
    private $balance;

    // Constructor to initialize the properties
    public function __construct($accountNumber, $initialBalance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    // Public method to get the account number (read-only)
    public function getAccountNumber() {
        return $this->accountNumber;
    }

    // Public method to get the balance (read-only)
    public function getBalance() {
        return $this->balance;
    }

    // Public method to deposit money into the account
    public function deposit($amount) {
        // Perform validation and update the balance
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposit of $amount successful. New balance: {$this->balance}<br>";
        } else {
            echo "Invalid deposit amount<br>";
        }
    }

    // Public method to withdraw money from the account
    public function withdraw($amount) {
        // Perform validation and update the balance
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawal of $amount successful. New balance: {$this->balance}<br>";
        } else {
            echo "Invalid withdrawal amount or insufficient balance<br>";
        }
    }
}

// Create an object (instance) of the 'BankAccount' class
$account = new BankAccount("123456789", 1000);

// Accessing public methods to interact with the class's properties
echo "Account Number: " . $account->getAccountNumber() . "<br>";
echo "Initial Balance: " . $account->getBalance() . "<br>";

// Attempt to access private properties directly (will result in an error)
// echo $account->accountNumber; // Uncommenting this line will result in an error
// echo $account->balance; // Uncommenting this line will result in an error

// Interact with the class using public methods
$account->deposit(500);
$account->withdraw(200);

?>
