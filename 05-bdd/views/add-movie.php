<?php
require_once __DIR__ . '/header.php';

$movie = new Entity\Movie();
$movie->hydrate($_POST);

if($movie->isValid()){ 
    $movieManager = new Manager\MovieManager();
    $movieManager->addNew($movie);
}

echo "<h1>Page d'Ajout de film</h1>";

$form = new html\Form($_POST);
$form ->input('titre')
    ->textarea('synopsis')
    ->input('sortie', 'date', 'Date de sortie')
    ->input('categorie')
    ->button('Ajouter');

echo $form;

?>

<?php  

require_once __DIR__ . '/footer.php';
?>