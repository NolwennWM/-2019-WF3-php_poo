<?php
require_once __DIR__ . '/header.php';


$linkManager = new Manager\LinkManager();
$linkManager->ActorMovie($_POST);


echo "<h1>Page de liaison Acteur et film</h1>";


$actorManager = new Manager\ActorManager();
$actors = $actorManager->findAll();
$selectActors =[[],[]];
foreach($actors as $actor){
    $selectActors[0][] = $actor->id;
    $selectActors[1][] = $actor->getFullName(); 
}
$movieManager = new Manager\MovieManager();
$movies = $movieManager->findAll();
$selectMovie =[[],[]];
foreach($movies as $movie){
    $selectMovies[0][] = $movie->id;
    $selectMovies[1][] = $movie->title; 
}

$form = new html\Form($_POST);
$form->select('acteur', $selectActors[0], $selectActors[1])
    ->select('film', $selectMovies[0], $selectMovies[1])
    ->button('lier');

    echo $form;
?>

<?php  

require_once __DIR__ . '/footer.php';
?>