<?php
namespace Webforce\RPG\Character;
use \Webforce\RPG\Utils\Character\Character_Class;

class Hunter extends Character_Class
{
        public function rangedAttack($target){
            echo ('HP de '.$target->name .' chute de '. $target->hp);
            $target->hp -= $this->strenght;
            echo (' à '.$target->hp .' suite à une flèche.<br>');
            $this->endFight($target);
        }
}
?>