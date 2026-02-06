<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 02</title>
</head>

<body>
    <h1>Todos os número de 1 até N</h1>

    <form method="post">
        <label name="num">Insira um número</label>
        <input type="number" name="num"><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        $i = 1;
        do {
            echo $i . "<br>";
            $i++;
        } while ($i <= $num);
    }

    ?>
    <a href="../index.php">Voltar para o menu</a><br>
    <a href="ex03.php">Próximo exercício</a>
</body>

</html>