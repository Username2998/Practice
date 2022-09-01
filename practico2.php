<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   echo "Hello world";
    ?>
    <hr>
    <?php
$greeting = "Hello world";
print $greeting;
    ?>
    <hr>
    <?php
    $int1 = 44;
    $int2 = 20;
    echo "number #1: " . $int1 . "<br>";
    echo "number #2: " . $int2 . "<br>";
    echo "sum :" . $int1 + $int2 . "<br>";
    echo "resta :" .$int1 - $int2 . "<br>";
    echo "multiplicación :" .$int1 * $int2 . "<br>";
    echo "división :" .$int1 / $int2 . "<br>";
    echo "resta :" .$int1 % $int2 . "<br>";
   ?>
   <hr>
   <?php
   $degrees = 20;
   echo "20°c a Fahrenheit :" . $degrees * 1.8 + 32;
    ?>
    <hr>
    <?php
$base = 18;
$altura = 12;
echo "Base :" . $base . "<br>";
echo "Altura :" . $altura . "<br>";
echo "Area :" . $base * $altura . "<br />";  
echo "Perimetro :" . ($base + $altura) * 2
    ?>
    <hr>
    <?php
$ratio = 30;
$pi = (int) 3.14159265359;
echo "Ratio :" . $ratio . "<br>";
echo "Area :" .pow($ratio, 2) * $pi . "<br>";
echo "Perimetro :" . $pi * 2 * $ratio . "<br>";

    ?>
    
    
    
    
    

</body>
</html>