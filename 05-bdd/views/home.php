<?php
require_once __DIR__ . '/header.php';


echo "<h1>Page d'accueil</h1>";

$movieManager = new Manager\MovieManager();
$movies = $movieManager->findAll();

?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Synopsis</th>
            <th>Date de sortie</th>
            <th>Catégorie</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($movies as $movie): ?>
        <tr>
            <th><?= $movie->id; ?></th>
            <th><?= $movie->title; ?></th>
            <th><?= $movie->getSynopsis(); ?></th>
            <th><?= $movie->getReleasedAt(); ?></th>
            <th><?= $movie->category ?></th>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


<?php  

require_once __DIR__ . '/footer.php';
?>