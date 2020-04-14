<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            require_once "Caneta.php";

            $c1 = new Caneta;
            $c1->modelo = "Faber Castell Fine Pen";
            var_dump($c1);
        ?>
    </pre>
</body>
</html>