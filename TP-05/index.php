<?php
    spl_autoload_register(function ($class){
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        require_once __DIR__."\src\\".$class.".php";
    });
    $game = new Webforce\RPG\Game();

    $aragorn = new Webforce\RPG\Character\Warrior('Aragorn');
    $legolas = new Webforce\RPG\Character\Hunter('Legolas');
    $gandalf = new Webforce\RPG\Character\Magus('Gandalf');
    
    $game -> addPlayer($aragorn)
            -> addPlayer($legolas)
            -> addPlayer($gandalf);

    $aragorn->attack($legolas);
    $legolas->rangedAttack($gandalf);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($aragorn);
    $gandalf->castSpell($legolas);

    $gandalf->searchItem();
    $gandalf->useItem("Potion de vie");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RPG</title>
</head>
<body>
    <div id="history"></div>
    
    <form action="app.php" method="post" id="chooseAction">
        <label for="searchItem">Search Item</label>
        <input type="radio" name="act" value="searchItem" id="searchItem">
        <label for="useItem">useItem</label>
        <input type="radio" name="act" value="useItem" id="useItem">
        <button>Choisir</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        var form = $('chooseAction');

        form.on('submit', function (event) {
            event.preventDefault(); 

            var formData = form.serialize(); 

            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: formData
            }).done(function (message) {
                if(isset(message)){
                    $('#history').append($("<div>". message ."</div>"));
                }
            });
        });
            
    </script>
</body>
</html>