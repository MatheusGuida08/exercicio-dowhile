<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 01</title>
</head>

<body>

    <form method="post">
        <h1>Tabuada</h1><br>
        <label for="num">Insira um número</label>
        <input type="number" name="numb" required>
        <button type="submit">Calcular</button><br>


    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numb = $_POST["numb"];
    $i = 1;
    function multi($a, $b){
        return $a * $b;
    }
    do{
        echo "$numb x $i = " . multi($numb, $i) . "<br>";
        $i++;
    }while($i <= 10);
}
?>

    <a href="../index.php">Voltar para o menu</a><br>
    <a href="ex02.php">Próximo exercício</a>
</body>

</html>