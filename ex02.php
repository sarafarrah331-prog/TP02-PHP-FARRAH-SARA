<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>

<?php

$nom = "Sara";
$prenom = "Farrah";
$age = 20;
$formation = "Informatique";

$presentation = "Je m'appelle " . $prenom . " " . $nom;
$presentation .= ", j'ai " . $age . " ans";
$presentation .= " et je suis en formation " . $formation . ".";
$presentation .= " J'apprends PHP.";

echo $presentation;

echo "<br><br>";

$note = 12;
$Note = 16;

echo "note = " . $note;
echo "<br>";
echo "Note = " . $Note;

?>
</body>
</html>