<?php
require_once __DIR__ . '/header.php';

$actor = new Entity\Actor();
$actor->hydrate($_POST);

if($actor->isValid()){ 
    $actorManager = new Manager\ActorManager();
    $actorManager->addNew($actor);
}

echo "<h1>Page d'Ajout d'Acteurs</h1>";

$form = new html\Form($_POST);
$form ->input('nom')
    ->input('prénom')
    ->input('naissance', 'date', 'Date de naissance')
    ->button('Ajouter');

echo $form;

?>

<?php  

require_once __DIR__ . '/footer.php';
?>