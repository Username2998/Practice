<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP4_Backend</title>
</head>
<body>
<h2>Exercise 1: Numbers from 1 to 100 </h2> 
<?php
$i = 0;
while ($i < 101) 
{print "- $i\n";
$i++;
}
?> 
<br>
<h2>Exercise 2: Numbers from 100 to 1</h2>
<?php
 $i = 100;
while ($i > 0) 
{print "- $i\n";
$i--;
}
?>
<br>
<h2>Exercise 3: Even numbers from 1 to 100</h2>
<?php
 $i=0;
 while($i <= 100){
if($i % 2 == 0){
echo $i."- \n";
}
$i++;
}
?>
<h2>Exercise 4: Odd numbers from 1 to 100</h2>
<?php
 $i=0;
 while($i <= 100){
if($i % 2 != 0){
echo $i." -  \n";
}
$i++;
}
?>
<h2>Exercise 5: Sum of 1 to 20</h2>
<?php
$start = 0;
$end = 20;
$sum = 0;

for ($i = $start; $i <= $end; $i++) {
    $sum += $i;
}

echo $sum;
?>
<h2>Exercise 6: Sum of even numbers from 1 to 20</h2>
<?php
$end = 20;
$sum = 0;
for ($i = 0; $i <= 20; $i++) {
if ($i % 2 == 0){
    $sum = $sum + $i;
}
}
echo $sum
?>
</body>
</html>
