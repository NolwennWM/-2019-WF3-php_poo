<?php
    include_once "bank-account.php";
    include_once "saving-account.php";

    $bankAccount01 = new BankAccount(123456, 'Matthieu'); // Matthieu a 0 sur son compte
    echo "<br>". $bankAccount01->getBalance(); // Renvoie 0
    $bankAccount01->depositMoney(1000); // Matthieu a 1000 sur son compte
    echo "<br>". $bankAccount01->getBalance(); // Renvoie 1000
    $bankAccount01->withdrawMoney(1000); // Matthieu a 0 sur son compte
    
    // On renvoie une erreur le montant du compte tombe en dessous de 0
    $bankAccount01->withdrawMoney(1000); 
    $bankAccount01->depositMoney(-2000);
    
    /**
     * On va ajouter un système de livret qui va hériter d'un compte en banque standard.
     */
    $savingAccount01 = new SavingAccount(123457, 'Matthieu');
    $savingAccount01->depositMoney(1000); // Matthieu a 1000 sur son livret
    $savingAccount01->applyInterest(0.75); // Augmente le montant du livret avec un intérêt de 0,75%
    echo "<br>". $savingAccount01->getBalance(); // Renvoie 1007,5
    $savingAccount01->withdrawMoney(1000); // Matthieu a 0 sur son livret
    
    /**
     * On pourra également ajouter la possibilité pour les comptes et livrets de virer de l'argent
     * sur un autre compte / livret.
     */
    $bankAccount01->depositMoney(1000);
    $bankAccount01->wire(1000, $savingAccount01);
    echo "<br>". $savingAccount01->getBalance();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banque</title>
</head>
<body>
    
</body>
</html>