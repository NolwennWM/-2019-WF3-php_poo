<?php
class SavingAccount extends BankAccount
{
    public function applyInterest($per){
        $this->balance *= (1+$per/100);
        return "Intérêt de ". $per ." % bien appliqué au compte de ". $this->owner;
    }
}
?>