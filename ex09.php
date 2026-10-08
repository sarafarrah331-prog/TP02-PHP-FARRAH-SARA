<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
</head>
<body>

<h2>Notes des étudiants</h2>

<?php

$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nombreValides = 0;
$meilleureNote = 0;
$meilleurEtudiant = "";

echo "<table border='1'>";
echo "<tr>";
echo "<th>Étudiant</th>";
echo "<th>Note</th>";
echo "<th>Résultat</th>";
echo "</tr>";

foreach ($notes as $etudiant => $note) {

    $somme += $note;

    if ($note >= 10) {
        $resultat = "Validé";
        $nombreValides++;
    }
    else {
        $resultat = "Non validé";
    }

    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $etudiant;
    }

    echo "<tr>";
    echo "<td>" . $etudiant . "</td>";
    echo "<td>" . $note . "</td>";
    echo "<td>" . $resultat . "</td>";
    echo "</tr>";
}

echo "</table>";

$moyenne = $somme / count($notes);

echo "<br>";
echo "Somme des notes : " . $somme . "<br>";
echo "Moyenne de la classe : " . $moyenne . "<br>";
echo "Nombre d'étudiants validés : " . $nombreValides . "<br>";
echo "Meilleure note : " . $meilleureNote . "<br>";
echo "Meilleur étudiant : " . $meilleurEtudiant;

?>

</body>
</html>