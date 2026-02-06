<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 04</title>
</head>

<body>
    <h1>Sequência de Fibonacci</h1>

    <form method="post">
        <label>Insira um número</label>
        <input type="number" name="num" required><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num = intval($_POST["num"]);

        if ($num > 0) {

            $x = 0;
            $y = 1;
            $i = 1;

            do {
                echo $x . " ";

                $prox = $x + $y;
                $x = $y;
                $y = $prox;

                $i++;
            } while ($i <= $num);
        }
    }
    ?>
    <br>
    <a href="../index.php">Voltar para o menu</a><br>
</body>

</html>
