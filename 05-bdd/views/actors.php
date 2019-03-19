<?php
require_once __DIR__ . '/header.php';


echo "<h1>Page d'Acteurs</h1>";

$actorManager = new Manager\ActorManager();
$actors = $actorManager->findAll();

?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Âge</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($actors as $actor): ?>
        <tr>
            <th><?= $actor->id; ?></th>
            <th><?= $actor->getFullName(); ?></th>
            <th><?= $actor->getAge(); ?></th>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


<?php  

require_once __DIR__ . '/footer.php';
?>