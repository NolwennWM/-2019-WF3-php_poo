<?php
class BankAccount
{
    protected $balance = 0.0;
    protected $owner;
    protected $id;

    public function __construct($id, $name, $total = 0){
        $this->id = $id;
        $this->owner = $name;
        $this->balance = $total;
    }
    public function getBalance(){
        return $this->owner ." à ". $this->balance ." &euro;";
    }
    public function depositMoney($coin){
        if($coin >= 0){
            $this->balance += $coin;
            return $this->owner ." à ". $this->balance ." &euro; sur son livret, suite à un dépot.";
        }else{
            return "Impossible de déposer un montant Négatif.";
        }
    }
    public function withdrawMoney($coin){
        if($this->balance-$coin >= 0 && $coin >= 0){
            $this->balance -= $coin;
            return $this->owner ." à ". $this->balance ." &euro; sur son livret, suite à un retrait.";
        }else{
            return "Impossible de retirer ce montant.";
        }
    }
    public function wire($coin, $account){
        if($coin >= 0 && $account instanceof BankAccount && $this->balance-$coin >= 0){
            $account->balance += $coin;
            $this->balance -= $coin;
            return $this->owner ." à ". $this->balance ." &euro; sur son livret, suite à l'envoi de ". $coin ." &euro; à ". $account->owner;
        }else{
            return "Virement impossible";
        }
    }
}

?>