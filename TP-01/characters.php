<?php

class Character_Class
{
    protected $name;
    protected $hpMax = 100;
    protected $hp = 100;
    protected $strenght = 10;
    protected $magic = 10;
    protected $inventory = [];
    protected $xp = 0;
    protected $level = 1;

    public function __construct($name){
        $this->name = $name;
    }
    public function attack($target){
        echo ('HP de '.$target->name .' chute de '. $target->hp);
        $target->hp -= $this->strenght*0.5;
        echo (' à '.$target->hp .' suite à un coup d\'épée.<br>');
        $this->endFight($target);
    }
    public function castSpell($target){
        echo ('HP de '.$target->name .' chute de '. $target->hp);
        $target->hp -= $this->magic*0.5;
        echo (' à '.$target->hp .' suite à une boule de feu.<br>');
        $this->endFight($target);
    }
    protected function endFight($target){
        if($target->hp <=0){
            $this->xp += $target->level *10;
            echo($this->name ." gagne ". ($target->level *10)."xp.<br>");
        }
        if($this->xp >= $this->level*15){
            $this->level ++;
            $this->hpMax +=20;
            $this->strenght +=5;
            $this->magic +=5;

            echo($this->name ." gagne un niveau. <br>"); 
        }
    }
    public function searchItem(){
        if(rand(0,1) == 1){
            echo($this->name ." trouve une potion de vie. <br>");
            array_push($this->inventory, "Potion de vie");
        }else{
            echo($this->name ." ne trouve rien. <br>");
        }
    }
    public function useItem($item){
        if(in_array($item, $this->inventory)){
            echo($this->name ." utilise ". $item ."<br>");
            echo("PV de ". $this->name ." passe de ". $this->hp);
            $this->hp += 50;
            echo(" à ". $this->hp ."<br>");
        }
        else{
            echo($this->name ." n'a pas de ". $item ." sur lui.<br>");
        }
    }

}

?>