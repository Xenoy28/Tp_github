<?php

require_once '../src/bdd/bdd.php';

$idlivre = $_GET['id_livre'];
$sql = "SELECT * FROM livre WHERE id_livre = :livre";
$req = $bdd->prepare($sql);
$res = $req->execute(array(
    'livre' => $idlivre
));
$livre = $req->fetch();
if ($livre == false) {
    header("Location: liste_livre.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Modification</title>
</head>
<body>
<h1>Modification d'un livre</h1>
<form method="post" action="../src/traitement/modifier.php">
    <label>titre :</label>
    <input type="text" name="titre" value="<?= $livre['titre'] ?>">
    <label>annee :</label>
    <input type="text" name="annee" value="<?= $livre['annee'] ?>">
    <label>resume :</label>
    <input type="text" name="resume" value="<?= $livre['resume'] ?>">

    <input type="hidden" name="id_livre" value="<?= $livre['id_livre'] ?>">

    <input type="submit" name="modifier" value="modifier">
</form>

</body>
</html>
