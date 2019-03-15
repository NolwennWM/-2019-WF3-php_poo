<?php
class SavingAccount extends BankAccount
{
    public function applyInterest($per){
        $this->balance += $this->balance/100*$per;
        return "Intérêt de ". $per ." % bien appliqué au compte de ". $this->owner;
    }
}
?>