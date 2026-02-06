<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 04</title>
</head>

<body>
    <h1>Fatorial de N</h1>

    <form method="post">
        <label name="num">Insira um número</label>
        <input type="number" name="num"><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        $soma = 1;
        do {
            $soma = $soma * $num;
            $num--;
        } while ($num > 1);
        echo "Resultado: $soma";
    }
    ?>
    <br>
    <a href="../index.php">Voltar para o menu</a><br>
    <a href="ex05.php">Próximo exercício</a>
</body>

</html>