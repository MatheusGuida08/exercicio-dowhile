<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 03</title>
</head>

<body>
    <h1>Todos os número de N até 1</h1>

    <form method="post">
        <label name="num">Insira um número</label>
        <input type="number" name="num"><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        do {
            echo $num . "<br>";
            $num--;
        } while ($num >= 1);
    }

    ?>
    <a href="../index.php">Voltar para o menu</a><br>
    <a href="ex04.php">Próximo exercício</a>
</body>

</html>