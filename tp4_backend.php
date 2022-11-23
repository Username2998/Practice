<?php
$par = [2, 4, 6, 8, 10];
$npar = implode ("\n",  $par);
print "Los numeros pares son: ";
foreach ($par as $valor) {
    print "<p>$valor</p>\n";
}
?>
<hr> 
<?php
$dat = ["Pedro", "Ana", 34, 1,];

print_r($dat)
?>
<hr>
<?php
$pedtor = [
    "Nombre" => 'Pedro',
    "Apellido" => 'Torres',
    "Dirección" => 'Av. Mayor 3703',
    "Teléfono" => 1122334455,
];

$user1 = implode (", ", $pedtor);
echo "Los datos de Pedro son: " . $user1
?>
<hr>
<?php
$city = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
echo "<pre>";
print "la ciudad con el índice 0 es : " . $city [0] . "\n";
echo "<pre>";
print "la ciudad con el índice 1 es : " . $city [1] . "\n";
echo "<pre>";
print "la ciudad con el índice 2 es : " . $city [2] . "\n";
echo "<pre>";
print "la ciudad con el índice 3 es : " . $city [3] . "\n";
echo "<pre>";
print "la ciudad con el índice 4 es : " . $city [4] . "\n";
echo "<pre>";
print "la ciudad con el índice 5 es : " . $city [5] . "\n";
?>
<hr>
<?php
$city2 = [
    "MD" => 'Madrid',
    "BCL" => 'Barcelona',
    "LD" => 'Londres',
    "NY" => 'New York',
    "LA" => 'Los Ángeles',
    "CCG" => 'Chicago'
    ];
foreach($city2 as $key => $Madrid) {
    echo $key . " es el índice de: " . $Madrid . "\n";
}


?>