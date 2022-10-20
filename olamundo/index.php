<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Fernando">
    <meta name="description" content="Calculadora soma simples em php">
    <meta name="keywords" content="calculadora, soma, php">
    <title>Calculadora soma php</title>
</head>
<body>
    <h1>Calculadora Soma php</h1>
<form action="index.php" method="post">
Valor 1: <input type="text" name="n1" value="0"><br>
Valor 2: <input type="text" name="n2" value="0"><br>
<input type="submit" value="Somar"><br>
</form>
<?php 
    $n1=$_POST["n1"];
    $n2=$_POST["n2"];
    echo "Valor 1:" . $n1 . "<br>";
    echo "Valor 2:" . $n2 . "<br>";
    $soma=$n1 + $n2;
    echo "Soma: " . $soma . "<br>";
?>



</body>
</html>