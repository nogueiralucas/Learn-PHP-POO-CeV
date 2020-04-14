<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "Caneta.php";

        $c1 = new Caneta;
        $c1->cor = 'red';
        $c1->tampada = false;
        $c1->tampar();

        print_r($c1);
        $c1->rabiscar();
    ?>
</body>
</html>