<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8</title>
</head>
<body>

<h2>Partie 1 : nombres pairs</h2>

<?php

$nombre = 0;

while ($nombre <= 20) {

    if ($nombre == 10) {
        echo "<strong>$nombre</strong><br>";
    }
    else {
        echo $nombre . "<br>";
    }

    $nombre += 2;
}

?>

<h2>Partie 2 : while et do-while</h2>

<?php

$compteur = 5;
$executionsWhile = 0;

while ($compteur < 5) {
    $executionsWhile++;
    $compteur++;
}

echo "Nombre d'exécutions de while : " . $executionsWhile . "<br>";

$compteur = 5;
$executionsDoWhile = 0;

do {
    $executionsDoWhile++;
    $compteur++;
} while ($compteur < 5);

echo "Nombre d'exécutions de do-while : " . $executionsDoWhile . "<br>";

?>

<h2>Partie 3 : continue et break</h2>

<?php

for ($i = 1; $i <= 20; $i++) {

    if ($i >= 16) {
        break;
    }

    if ($i % 3 == 0) {
        continue;
    }

    echo $i . "<br>";
}

?>

</body>
</html>