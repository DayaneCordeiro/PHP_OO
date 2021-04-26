<?php

abstract class Bank {
    protected $balance;
    protected $withdraw_limit;
    protected $fees;

    abstract protected function withdraw($value);
    abstract protected function deposit($value);

    public function getBalance() {
        return $this->balance;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
    }
}

class Itau extends Bank {
    public function withdraw($value) {
        $this->setBalance($this->getBalance() - $value);
        echo "<hr>Withdrew: R$" . $value;
    }

    public function deposit($value) {
        $this->setBalance($this->getBalance() + $value);
        echo "<hr>Deposited: R$" . $value;
    }
}

$itau1 = new Itau();
$itau1->setBalance(1000);
echo "<hr> Balance: R$" . $itau1->getBalance();
$itau1->withdraw(250);
echo "<hr> Balance: R$" . $itau1->getBalance();
$itau1->deposit(350);
echo "<hr> Balance: R$" . $itau1->getBalance();