<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat POST</title>
</head>
<body>

<?php

if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["groupe"])
) {

    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $groupe = trim($_POST["groupe"]);

    if ($nom != "" && $prenom != "" && $groupe != "") {

        $nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenom = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupe = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

        echo "Bienvenue " . $prenom . " " . $nom . " !<br>";
        echo "Votre groupe est : " . $groupe;

    } else {
        echo "Veuillez remplir tous les champs.";
    }

} else {

    echo "Veuillez remplir le formulaire POST.";

}

?>

</body>
</html>