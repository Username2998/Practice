<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <?php
    $n1 = 4;
    echo "n1 es : $n1" . "<br>";
    if ($n1 > 0) {
echo "$n1 es un numero positivo";
    }
    ?>
    <hr>
    <h2>Ejercicio 2</h2>
    <?php
    $n2 = 5;
    echo "n2 es : $n2" . "<br>";
    if ($n2 > 1 && $n2 < 10) {
echo "$n2 es mayor a 1 y menor a 10";
    }
    ?>
    <hr>
    <h2>Ejercicio 3</h2>
    <?php
    $n3 = 22;
    $n4 = 1;
    echo "n3 es : $n3" . "<br>";
    if ($n3 > 10 || $n3 < 2) {
        echo "$n3 es mayor a 10" . "<br>";
    }
    echo "n4 es : $n4" . "<br>";
     if ($n4 > 10 || $n4 < 2) {
        echo "$n4 es menor a 2";
    } 
    ?>
    <hr>
    <h2>Ejercicio 4</h2>
    <?php
$numero1 = 22;
$numero2 = 93;
echo "numero1 es $numero1" . "<br>";
echo "numero2 es $numero2" . "<br>";
if ($numero1 > $numero2) {
    echo "$numero1 es mayor a $numero2" . "<br>";
    echo "su suma es :" .$numero1 + $numero2 . "<br>";
    echo "su resta es:" .$numero1 - $numero2 . "<br>";

} elseif ($numero2 > $numero1) {
    echo "$numero2 es mayor a $numero1" . "<br>";
    echo "su miltiplicación es :" .$numero1 * $numero2 . "<br>";
    echo "su división es :" .$numero1 / $numero2 . "<br>";
    echo "el resto de su división es :" . $numero1 % $numero2 . "<br>";
} else {
    echo "$numero1 es igual a $numero2";
}
    ?>
</body>
</html>