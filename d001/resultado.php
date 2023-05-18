<!DOCTYPE html>
<html lang="pt-ber">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado final</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <header>
        <h1>Resultado final</h1>
    </header> -->
    <main>
    <h1>Resultado final</h1>
        <?php 
            $num = $_GET["numero"] ?? 0;
            $ant = $num - 1;
            $suc = $num + 1;
            echo "O número escolhido foi <strong>$num</strong> <br> O seu antecessor é $ant <br> O seu sucessor é $suc";
        ?>
        <p><a href="javascript:history.go(-1)">&lt- Voltar</a></p>
    </main>
</body>
</html>