<?php
class BankAccount
{
    protected $balance;
    protected $owner;
    private $id;

    public function __construct($id, $name, $total = 0){
        $this->id = $id;
        $this->owner = $name;
        $this->balance = $total;
    }
    public function getBalance(){
        return $this->balance;
    }
    public function depositMoney($coin){
        if($coin < 0){
            return false;
        }
        $this->balance += $coin;
        return true;
    }
    public function withdrawMoney($coin){
        if($this->balance-$coin < 0 || $coin < 0){
            return false;
        }
        $this->balance -= $coin;
        return true;
    }
    public function wire($coin, BankAccount $account){
        if(!$this->withdrawMoney($coin)){
            return false;
        }
        $account->depositMoney($coin);
        return true;
    }
}

?>