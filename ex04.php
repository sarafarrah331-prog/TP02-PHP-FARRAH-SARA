<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>

<?php

$entier = 42;
$chaine = "42";
$decimal = 15.8;
$vrai = true;
$faux = false;
$vide = null;

echo "<h2>Types et valeurs</h2>";

echo "<pre>";
var_dump($entier);
var_dump($chaine);
var_dump($decimal);
var_dump($vrai);
var_dump($faux);
var_dump($vide);
echo "</pre>";

echo "<h2>Conversions</h2>";

$chaineEnEntier = (int) "42";
$decimalEnEntier = (int) 15.8;
$entierEnChaine = (string) 42;

echo "<pre>";
var_dump($chaineEnEntier);
var_dump($decimalEnEntier);
var_dump($entierEnChaine);
echo "</pre>";

echo "<h2>Boolean avec echo</h2>";

echo "true avec echo : " . true . "<br>";
echo "false avec echo : " . false . "<br>";

echo "<h2>Boolean avec var_dump()</h2>";

var_dump(true);
var_dump(false);

echo "<h2>Conversions en booléen</h2>";

var_dump((bool) 0);
var_dump((bool) "0");
var_dump((bool) "PHP");
var_dump((bool) []);

?>

</body>
</html>