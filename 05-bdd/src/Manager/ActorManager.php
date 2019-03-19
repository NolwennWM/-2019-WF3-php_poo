<?php
namespace Manager;

class ActorManager extends \Entity\Actor
{
    public function findAll($choice = '*', $option = '')
    {
        return \Database::getInstance()->query('SELECT '.$choice.' FROM actor '. $option)
                ->fetchAll(\PDO::FETCH_CLASS, \Entity\Actor::class);
    }
    public function addNew($act)
    {
        $q = \Database::getInstance()->prepare('INSERT INTO actor 
        (`lastname`,`firstname`,`birthday`) VALUES (:lastname, :firstname, :birthday)');

        $q -> bindValue(':lastname', $act->lastname, \PDO::PARAM_STR);
        $q -> bindValue(':firstname', $act->firstname, \PDO::PARAM_STR);
        $q -> bindValue(':birthday', $act->birthday, \PDO::PARAM_STR); 

        $q -> execute();
    }
}

?>