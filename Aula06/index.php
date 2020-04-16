<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <?php
    require_once 'ControleRemoto.php';

    $c = new ControleRemoto();
    $c->ligar();
    $c->abrirMenu();
    ?>
</body>
</html>