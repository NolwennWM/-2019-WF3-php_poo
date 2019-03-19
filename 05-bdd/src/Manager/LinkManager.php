<?php

namespace Manager;

class LinkManager
{
    public function ActorMovie($data)
    {   
        if(empty($data)){return;}
        
        $actorManager = new ActorManager();
        $actor = $actorManager->findAll('id', 'WHERE id='.$_POST['acteur']);
        $movieManager = new MovieManager();
        $movie = $movieManager->findAll('id', 'WHERE id='.$_POST['film']);
        if(empty($actor) || empty($movie)){return;}

        $q = \Database::getInstance()->prepare('INSERT INTO re_movie_actor 
        (`id_movie`,`id_actor`) VALUES (:id1, :id2)');

        $q -> bindValue(':id1', $data['film'], \PDO::PARAM_INT);
        $q -> bindValue(':id2', $data['acteur'], \PDO::PARAM_INT);

        $q -> execute();
    }
}

?>