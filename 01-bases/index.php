<?php 
require_once 'dragon.php';

$draco = new dragon();
$krokmou = new dragon();

$draco -> name = "Draco";
$draco -> type = "Dragon des cavernes";
$draco -> scale = "rouge";

echo 'Mon dragon s\'appelle '.$draco->name.' et il fait '.$draco->cry();

$krokmou -> name = "Krokmou";

echo '<br>Mon autre dragon s\'appelle '.$krokmou->name.' et il fait '.$krokmou->cry(). ' aussi. <br>';

var_dump($draco);
echo '<br>';
var_dump($krokmou);
?>