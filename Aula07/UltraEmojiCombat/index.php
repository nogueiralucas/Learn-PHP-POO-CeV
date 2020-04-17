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
        require_once "Lutador.php";

        $l = array();
        $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 1);
        $l[1] = new Lutador("PutScript", "Brasil", 29, 1.68, 67.8, 14, 2, 3);

        $l[0]->status();
        $l[1]->status();
    ?>
</body>
</html>