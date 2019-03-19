<?php
require_once __DIR__."/../config/autoload.php";

$uri = $_SERVER['PATH_INFO']?? '/';

switch($uri){
    case '/':
        require_once __DIR__ . '/../views/home.php';
        break;
    case '/acteurs':
        require_once __DIR__ . '/../views/actors.php';
        break;
    case '/films/ajouter':
        require_once __DIR__ . '/../views/add-movie.php';
        break;
    case '/acteurs/ajouter':
        require_once __DIR__ . '/../views/add-actor.php';
        break;
    case '/acteurs-film':
        require_once __DIR__ . '/../views/actors-movie.php';
        break;
}

?>