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
        require_once 'ContaBanco.php';

        $p1 = new ContaBanco();
        $p2 = new ContaBanco();

        $p1->abrirConta("CC");
        $p1->setDono("Jubileu");
        $p1->setNumConta(1111);

        $p2->abrirConta("CP");
        $p2->setDono("Creuza");
        $p2->setNumConta(2222);

        $p1->depositar(300);
        $p2->depositar(500);

        $p2->sacar(100);
        $p2->pagarMensal();

        $p1->sacar($p1->getSaldo());
        $p2->sacar($p2->getSaldo());

        $p1->fecharConta();
        $p2->fecharConta();

        print_r($p1);
        print_r($p2);
    ?>
    </pre>
</body>
</html>