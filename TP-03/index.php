<?php
    include_once "interface.php";
    include_once "form.php";
    include_once "rectangle.php";
    include_once "square.php";
    include_once "circle.php";

    $rectangle = new Rectangle(5, 10);
    $square = new Square(5); // Un carré étend la classe rectangle
    $circle = new Circle(5); // L'argument est le rayon du cercle
    $response = new Rectangle(6, 7);

    echo $rectangle->area() . '<br />'; // Affiche 50
    echo $rectangle->perimeter() . '<br />'; // Affiche 30

    echo $square->area() . '<br />'; // Affiche 25
    echo $square->perimeter() . '<br />'; // Affiche 20

    echo $circle->area() . '<br />'; // Affiche 78.54
    echo $circle->perimeter() . '<br />'; // Affiche 31.42

    echo $response->area() . '<br />'; 

    $form = new Form();
    $form
        ->add($rectangle)
        ->add($square)
        ->add($circle)
    ;

    echo $form->area() . '<br />'; // Affiche 153.54
    echo $form->perimeter() . '<br />'; // Affiche 81.42

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>