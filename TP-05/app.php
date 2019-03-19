<?php
    include_once "personnages.php";

    
    // if ('POST' === $_SERVER['REQUEST_METHOD']) {

    //     $action = $_POST['act']?? null;

    //     switch($action){
    //         case "useItem"
    //     }
    // }
    $aragorn = new Webforce\RPG\Character\Warrior('Aragorn');
    $legolas = new Webforce\RPG\Character\Hunter('Legolas');
    $gandalf = new Webforce\RPG\Character\Magus('Gandalf');
    
    $aragorn->attack($legolas);
    $legolas->rangedAttack($gandalf);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($legolas);

    $gandalf->searchItem();
    $gandalf->useItem("Potion de vie");
?>