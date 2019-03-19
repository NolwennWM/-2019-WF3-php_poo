<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <?php 
    $baseUrl = $_SERVER['REQUEST_SCHEME'] .'://'. $_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME'];
    ?>
    <div class="container">
        <a class="navbar-brand" href="<?= $baseUrl ?>/">Webforce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= $baseUrl ?>/">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $baseUrl ?>/acteurs">Acteurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $baseUrl ?>/films/ajouter">Ajouter un film</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $baseUrl ?>/acteurs/ajouter">Ajouter un acteur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $baseUrl ?>/acteurs-film">Lier acteurs et films</a>
            </li>
            </ul>
        </div>
  </div>
</nav>
    <div class="container">