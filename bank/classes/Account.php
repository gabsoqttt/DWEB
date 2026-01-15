<?php
class Account {
    private $accountNumber;
    private $type;
    private $balance;

    public function __construct($accountNumber, $type, $balance) {
        $this->accountNumber = $accountNumber;
        $this->type = $type;
        $this->balance = $balance;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function getType() {
        return $this->type;
    }

    public function getBalance() {
        return $this->balance;
    }
}
?>
