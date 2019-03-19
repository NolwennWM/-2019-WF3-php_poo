<?php
namespace Manager;

class MovieManager extends \Entity\Movie
{
    public function findAll($choice = '*', $option = '')
    {   
        return \Database::getInstance()->query('SELECT '.$choice.' FROM movie '. $option)
                ->fetchAll(\PDO::FETCH_CLASS, \Entity\Movie::class);
    }
    public function addNew($mov)
    {
        $q = \Database::getInstance()->prepare('INSERT INTO movie 
        (`title`,`synopsis`,`released_at`,`category`) 
        VALUES (:title, :synopsis, :released_at, :category)');

        $q -> bindValue(':title', $mov->title, \PDO::PARAM_STR);
        $q -> bindValue(':synopsis', $mov->synopsis, \PDO::PARAM_STR);
        $q -> bindValue(':released_at', $mov->released_at, \PDO::PARAM_STR);
        $q -> bindValue(':category', $mov->category, \PDO::PARAM_STR);

        $q -> execute();
    }
}

?>